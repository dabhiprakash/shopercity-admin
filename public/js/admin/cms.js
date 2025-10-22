$(document).ready(function () {


    init_cms_validation()

    if($('.cms-data-table').length > 0) {
        $('.cms-data-table').DataTable();
    }

    $(document).on('keyup', '.cms-title', function(e){
        e.preventDefault();
        var slug    = $(this).val();
        var str     = slug.toLowerCase();
        var ans     = str.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
        $('.cms-slug').val(ans);
    });

    $(document).on('click','.delete-cms',function(e){
        var cms_id = $(this).attr('cms-id');
        swal({
          title: "Are you sure you want to delete this cms page ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url         : admin_url+'cms/delete/'+cms_id,
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

function init_cms_validation() {
    if($('#cms_form').length > 0) {

        $('#cms_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                title : {
                    required: true,
                },
                slug : {
                    required: true,
                },
            },
            messages: {
                title : {
                    required: "Please enter title",
                },
                slug : {
                    required: "Please enter slug",
                },
            },
        });

    }
}
