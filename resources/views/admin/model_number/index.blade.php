@extends('admin.layouts.master')
@section('content')
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Model Number</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="javascript:void(0)" class="btn btn-info mr-3 bulk-model-number">Bulk Upload</a>
                <a href="javascript:void(0)" class="btn btn-primary mr-3 setup-model-number">Create Model Number</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered model-number-data-table" border="1px solid" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Manufacturer</th>
                            <th>Model Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Manufacturer</th>
                                <th>Model Number</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
