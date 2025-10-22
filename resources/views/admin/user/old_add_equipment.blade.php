@extends('admin.layouts.master')
@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><?php echo (isset($blog_id) && $blog_id != ''? "Update" : "Create"); ?>  equipment</h4>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form  id="equipment_form" class="form" action="{{ admin_url('users/equipment/commit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" class="user_id" value="<?php echo (isset($user_id) && $user_id != ''? $user_id : ''); ?>"/>
                    <input type="hidden" name="equipment_id" class="equipment_id" value="<?php echo (isset($equipment_id) && $equipment_id != ''? $equipment_id : ''); ?>"/>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Category <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Category" name="category"  value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Subcategory <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Subcategory" name="subcategory"  value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Manufacturer <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Manufacturer" name="manufacturer"  value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Model Number <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Model Number" name="model_number"  value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-2 pb-4">
                                <h3>Basic Information</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="form-label">Title of Listings <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="title" name="title"  value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Condition <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Condition" name="condition"  value="">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="form-label">Price <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Price" name="price"  value="">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="form-label">Zip <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Zip" name="zip"  value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Description <span class="text-red">*</span></label>
                                    <textarea rows="5" class="form-control blog-title" placeholder="Description" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-2 pb-4">
                                <h3>Item Details</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Weight <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Weight" name="weight1"  value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Weight <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Weight" name="weight2"  value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Year Build <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Weight" name="year_build"  value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Tags <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Tags" name="tags[]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-2 pb-4">
                                <h3>Photos & Videos</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Upload 1 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[1]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 2 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[2]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 3 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[3]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 4 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[4]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 5 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[5]" style="width: 180px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Upload 6 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[6]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 7 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[7]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 8 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[8]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 9 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[9]" style="width: 180px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-left:35px;">
                                <div class="form-group">
                                    <label class="form-label">Upload 10 <span class="text-red">*</span></label>
                                    <input type="file" class="form-control pb-7" name="upload[10]" style="width: 180px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Video 1<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Tags" name="video1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Video 2<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Tags" name="video2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <button id="submit-profile" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Save
                    </button>
                    <a class="btn btn-danger mr-1" href="{{ admin_url('blogs') }}">Cancel</a>
                </div>
                <form>
            </div>
        </div>
    </div>
@stop
