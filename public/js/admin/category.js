$(document).ready(function () {
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    load_category();

    $(document).on('click', '.setup-category', function () {
		var category_id = $(this).data('id');
        $.ajax({
			url: admin_url + 'category/setup',
            type: "post",
            data: { id: category_id },
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

    $(document).on('click', '.bulk-category', function () {
        $.ajax({
			url: admin_url + 'category/bulk-import',
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


    $(document).on('submit', '#category-form', function (e) {
		e.preventDefault();
		var $this = $(this);
		var formData = new FormData(this);
		if ($this.valid()) {
			$.ajax({
				url: admin_url + 'category/commit',
				type: "post",
				contentType: false,
				processData: false,
				data: formData,
				success: function (data) {
					var response = $.parseJSON(data);
					if (response.status == true) {
						showMessage('success', response.message);
						$('#defaultModal').modal('hide');
						load_category()
					} else {
						showMessage('error', response.message);
					}
				}
			});
		}
	});

    $(document).on('click', '.delete-category', function () {
		var manufacturer_id = $(this).data('id');
		if(manufacturer_id != '') {
			swal({
				title: "Are you sure you want to delete this category ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: admin_url + 'category/delete/' + manufacturer_id,
						type: "get",
						processData: false,
						contentType: false,
						cache: false,
						async: false,
						success: function (data) {
							var response = $.parseJSON(data);
							if (response.status == true) {
								load_category();
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

function load_category() {
    if($('.category-data-table').length > 0) {
        $('.category-data-table').DataTable({
            "destroy"    : true,
            "processing" : true,
            "serverSide" : true,
            'pageLength' : 10,
            'order'      : [[0, 'ASC']],
            "ajax": {
                "url"   : admin_url+'category',
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
	if ($('#category-form').length > 0) {
        $('#category-form').validate({
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
