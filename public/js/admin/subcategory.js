$(document).ready(function () {
     $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    load_subcategory();

    $(document).on('click', '.setup-subcategory', function () {
		var subcategory_id = $(this).data('id');
        $.ajax({
			url: admin_url + 'sub-category/setup',
            type: "post",
            data: { id: subcategory_id },
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

    $(document).on('submit', '#subcategory-form', function (e) {
		e.preventDefault();
		var $this = $(this);
		var formData = new FormData(this);
		if ($this.valid()) {
			$.ajax({
				url: admin_url + 'sub-category/commit',
				type: "post",
				contentType: false,
				processData: false,
				data: formData,
				success: function (data) {
					var response = $.parseJSON(data);
					if (response.status == true) {
						showMessage('success', response.message);
						$('#defaultModal').modal('hide');
						load_subcategory()
					} else {
						showMessage('error', response.message);
					}
				}
			});
		}
	});

    $(document).on('click', '.delete-subcategory', function () {
		var subcategory_id = $(this).data('id');
		if(subcategory_id != '') {
			swal({
				title: "Are you sure you want to delete this subcategory ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: admin_url + 'sub-category/delete/' + subcategory_id,
						type: "get",
						processData: false,
						contentType: false,
						cache: false,
						async: false,
						success: function (data) {
							var response = $.parseJSON(data);
							if (response.status == true) {
								load_subcategory();
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

function load_subcategory() {
    if($('.subcategory-data-table').length > 0) {
        $('.subcategory-data-table').DataTable({
            "destroy"    : true,
            "processing" : true,
            "serverSide" : true,
            'pageLength' : 10,
            'order'      : [[0, 'ASC']],
            "ajax": {
                "url"   : admin_url+'sub-category',
                "type"  : "POST",
                "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            },
            "columns": [
				{ "data"    : "id" },
				{ "data"    : "name" },
				{ "data"    : "category" },
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
	if ($('#subcategory-form').length > 0) {
        $('#subcategory-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				category: {
					required: true,
				},
				name: {
					required: true,
				},
			},
			messages: {
				category: {
					required: 'Please select category',
				},
				name: {
					required: 'Please provide subcategory name',
				},
			},

        });
    }
}
