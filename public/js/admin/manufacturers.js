$(document).ready(function () {
     $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    load_manufactures();

    $(document).on('click', '.setup-manufacturer', function () {
		var manufacturer_id = $(this).data('id');
        $.ajax({
			url: admin_url + 'manufacturer/setup',
            type: "post",
            data: { id: manufacturer_id },
            success: function (data) {
				var response = $.parseJSON(data);
                if (response.status == true) {
					$('#defaultModal .modal-content').html(response.html);
                    $('#defaultModal').modal('show');
                    init_validation();
                } else {
					showMessage('error', response.message);
                }
            }
        });
	});

    $(document).on('click', '.bulk-manufacturer', function () {
        $.ajax({
			url: admin_url + 'manufacturer/bulk-import',
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


    $(document).on('submit', '#manufacturer-form', function (e) {
		e.preventDefault();
		var $this = $(this);
		var formData = new FormData(this);
		if ($this.valid()) {
			$.ajax({
				url: admin_url + 'manufacturer/commit',
				type: "post",
				contentType: false,
				processData: false,
				data: formData,
				success: function (data) {
					var response = $.parseJSON(data);
					if (response.status == true) {
						showMessage('success', response.message);
						$('#defaultModal').modal('hide');
						load_manufactures()
					} else {
						showMessage('error', response.message);
					}
				}
			});
		}
	});


    $(document).on('submit', '#manufacturer-bulk-form', function (e) {
		e.preventDefault();
		var formData = new FormData(this);
        $.ajax({
            url: admin_url + 'manufacturer/bulk-upload',
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
                        url: admin_url + 'manufacturer/bulk-upload2/'+ importId,
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


    $(document).on('click', '.delete-manufacturer', function () {
		var manufacturer_id = $(this).data('id');
		if(manufacturer_id != '') {
			swal({
				title: "Are you sure you want to delete this manufacturer ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: admin_url + 'manufacturer/delete/' + manufacturer_id,
						type: "get",
						processData: false,
						contentType: false,
						cache: false,
						async: false,
						success: function (data) {
							var response = $.parseJSON(data);
							if (response.status == true) {
								load_manufactures();
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

function load_manufactures() {
    if($('.manufacturer-data-table').length > 0) {
        $('.manufacturer-data-table').DataTable({
            "destroy"    : true,
            "processing" : true,
            "serverSide" : true,
            'pageLength' : 10,
            'order'      : [[0, 'ASC']],
            "ajax": {
                "url"   : admin_url+'manufacturer',
                "type"  : "POST",
                "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            },
            "columns": [
				{ "data"    : "id" },
				{ "data"    : "name" },
				{ "data"    : "action", "orderable": false },
            ],
            "columnDefs": [
                {
                    'targets': 2,
                    'createdCell':  function (td, cellData, rowData, row, col) {
                       $(td).attr('nowrap', '');
                    }
                }
            ]
        });
    }
}

function init_validation() {
	if ($('#manufacturer-form').length > 0) {
        $('#manufacturer-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				name: {
					required: true,
				},
			},
			messages: {
				name: {
					required: 'Please provide name',
				},
			},

        });
    }
}
function trackProgress(csvUploadId) {
    var interval = setInterval(function(){
        $.get(admin_url + 'manufacturer/bulk-progress/'+ csvUploadId, function(data){
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
    }, 10000);
}
