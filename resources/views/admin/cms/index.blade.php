@extends('admin.layouts.master')
@section('content')
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Cms Pages</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ admin_url('cms/setup') }}" class="btn btn-primary mr-3 setup-user">Create Cms Page</a>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered cms-data-table" border="1px solid" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cmsPages->isNotEmpty())
                                @foreach($cmsPages as $cmsPage)
                                    <tr>
                                        <td>{{ $cmsPage?->id }}</td>
                                        <td>{{ $cmsPage?->title }}</td>
                                        <td>
                                            <a href="#" class=" btn btn-primary text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="feather feather-more-vertical"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu" style="">
                                                <li class="setup-cms"><a href="{{ admin_url('cms/setup/'.encrypt_it($cmsPage?->id)) }}"><i class="feather feather-edit-2 mr-2 "></i>Edit</a></li>
                                                <li class="delete-cms" cms-id={{ encrypt_it($cmsPage?->id) }}><a href="javascript:void(0)"><i class="feather feather-trash-2 mr-2"></i>Delete</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!--End Row-->

@stop
