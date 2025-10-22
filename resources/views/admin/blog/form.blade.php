@extends('admin.layouts.master')
@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><?php echo (isset($blog_id) && $blog_id != ''? "Update" : "Create"); ?>  Blog</h4>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form  id="blog_form" class="form" action="{{ admin_url('blogs/commit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="blog_id" class="blog_id" value="<?php echo (isset($blog_id) && $blog_id != ''? $blog_id : ''); ?>"/>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-title" placeholder="Title" name="title"  value="{{ ( isset($blog->title) ? $blog->title : '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Slug <span class="text-red">*</span></label>
                                    <input type="text" class="form-control blog-slug" placeholder="Slug" name="slug" value="{{ ( isset($blog->slug) ? $blog->slug : '') }}"  readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" class="form-control meta-title" name="meta_title" value="{{ ( isset($blog->meta_title) ? $blog->meta_title : '') }}" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" placeholder="Meta Description"> {{ ( isset($blog->meta_description) ? $blog->meta_description : '') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="dropify" name="image" data-default-file="{{ ( isset($blog->image) ? asset_url('storage/'.$blog?->image) : '') }}" data-height="180"  />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Description <span class="text-red">*</span></label>
                                    <textarea class="form-control tinymce" rows="15" name="description" id="description" >{{ ( isset($blog->description) ? $blog->description : '') }}</textarea>
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
