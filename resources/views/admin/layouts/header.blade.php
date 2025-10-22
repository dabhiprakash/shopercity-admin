<header class="">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <div class="d-flex align-items-center mobile_logo_gap admin_sidebar">
                            <div class="navbar-toggler d-inline navbar-menu-button me-2 mobile_sidebar_display" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <img src="{{ asset_url('images/icons/aside-icon.svg') }}" class="img-fluid" alt="">
                                </span>
                            </div>
                            <div class="main-nav navbar navbar-light navbar-sticky p-0">
                                <div class="offcanvas offcanvas-collapse" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5></h5>
                                        <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/dashboard.svg') }}" class="" alt="">
                                                    <span>Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.users') }}" class="{{ request()->is('admin/users') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/users.svg') }}" class="" alt="">
                                                    <span>Users</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.review') }}" class="{{ request()->is('admin/review') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/review_listing.svg') }}" class="" alt="">
                                                    <span>Review Listing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.message') }}" class="{{ request()->is('admin/message') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/msg.svg') }}" class="" alt="">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.content') }}" class="{{ request()->is('admin/content*') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/content.svg') }}" class="" alt="">
                                                    <span>Content</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.catalog-data') }}" class="{{ request()->is('admin/catalog-data') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/catelog.svg') }}" class="" alt="">
                                                    <span>Catalog Data</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.banner') }}" class="{{ request()->is('admin/banner') ? 'active' : '' }} nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/banner.svg') }}" class="" alt="">
                                                    <span>Banner</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.report-analytics') }}" class="{{ request()->is('admin/report-analytics') ? 'active' : '' }} nav-link ps-0" class="">
                                                    <img src="{{ asset_url('images/icons/report.svg') }}" class="" alt="">
                                                    <span>Report & Analytics</span>
                                                </a>
                                            </li>
                                            <hr />
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/settings.svg') }}" class="" alt="">
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('admin.logout') }}" class="nav-link ps-0">
                                                    <img src="{{ asset_url('images/icons/logout.svg') }}" class="" alt="">
                                                    <span>Log Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url("/admin") }}" class="web-logo nav-logo">
                                <img src="{{ asset_url('images/logo_header.png') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="rightside-box">
                            @if(Auth::guard('admin')->check())
                            @else
                            <ul class="right-side-menu">
                                <li class="right-side"></li>
                                <li class="right-side">
                                    <a href="{{ url("/login") }}" class="btn bg-dark btn-md text-white fw-bold ms-auto">Sign in</a>
                                </li>
                                <li class="right-side">
                                    <a href="{{ url("/seller/new-listing") }}" class="btn theme-bg-color btn-animation btn-md fw-bold ms-auto">List Equipment</a>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>