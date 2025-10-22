@extends('admin.layouts.master')
@section('content')
    <section class="pt-0">
        <div class="container-fluid p-0">
            <div class="custom-row">
                <div class="sidebar-col">
                    @include('admin.layouts.sidebar')
                </div>
                <div class="content-col">
                    <form  id="blog_form" class="form" action="{{ admin_url('content/blog/commit') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="blog_id" class="blog_id" value="<?php echo (isset($blog_id) && $blog_id != ''? $blog_id : ''); ?>"/>
                         <input type="hidden" id="is_published" name="is_published" class="is_published" value="true"/>
                        <div class="card">
                            <div class="card-body">
                                <div class="title d-flex">
                                    <h2><?php echo (isset($blog_id) && $blog_id != ''? "Update" : "Create"); ?>  Blog</h2>
                                </div>
                                <div class="row g-4 mt-2">
                                    <div class="col-lg-12">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control blog-title" name="title"  id="title" placeholder="Title" value="{{ ( isset($blog->title) ? $blog->title : '') }}">
                                            <label for="name">Title</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control blog-slug" placeholder="Slug" name="slug" value="{{ ( isset($blog->slug) ? $blog->slug : '') }}"  readonly="readonly">
                                            <label for="name">Slug</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control" name="meta_title" id="meta_title"  value="{{ ( isset($blog->meta_title) ? $blog->meta_title : '') }}" placeholder="Enter a descriptive title for your blog">
                                            <label for="name">Meta Title</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <textarea rows="8" class="form-control" name="meta_description" placeholder="Meta Description">{{ ( isset($blog->meta_description) ? $blog->meta_description : '') }}</textarea>
                                                <label for="name">Meta Description</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-5 row-cols-lg-5 row-cols-md-5 row-cols-2">
                                        @php
                                            $blog_image = ( isset($blog->image) ? asset_url('storage/'.$blog?->image) : '');
                                        @endphp

                                        <div>
                                            <div class="title d-flex">
                                               <label class="form-label">Image <span class="text-red">*</span></label>
                                            </div>
                                            @if ($blog_image != "")
                                                <div>
                                                    <image src="{{ $blog_image }}" style="width: 150px; height:150px;">
                                                </div>
                                            @endif
                                            <div class="upload_box mt-4">
                                                <div class="upload_content text-center">
                                                    <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                                    <h5>Upload</h5>
                                                </div>
                                                <input class="file-uploader" type="file" name="image" onchange="upload()" accept="image/*"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control tinymce" rows="15" name="description" id="description" >{{ ( isset($blog->description) ? $blog->description : '') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="footer_action">
                                    <a href="{{ admin_url('content') }}" class="btn btn-outline btn-default btn-md">Cancel</a>
                                    <div class="d-flex gap-2">
                                        <button type="button" id="btnSaveDraft" class="btn btn-outline btn-default btn-md">
                                            Save as Draft
                                            <div id="blogDraftLoader"  class="datatable-loader text-center d-none">
                                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </button>
                                        <button type="button" id="btnSave" class="blogSave btn theme-bg-color btn-animation btn-md">
                                            <?php echo (isset($blog_id) && $blog_id != ''? "Update" : "Create"); ?>
                                            Blog
                                            <div id="blogbuttonLoader" class="datatable-loader text-center d-none">
                                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.tiny.cloud/1/ymji23u31nr2k883kdahnga2balmqck9mcci9b37ty0fl5y3/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea.tinymce',
                plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'code','link', 'lists', 'media', 'searchreplace', 'fullscreen', 'table', 'visualblocks', 'wordcount',
                // Your account includes a free trial of TinyMCE premium features
                // Try the most popular premium features until May 27, 2025:
                //   'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media fullscreen table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                relative_urls: false,
                remove_script_host: false,
                document_base_url: admin_url+'/',
                image_advtab: true,
                image_title: true,
                automatic_uploads: true,
                file_picker_types: 'image',
                images_upload_url: admin_url+'editor-image',
                images_upload_handler: example_image_upload_handler = (blobInfo, progress)=> new Promise((resolve, reject) => {
                    var formData = new FormData();
                        formData.append('editorfile', blobInfo.blob(), blobInfo.filename());
                        $.ajax({
                            type :"post",
                            url  : admin_url+'editor-image',
                            data: formData,
                            cache:false,
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                var response = $.parseJSON(data);
                                if(response.status) {
                                    resolve(response.file_path, )
                                    // return true;
                                    // cb(response.file_path, { title: file.name });
                                } else {
                                    reject('Something wrong');
                                    return;
                                }
                            }
                        });

                }),
                tinycomments_author: 'Author name',
                mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
                ],

                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
            });

        </script>


    <script>
        function upload(fileUploadInput) {

            // const fileUploadInput = document.querySelector('.file-uploader');

            /// Validations ///

            if (!fileUploadInput.value) {
                return;
            }

            // using index [0] to take the first file from the array
            const image = fileUploadInput.files[0];

            // check if the file selected is not an image file
            if (!image.type.includes('image')) {
                return alert('Only images are allowed!');
            }

            // check if size (in bytes) exceeds 10 MB
            if (image.size > 10_000_000) {
                return alert('Maximum upload size is 10MB!');
            }

            /// Display the image on the screen ///

            const fileReader = new FileReader();
            fileReader.readAsDataURL(image);

            fileReader.onload = (fileReaderEvent) => {
                const profilePicture = fileUploadInput.closest('.upload_box');
                profilePicture.style.backgroundImage = `url(${fileReaderEvent.target.result})`;
                profilePicture.style.backgroundSize = `contain`;
                profilePicture.style.backgroundPosition = `center`;
                profilePicture.style.backgroundRepeat = `no-repeat`;
                profilePicture.style.backgroundColor = `#f9f9f9`;
                profilePicture.style.opacity = `0.75`;

                profilePicture.child('upload_content').style.opacity = `1`;

            }
        }

        document.querySelectorAll('.file-uploader').forEach(input => {
            input.addEventListener('change', () => upload(input));
        });

    </script>

@stop
