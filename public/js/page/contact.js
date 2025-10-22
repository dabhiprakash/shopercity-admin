$(document).ready(function () {
    init_contact_validation();
    $('#responseMessage').addClass('d-none');
    $(document).on('submit', '#contact_form', function (e) {
        e.preventDefault();
        $('#contactButtonLoader').removeClass('d-none');
        var $this = $(this);
        var formData = new FormData(this);
        if ($this.valid()) {
            $.ajax({
                url: 'contact-us',
                type: "post",
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    $('#contactButtonLoader').addClass('d-none');
                    var response = $.parseJSON(data);
                    $('#responseMessage').removeClass('d-none');
                    if (response.status == true) {
                        $('#responseMessage').addClass('alert-success');
                    } else {
                        $('#responseMessage').addClass('alert-danger');
                    }
                    $('#responseMessage').text(response.message);
                    $('#contact_form')[0].reset();
                }
            });
        }
    });
});

function init_contact_validation() {
    if($('#contact_form').length > 0) {

        $('#contact_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                first_name : {
                    required: true,
                },
                last_name : {
                    required: true,
                },
                email : {
                    required: true,
                    email:true
                },
                message : {
                    required: true,
                },
                condition: {
                    required: true,
                }
            },
            messages: {
                first_name : {
                    required: "Please enter first name",
                },
                last_name : {
                    required: "Please enter last name",
                },
                email : {
                    required: "Please enter email",
                    email: "Please enter valid email"
                },
                message : {
                    required: "Please enter message",
                },
                condition: {
                    required: "Please accept Terms and Conditions and Privacy Policy.",
                }
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "condition") {
                    // put error message after checkbox container
                    error.appendTo("#condition-error-area");
                } else {
                    error.insertAfter(element);
                }
            }
        });
    }
}
