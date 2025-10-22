@extends('admin.layouts.master')
@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><?php echo (isset($banner_id) && $banner_id != ''? "Update" : "Create"); ?>  Banner Image</h4>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form  id="banner_form" class="form" action="{{ admin_url('banner-image/commit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="banner_id" class="banner_id" value="<?php echo (isset($banner_id) && $banner_id != ''? $banner_id : ''); ?>"/>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Placement <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Placement" name="place" value="{{ ( isset($banner->place) ? $banner->place : '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Banner Type <span class="text-red">*</span></label>
                                    <select class="form-control" name="type">
                                        <option value="">-Select type-</option>
                                        <option value="landscape" {{ isset($banner?->type) ? $banner?->type == "landscape" ? 'selected' : ''  : '' }}>Landscape</option>
                                        <option value="potrait" {{ isset($banner?->type) ? $banner?->type == "potrait" ? 'selected' : ''  : '' }}>Potrait</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Alt Text <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Alt Text" name="alt_text" value="{{ ( isset($banner->alt_text) ? $banner->alt_text : '') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Start Date<span class="text-red">*</span></label>
                                    <input type="date" class="form-control start-date" placeholder="start date" name="start_date" value="{{ ( isset($banner->start_date) ? $banner->start_date : '') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Date<span class="text-red">*</span></label>
                                    <input type="date" class="form-control end-date" placeholder="End date" name="end_date" value="{{ ( isset($banner->end_date) ? $banner->end_date : '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="dropify" name="image" data-default-file="{{ ( isset($banner->image) ? asset_url('storage/'.$banner?->image) : '') }}" data-height="180"  />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <button id="submit-profile" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Save
                    </button>
                    <a class="btn btn-danger mr-1" href="{{ admin_url('banner-image') }}">Cancel</a>
                </div>
                <form>
            </div>
        </div>
    </div>
@stop
