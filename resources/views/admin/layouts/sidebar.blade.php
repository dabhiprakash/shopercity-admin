<div class="sidebar_menu">
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/dashboard.svg') }}" class="" alt="">
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users') }}" class="{{ request()->is('admin/users') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/users.svg') }}" class="" alt="">
                <span>Users</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.review') }}" class="{{ request()->is('admin/review') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/review_listing.svg') }}" class="" alt="">
                <span>Review Listing</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.message') }}" class="{{ request()->is('admin/message') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/msg.svg') }}" class="" alt="">
                <span>Messages</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.content') }}" class="{{ request()->is('admin/content*') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/content.svg') }}" class="" alt="">
                <span>Content</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.catalog-data') }}" class="{{ request()->is('admin/catalog-data') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/catelog.svg') }}" class="" alt="">
                <span>Catalog Data</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.banner') }}" class="{{ request()->is('admin/banner') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/banner.svg') }}" class="" alt="">
                <span>Banner</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.report-analytics') }}" class="{{ request()->is('admin/report-analytics') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/report.svg') }}" class="" alt="">
                <span>Report & Analytics</span>
            </a>
        </li>
    </ul>
    <hr>
    <ul class="pt-0">
        <li>
            <a href="{{ route('admin.profile') }}" class="{{ request()->is('admin/profile') ? 'active' : '' }}">
                <img src="{{ asset_url('images/icons/settings.svg') }}" class="" alt="">
                <span>Settings</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.logout') }}" class="">
                <img src="{{ asset_url('images/icons/logout.svg') }}" class="" alt="">
                <span>Log Out</span>
            </a>
        </li>
    </ul>
</div>