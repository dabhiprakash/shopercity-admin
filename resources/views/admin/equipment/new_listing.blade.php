@extends('admin.layouts.master')
@section('content')
    <section class="pt-0">
        <div class="container-fluid p-0">
            <div class="custom-row">
                <div class="sidebar-col">
                    @include('admin.layouts.sidebar')
                </div>
                <div class="content-col">
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Create New Listing </h2>
                            </div>
                            <div class="row g-4 mt-2">
                                <div class="col-lg-3">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <select class="form-select theme-form-select">
                                            <option value="city1">CA</option>
                                            <option value="city1">VAN</option>
                                        </select>
                                        <label for="name">Category <span>*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <select class="form-select theme-form-select">
                                            <option value="city1">CA</option>
                                            <option value="city1">VAN</option>
                                        </select>
                                        <label for="name">Subcategory</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <select class="form-select theme-form-select">
                                            <option value="city1">CA</option>
                                            <option value="city1">VAN</option>
                                        </select>
                                        <label for="name">Manufacturer</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <select class="form-select theme-form-select">
                                            <option value="city1">CA</option>
                                            <option value="city1">VAN</option>
                                        </select>
                                        <label for="name">Model Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Basic Information</h2>
                            </div>
                            <div class="row g-4 mt-2">
                                <div class="col-lg-6">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name" placeholder="Enter a descriptive title for your listing">
                                        <label for="name">Title of Listings</label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <select class="form-select theme-form-select">
                                            <option value="city1">Select Condition</option>
                                            <option value="city1">Private</option>
                                        </select>
                                        <label for="name">Condition</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control" id="name" >
                                            <label for="name">Price</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control" id="name" >
                                            <label for="name">ZIP</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-5">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <textarea rows="8" class="form-control"></textarea>
                                            <label for="name">Description</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Item Details</h2>
                            </div>
                            <div class="row g-4 mt-2">
                                <div class="col-lg-4">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name">
                                        <label for="name">Weight (optional)</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name">
                                        <label for="name">Size (optional)</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name">
                                        <label for="name">Year Built (optional)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 mt-2">
                                <div class="col-lg-10">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name">
                                        <label for="name">Tags (up to 5)</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <p class="remains_counts">0/5 tags used</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Photos & Videos</h2>
                            </div>
                            <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-5 row-cols-lg-5 row-cols-md-5 row-cols-2">
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                                <div>
                                    <div class="upload_box">
                                        <div class="upload_content text-center">
                                            <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                            <h5>Upload</h5>
                                        </div>
                                        <input class="file-uploader" type="file" onchange="upload()" accept="image/*"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="remains_counts">0/10 images uploaded</p>
                                </div>
                            </div>
                            <div class="row g-4 mt-2">
                                <div class="col-lg-12">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name">
                                        <label for="name">Video 1 URLs (optional)</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name">
                                        <label for="name">Video 1 URLs (optional)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="footer_action">
                                <a href="javascript:void(0);" class="btn btn-outline btn-default btn-md">Cancel</a>
                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Create Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
