$(document).ready(function () {
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    init_validation();
});

function init_validation() {
	if ($('#admin-login-form').length > 0) {
		$('#admin-login-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				email: {
					required: true,
					email : true,
				},
                password: {
                    required : true,
                    minlength: 6,
                },
                danger_code: {
					required: true,
				},
                magic_number: {
					required: true,
				}

			},
			messages: {
				email: {
					required: 'Please enter email',
                    email	: 'Please enter valid email',
				},
				password: {
					required: 'Please enter password',
                    minlength: 'Password length must be 6',
				},
                danger_code: {
					required: 'Please enter danger code',
				},
                magic_number: {
					required: 'Please enter magic number',
				},
			},
        });
    }

    if ($('#admin-forgot-password-form').length > 0) {
        $('#admin-forgot-password-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				email: {
					required: true,
					email : true,
				},
			},
			messages: {
				email: {
					required: 'Please enter email',
                    email: 'Please enter valid email',
				},
			},
        });
    }

    if ($('#admin-reset-password-form').length > 0) {
        $('#admin-reset-password-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				password : {
					required: true,
                    minlength: 6,
				},
				confirm_password : {
					required: true,
					equalTo : '#password',
				}
			},
			messages: {
				password : {
					required: 'Please enter password',
                    minlength: 'Password length must be 6',
				},
				confirm_password : {
					required: 'Please enter password',
					equalTo: 'confirm password same as password',
				}
			},
        });
    }

    if ($('#profile-form').length > 0) {
        $('#profile-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				name: {
					required: true,
				},
				email: {
					required: true,
					remote: {
                        url: admin_url+'duplicate',
                        type: "post",
                        data: {
                            user_id : $('.user_id').val()
                        }
                    }
				},
			},
			messages: {
				name: {
					required: 'Please enter name',
				},
				email: {
					required: 'Please enter email',
                    email: 'Please enter valid email',
					remote :'Email already exists'
				},
			},
        });
    }

    if ($('#update-password-form').length > 0) {
        $('#update-password-form').validate({
            errorElement: 'span',
			errorClass: 'validate-error',
			rules: {
				new_password : {
					required: true,
                    minlength: 6,
				},
				confirm_password : {
					required: true,
					equalTo : '#new_password',
				}
			},
			messages: {
				new_password : {
					required: 'Please enter new password',
                    minlength: 'Password length must be 6',
				},
				confirm_password : {
					required: 'Please enter confirm password',
					equalTo: 'confirm password same as password',
				}
			 }
        });
    }

}
