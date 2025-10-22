$(document).ready(function () {

    init_resources_validation();

    $(document).on('click','.resources-delete',function(){
        var resources_id = $(this).attr('resources_id');
        var $this = $(this);
        swal({
          title: "Are you sure you want to delete this resources ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url         : admin_url+'resources/delete/'+resources_id,
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

function init_resources_validation() {
    if($('#resources_form').length > 0) {

        $('#resources_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                title : {
                    required: true,
                },
                pdf : {
                    pdf_check : true,
                },
            },
            messages: {
                title : {
                    required: "Please enter name",
                },
            },

            errorPlacement: function(error, element) {
                if (element.hasClass("dropify")) {
                    // Place error after the select2 container
                    error.insertAfter(element.parents('.dropify-wrapper'));
                } else {
                    error.insertAfter(element);
                }
            },
        });

        jQuery.validator.addMethod("pdf_check", function(value, element){
            if ($('.resources_id').val() == '' && value == '') {
                return false;
            } else {
                return true;
            };
        }, 'Please select image');

    }
}
