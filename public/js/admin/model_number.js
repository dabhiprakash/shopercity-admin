$(document).ready(function () {
     $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    load_model_number();

     $('.manufacturer').select2({
        placeholder: "Choose manufacturer",
        allowClear: true
    });


    $(document).on('click', '.setup-model-number', function () {
		var model_number_id = $(this).data('id');
        $.ajax({
			url: admin_url + 'model-number/setup',
            type: "post",
            data: { id: model_number_id },
            success: function (data) {
				var response = $.parseJSON(data);
                if (response.status == true) {
					$('#defaultModal .modal-content').html(response.html);
                    $('#defaultModal').modal('show');
                    init_select2();
                    init_validation();
                } else {
					showMessage('error', response.message);
                }
            }
        });
	});

    $(document).on('click', '.bulk-model-number', function () {
        $.ajax({
			url: admin_url + 'model-number/bulk-import',
            type: "post",
            success: function (data) {
				var response = $.parseJSON(data);
                if (response.status == true) {
					$('#defaultModal .modal-content').html(response.html);
                    $('#defaultModal').modal('show');
                } else {
					showMessage('error', response.message);
                }
            }
        });
	});


    $(document).on('submit', '#model-number-form', function (e) {
		e.preventDefault();
		var $this = $(this);
		var formData = new FormData(this);
		if ($this.valid()) {
			$.ajax({
				url: admin_url + 'model-number/commit',
				type: "post",
				contentType: false,
				processData: false,
				data: formData,
				success: function (data) {
					var response = $.parseJSON(data);
					if (response.status == true) {
						showMessage('success', response.message);
						$('#defaultModal').modal('hide');
						load_model_number()
					} else {
						showMessage('error', response.message);
					}
				}
			});
		}
	});

    $(document).on('submit', '#model-mumber-bulk-form', function (e) {
		e.preventDefault();
		var formData = new FormData(this);
        $.ajax({
            url: admin_url + 'model-number/bulk-upload',
            type: "post",
            contentType: false,
            processData: false,
            async: true,
            timeout: 0,
            data: formData,
            beforeSend: function () {

            },
            success: function(response) {
                if(response.status == true) {
                    $('.progress-div').removeClass('d-none');
                    $('.progress-bar').css('width', '0%').text('0%');

                    let importId = response.import_id;
                    $.ajax({
                        url: admin_url + 'model-number/bulk-upload2/'+ importId,
                        type: "POST",
                        data: {_token: csrf_token},
                        success: function(res){
                            console.log('done');
                        }
                    });
                    trackProgress(importId)
                } else {
                    showMessage('error', response.message);
                }
            }
        });

	});


    $(document).on('click', '.delete-model-number', function () {
		var subcategory_id = $(this).data('id');
		if(subcategory_id != '') {
			swal({
				title: "Are you sure you want to delete this model number ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: admin_url + 'model-number/delete/' + subcategory_id,
						type: "get",
						processData: false,
						contentType: false,
						cache: false,
						async: false,
						success: function (data) {
							var response = $.parseJSON(data);
							if (response.status == true) {
								load_model_number();
								showMessage('success', response.message);
							} else {
								showMessage('error', response.message);
							}
						}
					});
				}
			});
		}
	});

});

function load_model_number() {
    if($('.model-number-data-table').length > 0) {
        $('.model-number-data-table').DataTable({
            "destroy"    : true,
            "processing" : true,
            "serverSide" : true,
            'pageLength' : 10,
            'order'      : [[0, 'ASC']],
            "ajax": {
                "url"   : admin_url+'model-number',
                "type"  : "POST",
                "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            },
            "columns": [
				{ "data"    : "id" },
				{ "data"    : "manufacturer" },
				{ "data"    : "model_number" },
				{ "data"    : "action", "orderable": false },
            ],
            "columnDefs": [
                {
                    'targets': 3,
                    'createdCell':  function (td, cellData, rowData, row, col) {
                       $(td).attr('nowrap', '');
                    }
                }
            ]
        });
    }
}

function init_validation() {
	if ($('#model-number-form').length > 0) {
        $('#model-number-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				manufacturer: {
					required: true,
				},
				model_number: {
					required: true,
				},
			},
			messages: {
				manufacturer: {
					required: 'Please select manufacturer',
				},
				model_number: {
					required: 'Please provide model number',
				},
			},
            errorPlacement: function(error, element) {
                if (element.hasClass("select2-hidden-accessible")) {
                    // Place error after the select2 container
                    error.insertAfter(element.next('.select2'));
                } else {
                    error.insertAfter(element);
                }
            },
        });
    }
}

function init_select2() {
	if ($(".select2-show-search").length > 0) {
		$(".select2-show-search").select2({
			minimumResultsForSearch: "",
			dropdownParent: $("#defaultModal"),
			placeholder: "Search",
			width: "100%",
            ajax: {
                url: admin_url+'model-number/search',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        term: params.term
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
		});
	}
}
function trackProgress(csvUploadId) {
    var interval = setInterval(function(){
        $.get(admin_url + 'model-number/bulk-progress/'+ csvUploadId, function(data){
            let percent = Math.round((data.processed / data.total) * 100);
            $('.progress-bar').width(percent + '%').html(Math.round(percent) + '%');
            if(percent >= 100) {
                clearInterval(interval)
                $('#statusText').text('Upload Completed ✅').removeClass('text-secondary').addClass('text-success');
                $('.progress-div').addClass('d-none');

                setTimeout(() => {
                    $('#defaultModal').modal('hide');
                    load_manufactures()
                }, 10000);

            };
        });
    }, 2000);
}




