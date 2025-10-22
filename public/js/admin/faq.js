$(document).ready(function () {

    init_faq_validation();

    $(document).on('click','.faq-delete',function(e){
        var faq_id = $(this).attr('faq_id');
        swal({
          title: "Are you sure you want to delete this faq ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url         : admin_url+'faq/delete/'+faq_id,
                    type        : "get",
                    processData : false,
                    contentType : false,
                    cache       : false,
                    async       : false,
                    success     : function(data){
                        var response =  $.parseJSON(data);
                        if(response.status == true) {
                            showMessage('success',response.message);
                            location.reload();
                        } else {
                            showMessage('danger',response.message);
                        }
                    }
                });
            }
        });
    });

});

function init_faq_validation() {
    if($('#faq_form').length > 0) {

        $('#faq_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                question : {
                    required: true,
                },
                answer : {
                    required: true,
                },
            },
            messages: {
                question : {
                    required: "Please enter question",
                },
                answer : {
                    required: "Please enter answer",
                },
            },
        });
    }
}
