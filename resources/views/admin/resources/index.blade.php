@extends('admin.layouts.master')
@section('content')
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Resources</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ admin_url('resources/setup') }}" class="btn btn-primary mr-3 setup-user">Create New Resources</a>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
    <div class="row">
        @if($Resources->isNotEmpty())
            @foreach($Resources as $resource)
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <a href="javascript:void(0)" class="mt-4"><h5 class="font-weight-bold">{{ $resource?->title }}</h5></a>
                        </div>
                        <div class="item7-card-img px-4 mt-4 text-center">
                            <a href="{{ asset_url('storage/'.$resource->pdf) }}" target="_blank"><img src="{{ asset_url('images/pdf.png') }}" alt="img" class="cover-image br-7" style="height:100px; width:100px;"></a>
                        </div>
                        <div class="card-body">
                            <div class="item7-card-desc d-flex mb-5">
                                <a href="javascript:void(0)" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">{{ date('M d, Y', strtotime($resource?->created_at)) }}</div></a>
                                <div class="ml-auto">
                                    <div class="d-flex">
                                        <a href="{{ admin_url('resources/setup/'.encrypt_it($resource?->id)) }}" class="d-none d-md-inline-block ml-3"><span class="feather feather-edit"></span></a>
                                        <a href="javascript:void(0)" resources_id="{{  encrypt_it($resource?->id) }}" class="d-none d-md-inline-block ml-3 resources-delete"><span class="feather feather-trash"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Resources not found</h5>
                    </div>
                </div>
            </div>
        @endif


    </div>
    <div class="row">
         <div class="col-md-12">
            <div  class="d-flex justify-content-center mt-4">
                {{ $Resources->links() }}
            </div>
         </div>
    </div>
    <!--End Row-->

@stop
