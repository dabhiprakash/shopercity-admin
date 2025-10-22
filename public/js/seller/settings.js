$(document).ready(function () {
    $(document).on('click','.change_password',function(){
        var $this = $(this);

        $('#changePasswordSection').fadeIn();
        console.log("Change password clicked....", $('#changePasswordSection')[0].className);
    });
});

