$(document).ready(function () {
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    init_blog_validation();
    $('#blogListLoader').show();
    $('#blogDatatable').hide();
    const blogTable = $('#blogDatatable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        "order": [],
        "pageLength": 3,
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#blogListLoader').hide();
            $('#blogDatatable').fadeIn();
        },
        autoWidth: false,
        columns: [
            { width: "40%" },
            { width: "15%" },
            { width: "10%" },
            { width: "10%" },
            { width: "10%" },
            { width: "15%" },
        ],
    });
    $('#blogSearch').on('keyup', function () {
        blogTable.search(this.value).draw();
    });

    $('#resourcesLoader').show();
    $('#resourcesDatatable').hide();

    const resourcesTable = $('#resourcesDatatable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#resourcesLoader').hide();
            $('#resourcesDatatable').fadeIn();
        },
        autoWidth: false,
        columns: [
            { width: "40%" },
            { width: "15%" },
            { width: "10%" },
            { width: "10%" },
            { width: "10%" },
            { width: "15%" },
        ],
    });
    $('#resourcesSearch').on('keyup', function () {
        resourcesTable.search(this.value).draw();
    });

    $("#blog_form").on("submit", function(e) {
        e.preventDefault();
        if ($(this).valid()) {
            this.submit();
        }
    });
    $("#btnSave").on("click", function(e) {
        if ($("#blog_form").valid()) {
            $('#is_published').val('true');
            $('.blogSave').prop('disabled', true);
            $('#blogbuttonLoader').removeClass('d-none');
            $("#blog_form").submit();
        }
    });
    $("#btnSaveDraft").on("click", function(e) {
        if ($("#blog_form").valid()) {
            $('#btnSaveDraft').prop('disabled', true);
            $('#blogDraftLoader').removeClass('d-none');
            $('#is_published').val('false');
            $("#blog_form").submit();
        }
    });


    $(document).on('keyup', '.blog-title', function(e){
        e.preventDefault();
        var slug    = $(this).val();
        var str     = slug.toLowerCase();
        var ans     = str.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
        $('.blog-slug').val(ans);
    });

    $(document).on('click','.blog-delete',function(){
        var blog_id = $(this).attr('blog_id');
        var $this = $(this);
        swal({
          title: "Are you sure you want to delete this blog ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url         : admin_url+'content/blog/delete/'+blog_id,
                    type        : "get",
                    processData : false,
                    contentType : false,
                    cache       : false,
                    async       : false,
                    success     : function(data){
                        var response =  $.parseJSON(data);
                        if(response.status == true) {
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

function init_blog_validation() {
    if($('#blog_form').length > 0) {

        $('#blog_form').validate({
            errorElement: 'span',
            errorClass: 'validate-error',

            rules: {
                title : {
                    required: true,
                },
                slug : {
                    required: true,
                },
                meta_title : {
                    required: true,
                },
            },
            messages: {
                title : {
                    required: "Please enter name",
                },
                slug : {
                    required: "Please enter slug",
                },
                meta_title : {
                    required: "Please enter meta title",
                },
             },
        });
    }
}
