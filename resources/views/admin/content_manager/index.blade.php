@extends('admin.layouts.master')
@section('content')
<section class="pt-0">
    <div class="container-fluid p-0">
        <div class="custom-row">
            <div class="sidebar-col">
                @include('admin.layouts.sidebar')
            </div>
            <div class="content-col">
                <div class="card no_card">
                    <div class="card-body">
                        <div class="action_header mb-2">
                            <div class="left_actions">
                                <div class="title d-flex">
                                    <h2>Content Management</h2>
                                </div>
                            </div>
                            <div class="right_actions">
                                <div class="btn_groups">
                                    <a href="{{ admin_url("content/blog/setup") }}" class="btn bg-dark text-white btn-md">+ New Blog Post</a>
                                </div>
                            </div>
                        </div>
                        <div class="box_title mt-2 table-search-content">
                            <div class="d-flex gap-2">
                                <img src="{{ asset_url('images/icons/content-primary.svg') }}" class="" alt="">
                                <h4>Blog Posts</h4>
                            </div>
                            <div class="custom-search-wrapper searchbox_group">
                                <input type="search" class="form-control" id="blogSearch" placeholder="Search...">
                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                            </div>
                        </div>
                        <div id="blogListLoader" class="datatable-loader text-center my-5">
                            <div class="spinner-border text-primary" role="status">
                            </div>
                        </div>
                        <table id="blogDatatable" class="display" style="display: none">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Published</th>
                                    <th>Updated</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($blogs->isNotEmpty())
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ ($blog->image != "" ? asset_url('storage/'.$blog->image) : asset_url('images/blog.jpg') ) }}" class="img-fluid" alt="" style="height:50px;width:50px;">
                                            <span>
                                                <h4>{{ $blog->title }}</h4>
                                                <p class="custome-truncate">{{ $blog?->meta_description }}</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        @if($blog?->is_published)
                                        <span class="status bg-published">Published</span>
                                        @else
                                        <span class="status bg-light">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            0
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            {{ date('d.m.Y',strtotime($blog->created_at)) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            {{ date('d.m.Y',strtotime($blog->updated_at)) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="{{ url('blog-detail/'.$blog?->slug) }}" class="btn btn-outline btn-md action-box-btn"><i class="fas fa-eye"></i></a>
                                            <a href="{{ admin_url('content/blog/setup/'.encrypt_it($blog?->id)) }}" class="btn btn-outline btn-md action-box-btn"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" blog_id="{{  encrypt_it($blog?->id) }}" class="btn btn-danger-outline btn-md action-box-btn blog-delete"><i class="fas fa-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                        <div class="action_header mt-5 mb-3">
                            <div class="left_actions">
                                <div class="box_title d-flex mt-2">
                                    <img src="{{ asset_url('images/icons/content-primary.svg') }}" class="" alt="">
                                    <h4>Resources</h4>
                                </div>
                            </div>
                            <div class="custom-search-wrapper searchbox_group w-30">
                                <input type="search" class="form-control" id="resourcesSearch" placeholder="Search...">
                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                            </div>
                            <div class="right_actions">
                                <div class="btn_groups">
                                    <a href="javascript:void(0);" class="btn bg-dark text-white btn-md">+ New Resource</a>
                                </div>
                            </div>
                        </div>
                        <div id="resourcesLoader" class="datatable-loader text-center my-5">
                            <div class="spinner-border text-primary" role="status">
                            </div>
                        </div>
                        <table id="resourcesDatatable" class="display" style="display: none">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Full Size</th>
                                    <th>Downloads</th>
                                    <th>Uploaded</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>Restaurant Equipment Maintenance Checklist</h5>
                                                <p>Comprehensive checklist for maintaining your restaurant equipment to extend its lifespan...</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-light-outline">Maintance</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>2.4 MB</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>456</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>28.08.2025</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md flex gap-2">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>Commercial Kitchen Layout Planning Guide</h5>
                                                <p>Professional guide to designing efficient commercial kitchen layouts that maximize....</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-light-outline">Planning</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>5.2 MB</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>789</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>10.06.2025</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md flex gap-2">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>Equipment Financing Options</h5>
                                                <p>Overview of financing options available for restaurant equipment purchases, including.....</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-light-outline">Financing</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>1.8 MB</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>234</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <h5>01.06.2025</h5>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md flex gap-2">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script></script>
@stop
