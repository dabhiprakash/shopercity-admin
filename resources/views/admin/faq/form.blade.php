@extends('admin.layouts.master')
@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title"><?php echo (isset($faq_id) && $faq_id != ''? "Update" : "Create"); ?>  Faq</h4>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form  id="faq_form" class="form" action="{{ admin_url('faq/commit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="faq_id" class="faq_id" value="<?php echo (isset($faq_id) && $faq_id != ''? $faq_id : ''); ?>"/>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Question <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Question" name="question"  value="{{ ( isset($faq->question) ? $faq->question : '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Answer <span class="text-red">*</span></label>
                                    <textarea class="form-control tinymce" rows="5" placeholder="Answer" name="answer" id="answer" >{{ ( isset($faq->answer) ? $faq->answer : '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <button id="submit-profile" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Save
                    </button>
                    <a class="btn btn-danger mr-1" href="{{ admin_url('faq') }}">Cancel</a>
                </div>
                <form>
            </div>
        </div>
    </div>
@stop
