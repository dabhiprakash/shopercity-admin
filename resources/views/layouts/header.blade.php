<header class="">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <div class="d-flex align-items-center mobile_logo_gap">
                            <div class="navbar-toggler d-inline navbar-menu-button me-3" type="button"
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
                                                <a class="nav-link ps-0" href="{{ url("/about-us") }}">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-0" href="{{ url("/blog") }}">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-0" href="{{ url("/faq") }}">FAQ's</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-0" href="{{ url("/advertise") }}">Advertise</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-0" href="javascript:void(0)">Resources</a>
                                            </li>
                                            <hr/>
                                            <li class="nav-item">
                                                <a class="nav-link ps-0" href="{{ url("/login") }}">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-0" href="{{ url("/seller/new-listing") }}">List Equipment</a>
                                            </li>
                                        </ul>
                                        <div class="social-media-section orange">
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.71875 9.5H6.375V16.5H3.25V9.5H0.6875V6.625H3.25V4.40625C3.25 1.90625 4.75 0.5 7.03125 0.5C8.125 0.5 9.28125 0.71875 9.28125 0.71875V3.1875H8C6.75 3.1875 6.375 3.9375 6.375 4.75V6.625H9.15625L8.71875 9.5Z" fill="white"/>
                                            </svg>
                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3438 5.25C14.3438 5.40625 14.3438 5.53125 14.3438 5.6875C14.3438 10.0312 11.0625 15 5.03125 15C3.15625 15 1.4375 14.4688 0 13.5312C0.25 13.5625 0.5 13.5938 0.78125 13.5938C2.3125 13.5938 3.71875 13.0625 4.84375 12.1875C3.40625 12.1562 2.1875 11.2188 1.78125 9.90625C2 9.9375 2.1875 9.96875 2.40625 9.96875C2.6875 9.96875 3 9.90625 3.25 9.84375C1.75 9.53125 0.625 8.21875 0.625 6.625V6.59375C1.0625 6.84375 1.59375 6.96875 2.125 7C1.21875 6.40625 0.65625 5.40625 0.65625 4.28125C0.65625 3.65625 0.8125 3.09375 1.09375 2.625C2.71875 4.59375 5.15625 5.90625 7.875 6.0625C7.8125 5.8125 7.78125 5.5625 7.78125 5.3125C7.78125 3.5 9.25 2.03125 11.0625 2.03125C12 2.03125 12.8438 2.40625 13.4688 3.0625C14.1875 2.90625 14.9062 2.625 15.5312 2.25C15.2812 3.03125 14.7812 3.65625 14.0938 4.0625C14.75 4 15.4062 3.8125 15.9688 3.5625C15.5312 4.21875 14.9688 4.78125 14.3438 5.25Z" fill="white"/>
                                            </svg>
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.125 14.5H0.21875V5.15625H3.125V14.5ZM1.65625 3.90625C0.75 3.90625 0 3.125 0 2.1875C0 1.28125 0.75 0.53125 1.65625 0.53125C2.59375 0.53125 3.34375 1.28125 3.34375 2.1875C3.34375 3.125 2.59375 3.90625 1.65625 3.90625ZM13.9688 14.5H11.0938V9.96875C11.0938 8.875 11.0625 7.5 9.5625 7.5C8.0625 7.5 7.84375 8.65625 7.84375 9.875V14.5H4.9375V5.15625H7.71875V6.4375H7.75C8.15625 5.71875 9.09375 4.9375 10.5 4.9375C13.4375 4.9375 14 6.875 14 9.375V14.5H13.9688Z" fill="white"/>
                                            </svg>
                                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 4.90625C9.96875 4.90625 11.5938 6.53125 11.5938 8.5C11.5938 10.5 9.96875 12.0938 8 12.0938C6 12.0938 4.40625 10.5 4.40625 8.5C4.40625 6.53125 6 4.90625 8 4.90625ZM8 10.8438C9.28125 10.8438 10.3125 9.8125 10.3125 8.5C10.3125 7.21875 9.28125 6.1875 8 6.1875C6.6875 6.1875 5.65625 7.21875 5.65625 8.5C5.65625 9.8125 6.71875 10.8438 8 10.8438ZM12.5625 4.78125C12.5625 5.25 12.1875 5.625 11.7188 5.625C11.25 5.625 10.875 5.25 10.875 4.78125C10.875 4.3125 11.25 3.9375 11.7188 3.9375C12.1875 3.9375 12.5625 4.3125 12.5625 4.78125ZM14.9375 5.625C15 6.78125 15 10.25 14.9375 11.4062C14.875 12.5312 14.625 13.5 13.8125 14.3438C13 15.1562 12 15.4062 10.875 15.4688C9.71875 15.5312 6.25 15.5312 5.09375 15.4688C3.96875 15.4062 3 15.1562 2.15625 14.3438C1.34375 13.5 1.09375 12.5312 1.03125 11.4062C0.96875 10.25 0.96875 6.78125 1.03125 5.625C1.09375 4.5 1.34375 3.5 2.15625 2.6875C3 1.875 3.96875 1.625 5.09375 1.5625C6.25 1.5 9.71875 1.5 10.875 1.5625C12 1.625 13 1.875 13.8125 2.6875C14.625 3.5 14.875 4.5 14.9375 5.625ZM13.4375 12.625C13.8125 11.7188 13.7188 9.53125 13.7188 8.5C13.7188 7.5 13.8125 5.3125 13.4375 4.375C13.1875 3.78125 12.7188 3.28125 12.125 3.0625C11.1875 2.6875 9 2.78125 8 2.78125C6.96875 2.78125 4.78125 2.6875 3.875 3.0625C3.25 3.3125 2.78125 3.78125 2.53125 4.375C2.15625 5.3125 2.25 7.5 2.25 8.5C2.25 9.53125 2.15625 11.7188 2.53125 12.625C2.78125 13.25 3.25 13.7188 3.875 13.9688C4.78125 14.3438 6.96875 14.25 8 14.25C9 14.25 11.1875 14.3438 12.125 13.9688C12.7188 13.7188 13.2188 13.25 13.4375 12.625Z" fill="white"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url("/") }}" class="web-logo nav-logo">
                                <img src="{{ asset_url('images/logo_header.png') }}" class="img-fluid blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="header-nav-middle">
                            <a href="javascript:void(0);" class="header_banner">Advertise Here</a>
                        </div>
                        <div class="rightside-box">
                            <ul class="right-side-menu">
                                <li class="right-side"></li>
                                <li class="right-side">
                                    <a href="{{ url("/login") }}" class="btn bg-dark btn-md text-white fw-bold ms-auto">Login</a>
                                </li>
                                <li class="right-side">
                                    <a href="{{ url("/seller/new-listing") }}" class="btn theme-bg-color btn-animation btn-md fw-bold ms-auto">List Equipment</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-nav-middle mobile_display">
    <a href="javascript:void(0);" class="header_banner">Advertise Here</a>
</div>
