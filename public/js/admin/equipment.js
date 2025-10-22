$(document).ready(function () {
	load_equipment();



    $(document).on('click', '.delete-equipment', function () {
		var equipment_id = $(this).data('id');
		if(equipment_id != '') {
			swal({
				title: "Are you sure you want to delete this equipment ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url: admin_url + 'equipment/delete/' + equipment_id,
						type: "get",
						processData: false,
						contentType: false,
						cache: false,
						async: false,
						success: function (data) {
							var response = $.parseJSON(data);
							if (response.status == true) {
								load_equipment();
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

    $(document).on('click', '.accept-equipment, .reject-equipment', function () {
		var equipment_id = $(this).data('id');
        var type = $(this).data('type');

		if(equipment_id != '') {
			swal({
				title: ($(this).hasClass('accept-equipment') ? "you want to accept this equipment ?" : "you want to reject this equipment ?"),
				icon: ($(this).hasClass('accept-equipment') ? "success" : "error"),
				buttons: true,
				dangerMode: true,
			})
			.then((permission) => {
				if (permission) {
                    $.ajax({
						url: admin_url + 'equipment/permission',
						type: "post",
						cache: false,
						async: false,
                        data: {id : equipment_id, type: type},
						success: function (data) {
							var response = $.parseJSON(data);
							if (response.status == true) {
								load_equipment();
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

    $(document).on('click', '.internal-notes', function () {
		var equipment_id = $(this).data('id');
        $.ajax({
			url: admin_url + 'equipment/notes',
            type: "post",
            data: { id: equipment_id },
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


    $(document).on('submit', '#equipment-form', function (e) {
		e.preventDefault();
		var $this = $(this);
		var formData = new FormData(this);
		if ($this.valid()) {
			$.ajax({
				url: admin_url + 'equipment/notes/commit',
				type: "post",
				contentType: false,
				processData: false,
				data: formData,
				success: function (data) {
					var response = $.parseJSON(data);
					if (response.status == true) {
						showMessage('success', response.message);
						$('#defaultModal').modal('hide');
					} else {
						showMessage('error', response.message);
					}
				}
			});
		}
	});



});

function load_equipment() {
    if($('.user-data-table').length > 0) {
        $('.user-data-table').DataTable({
            "destroy"    : true,
            "processing" : true,
            "serverSide" : true,
            'pageLength' : 10,
            'order'      : [[0, 'DESC']],
            "ajax": {
                "url"   : admin_url+'equipment',
                "type"  : "POST",
            },
            "columns": [
				{ "data"    : "id" },
				{ "data"    : "list" },
				{ "data"    : "seller" },
				{ "data"    : "category" },
				{ "data"    : "price" },
				{ "data"    : "status", "orderable": false },
				{ "data"    : "submitted" },
				{ "data"    : "action", "orderable": false },
            ],
            "columnDefs": [
                {
                    'targets': 5,
                    'createdCell':  function (td, cellData, rowData, row, col) {
                       $(td).attr('nowrap', '');
                    }
                }
            ]
        });
    }
}


function init_validation() {
	if ($('#equipment-form').length > 0) {
        $('#equipment-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				note: {
					required: true,
				},
			},
			messages: {
				note: {
					required: 'Please enter notes',
				},
			},

        });


    }
}
