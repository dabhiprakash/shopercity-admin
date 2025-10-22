@extends('admin.layouts.master')
@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><?php echo (isset($resources_id) && $resources_id != ''? "Update" : "Create"); ?>  Resources</h4>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form  id="resources_form" class="form" action="{{ admin_url('resources/commit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="resources_id" class="resources_id" value="<?php echo (isset($resources_id) && $resources_id != ''? $resources_id : ''); ?>"/>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title <span class="text-red">*</span></label>
                                    <input type="text" class="form-control resources-title" placeholder="Title" name="title"  value="{{ ( isset($resources->title) ? $resources->title : '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">PDF</label>
                                    <input type="file" class="dropify" name="pdf" data-default-file="{{ ( isset($resources->pdf) ? asset_url('storage/'.$resources?->pdf) : '') }}" data-height="180"  />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Description <span class="text-red">*</span></label>
                                    <textarea class="form-control tinymce" rows="15" name="description" id="description" >{{ ( isset($resources->description) ? $resources->description : '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <button id="submit-profile" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Save
                    </button>
                    <a class="btn btn-danger mr-1" href="{{ admin_url('resources') }}">Cancel</a>
                </div>
                <form>
            </div>
        </div>
    </div>
@stop
