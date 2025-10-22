$(document).ready(function () {
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    init_banner_validation();
    $('#bannerListLoader').show();
    $('#bannerTable').hide();
    const bannerTable = $('#bannerTable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        autoWidth: false,
        columns: [
            { width: "20%" },
            { width: "25%" },
            { width: "15%" },
            { width: "15%" },
            { width: "15%" },
            { width: "20%" },
        ],
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#bannerListLoader').hide();
            $('#bannerTable').fadeIn();
        }
    });
    $('#bannerSearch').on('keyup', function () {
        bannerTable.search(this.value).draw();
    });
    $(document).on('submit', '#banner_form', function (e) {
		e.preventDefault();
		var $this = $(this);
		var formData = new FormData(this);
		if ($this.valid()) {
			$.ajax({
				url: admin_url + 'banner/commit',
				type: "post",
				contentType: false,
				processData: false,
				data: formData,
				success: function (data) {
                     console.log("Error", data);
					var response = $.parseJSON(data);
					if (response.status == true) {
                        showCustomToster('toster_div','tost_message', 'success', response.message);
						$('#bannerModal').modal('hide');
					} else {
                        showCustomToster('model_toster_div','model_tost_message', 'error', response.message);
					}
				}
			});
		}
	});
    $("#btnSave").on("click", function(e) {
        if ($("#banner_form").valid()) {
            $("#banner_form").submit();
        }
    });
});

function init_banner_validation() {
    if($('#banner_form').length > 0) {

        $('#banner_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                title: {
                    required: true,
                },
                location : {
                    required: true,
                },
                type : {
                    required: true,
                },
                priority : {
                    required: true,
                },
                link : {
                    required: true,
                },
                start_date : {
                    required: true,
                },
                end_date : {
                    required: true,
                },
                image : {
                    image_check : true,
                },
            },
            messages: {
                title: {
                    required: "Please enter title",
                },
                priority : {
                    required: "Please select priority",
                },
                location : {
                    required: "Please select location",
                },
                type : {
                    required: "Please select banner type",
                },
                link : {
                    required: "Please enter link",
                },
                start_date : {
                    required:  "Please select start date",
                },
                end_date : {
                    required: "Please select end date",
                },
                image : {
                    image_check : "Please select image",
                },
             },
             errorPlacement: function (error, element) {
                if (element.attr("name") == "image") {
                    // put error message after checkbox container
                    error.appendTo("#custom-image-error");
                } else {
                    error.insertAfter(element);
                }
            }
        });

        jQuery.validator.addMethod("image_check", function(value, element){
            if ($('.banner_id').val() == '' && value == '') {
                return false;
            } else {
                return true;
            };
        }, 'Please select image');

    }
}
