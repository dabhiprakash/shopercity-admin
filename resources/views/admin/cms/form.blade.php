@extends('admin.layouts.master')
@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><?php echo (isset($cms_id) && $cms_id != ''? "Update" : "Create"); ?>  Cms page</h4>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form  id="cms_form" class="form" action="{{ admin_url('cms/commit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="cms_id" class="cms_id" value="<?php echo (isset($cms_id) && $cms_id != ''? $cms_id : ''); ?>"/>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title <span class="text-red">*</span></label>
                                    <input type="text" class="form-control cms-title" placeholder="Title" name="title"  value="{{ ( isset($cms->title) ? $cms->title : '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Slug <span class="text-red">*</span></label>
                                    <input type="text" class="form-control cms-slug" placeholder="Slug" name="slug" value="{{ ( isset($cms->slug) ? $cms->slug : '') }}"  readonly="readonly">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Content <span class="text-red">*</span></label>
                                    <textarea class="form-control tinymce" rows="15" name="content" id="content" >{{ ( isset($cms->content) ? $cms->content : '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <button id="submit-profile" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Save
                    </button>
                    <a class="btn btn-danger mr-1" href="{{ admin_url('cms') }}">Cancel</a>
                </div>
                <form>
            </div>
        </div>
    </div>
@stop
