@extends('admin.layouts.master')
@section('content')
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Banner Image</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ admin_url('banner-image/setup') }}" class="btn btn-primary mr-3 setup-user">Create Banner Image</a>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
    <div class="row">
        @if($BannerImages->isNotEmpty())
            @foreach($BannerImages as $banner)
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="item7-card-img px-4 mt-4">
                            <img src="{{ asset_url('storage/'.$banner->image) }}" alt="img" class="cover-image br-7" style="height:200px; width:400px;">
                        </div>
                        <div class="card-body">
                            <div class="item7-card-desc d-flex mb-5">
                                <a href="#" class="d-flex"><span class="feather feather-calendar text-muted mr-2 fs-18"></span><div class="mt-0">{{ date('M d, Y', strtotime($banner?->created_at)) }}</div></a>
                                <div class="ml-auto">
                                    <div class="d-flex">
                                        <a href="{{ admin_url('banner-image/setup/'.encrypt_it($banner?->id)) }}" class="d-none d-md-inline-block ml-3"><span class="feather feather-edit"></span></a>
                                        <a href="javascript:void(0)" banner_id="{{  encrypt_it($banner?->id) }}" class="d-none d-md-inline-block ml-3 banner-delete"><span class="feather feather-trash"></span></a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="mt-4"><h5 class="font-weight-semibold">{{ $banner?->title }}</h5></a>
                            <p><?php echo substr($banner?->description, 0, 30);  ?> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Banner not found</h5>
                    </div>
                </div>
            </div>
        @endif


    </div>
    <div class="row">
         <div class="col-md-12">
            <div  class="d-flex justify-content-center mt-4">
                {{ $BannerImages->links() }}
            </div>
         </div>
    </div>
    <!--End Row-->

@stop
