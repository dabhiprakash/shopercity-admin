$(document).ready(function () {

    init_banner_validation();


    $(document).on('click','.banner-delete',function(){
        var banner_id = $(this).attr('banner_id');
        var $this = $(this);
        swal({
          title: "Are you sure you want to delete this banner ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url         : admin_url+'banner-image/delete/'+banner_id,
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

function init_banner_validation() {
    if($('#banner_form').length > 0) {

        $('#banner_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                place : {
                    required: true,
                },
                type : {
                    required: true,
                },
                alt_text : {
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
                title : {
                    required: "Please enter placement",
                },
                type : {
                    required: "Please select banner type",
                },
                alt_text : {
                    required: "Please enter alt text",
                },
                start_date : {
                    required:  "Please select start date",
                },
                end_date : {
                    required: "Please select end date",
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

        jQuery.validator.addMethod("image_check", function(value, element){
            if ($('.banner_id').val() == '' && value == '') {
                return false;
            } else {
                return true;
            };
        }, 'Please select image');

    }
}
