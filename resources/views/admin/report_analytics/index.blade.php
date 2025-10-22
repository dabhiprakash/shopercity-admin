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
                        <div class="title d-flex">
                            <h2>Reports & Analytics</h2>
                        </div>
                        <div class="row g-3 mb-5 half_size">
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Total Revenue</h5>
                                        <h3>$456.2K</h3>
                                        <p class="text-success">
                                            <img src="{{ asset_url('images/icons/line-chart.svg') }}" alt="">
                                            +12.3% from last period
                                        </p>
                                    </div>
                                    <img src="{{ asset_url('images/icons/dollar-sign.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Active Users</h5>
                                        <h3>$456.2K</h3>
                                        <p class="text-success">
                                            <img src="{{ asset_url('images/icons/line-chart.svg') }}" alt="">
                                            +8.7% from last period
                                        </p>
                                    </div>
                                    <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 18.75V17.25C15 16.4544 14.6839 15.6913 14.1213 15.1287C13.5587 14.5661 12.7956 14.25 12 14.25H7.5C6.70435 14.25 5.94129 14.5661 5.37868 15.1287C4.81607 15.6913 4.5 16.4544 4.5 17.25V18.75" stroke="#155DFC" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 5.34619C15.6433 5.51297 16.213 5.88864 16.6198 6.41424C17.0265 6.93984 17.2471 7.58561 17.2471 8.25019C17.2471 8.91477 17.0265 9.56055 16.6198 10.0861C16.213 10.6117 15.6433 10.9874 15 11.1542" stroke="#155DFC" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19.5 18.7502V17.2502C19.4995 16.5855 19.2783 15.9397 18.871 15.4144C18.4638 14.889 17.8936 14.5138 17.25 14.3477" stroke="#155DFC" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.75 11.25C11.4069 11.25 12.75 9.90685 12.75 8.25C12.75 6.59315 11.4069 5.25 9.75 5.25C8.09315 5.25 6.75 6.59315 6.75 8.25C6.75 9.90685 8.09315 11.25 9.75 11.25Z" stroke="#155DFC" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Listings Sold</h5>
                                        <h3>342</h3>
                                        <p class="text-success">
                                            <img src="{{ asset_url('images/icons/line-chart.svg') }}" alt="">
                                            +15.2% from last period
                                        </p>
                                    </div>
                                    <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.8333 25.3519C13.188 25.5567 13.5904 25.6645 14 25.6645C14.4096 25.6645 14.812 25.5567 15.1667 25.3519L23.3333 20.6852C23.6877 20.4806 23.982 20.1864 24.1868 19.8322C24.3916 19.4779 24.4996 19.0761 24.5 18.6669V9.33354C24.4996 8.92436 24.3916 8.52249 24.1868 8.16823C23.982 7.81398 23.6877 7.5198 23.3333 7.31521L15.1667 2.64854C14.812 2.44375 14.4096 2.33594 14 2.33594C13.5904 2.33594 13.188 2.44375 12.8333 2.64854L4.66667 7.31521C4.31231 7.5198 4.01798 7.81398 3.81321 8.16823C3.60843 8.52249 3.50042 8.92436 3.5 9.33354V18.6669C3.50042 19.0761 3.60843 19.4779 3.81321 19.8322C4.01798 20.1864 4.31231 20.4806 4.66667 20.6852L12.8333 25.3519Z" stroke="#F46200" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 25.6667V14" stroke="#F46200" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.83984 8.1665L14.0015 13.9998L24.1632 8.1665" stroke="#F46200" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.75 4.98145L19.25 10.9898" stroke="#F46200" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Messages Sent</h5>
                                        <h3>8,934</h3>
                                        <p class="text-success">
                                            <img src="{{ asset_url('images/icons/line-chart.svg') }}" alt="">
                                            +5.9% from last period
                                        </p>
                                    </div>
                                    <img src="{{ asset_url('images/icons/message.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex action_header mb-3">
                            <div class="left_actions">
                                <div class="title d-flex">
                                    <h2>Analytics Dashboard</h2>
                                </div>
                            </div>
                            <div class="right_actions">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="Overview">
                                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                            data-bs-target="#overview" type="button" role="tab">Overview</button>
                                    </li>
                                    <li class="nav-item" role="Categories">
                                        <button class="nav-link" id="users-tab" data-bs-toggle="tab" data-bs-target="#users"
                                            type="button" role="tab">Users</button>
                                    </li>
                                    <li class="nav-item" role="Listings">
                                        <button class="nav-link" id="listings-tab" data-bs-toggle="tab" data-bs-target="#listings"
                                            type="button" role="tab">Listings</button>
                                    </li>
                                    <li class="nav-item" role="Revenue">
                                        <button class="nav-link" id="revenue-tab" data-bs-toggle="tab" data-bs-target="#revenue"
                                            type="button" role="tab">Revenue</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row g-3 mb-3 half_size">
                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card analytics-graph">
                                    <div class="card-body">
                                        <div class="box_title d-flex mt-2">
                                            <img src="{{ asset_url('images/icons/user-graph.svg') }}" class="" alt="">
                                            <span class="graph-title">User Growth Trends</span>
                                        </div>
                                        <canvas id="lineChart" class="line-chart" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card analytics-graph">
                                    <div class="card-body">
                                        <div class="box_title d-flex mt-2">
                                            <img src="{{ asset_url('images/icons/listing-graph.svg') }}" class="" alt="">
                                            <span class="graph-title">Listing Categories</span>
                                        </div>
                                        <canvas id="doughnutChart" class="doughnut-chart" width="400" height="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card analytics-graph">
                                    <div class="card-body">
                                        <div class="box_title d-flex mt-2">
                                            <img src="{{ asset_url('images/icons/platform-graph.svg') }}" class="" alt="">
                                            <span class="graph-title">Platform Activity (24h)</span>
                                        </div>
                                        <canvas id="activityChart" class="activity-chart" width="900" height="500"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="box_title d-flex">
                                    <img src="{{ asset_url('images/icons/trophy.svg') }}" class="" alt="">
                                    <h4>Top Performing Sellers</h4>
                                </div>
                                <ul class="listings_items seller-performance gap-4">
                                    <li class="px-4 py-2">
                                        <span class="data_group">
                                            <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="22" fill="#F46200" />
                                                <text x="50%" y="50%"
                                                    text-anchor="middle"
                                                    dominant-baseline="central"
                                                    fill="white"
                                                    font-size="18"
                                                    font-family="Arial, sans-serif">
                                                    1
                                                </text>
                                            </svg>
                                            <span>
                                                <h4>Mario's Kitchen Supply</h4>
                                                <p>45 listings</p>
                                            </span>
                                        </span>
                                        <div class="item_revenue data_group d-block">
                                            <h3 class="text-success">$1 25 000</h3>
                                            <p class="text-end">Revenue</p>
                                        </div>
                                    </li>
                                    <li class="px-4 py-2">
                                        <span class="data_group">
                                            <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="22" fill="#F46200" />
                                                <text x="50%" y="50%"
                                                    text-anchor="middle"
                                                    dominant-baseline="central"
                                                    fill="white"
                                                    font-size="18"
                                                    font-family="Arial, sans-serif">
                                                    2
                                                </text>
                                            </svg>
                                            <span>
                                                <h4>Mario's Kitchen Supply</h4>
                                                <p>45 listings</p>
                                            </span>
                                        </span>
                                        <div class="item_revenue data_group d-block">
                                            <h3 class="text-success ">$95 000</h3>
                                            <p class="text-end">Revenue</p>
                                        </div>
                                    </li>
                                    <li class="px-4 py-2">
                                        <span class="data_group">
                                            <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="22" fill="#F46200" />
                                                <text x="50%" y="50%"
                                                    text-anchor="middle"
                                                    dominant-baseline="central"
                                                    fill="white"
                                                    font-size="18"
                                                    font-family="Arial, sans-serif">
                                                    3
                                                </text>
                                            </svg>
                                            <span>
                                                <h4>Mario's Kitchen Supply</h4>
                                                <p>45 listings</p>
                                            </span>
                                        </span>
                                        <div class="item_revenue data_group d-block">
                                            <h3 class="text-success ">$95 000</h3>
                                            <p class="text-end">Revenue</p>
                                        </div>
                                    </li>
                                    <li class="px-4 py-2">
                                        <span class="data_group">
                                            <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="22" fill="#F46200" />
                                                <text x="50%" y="50%"
                                                    text-anchor="middle"
                                                    dominant-baseline="central"
                                                    fill="white"
                                                    font-size="18"
                                                    font-family="Arial, sans-serif">
                                                    4
                                                </text>
                                            </svg>
                                            <span>
                                                <h4>Mario's Kitchen Supply</h4>
                                                <p>45 listings</p>
                                            </span>
                                        </span>
                                        <div class="item_revenue data_group d-block">
                                            <h3 class="text-success ">$95 000</h3>
                                            <p class="text-end">Revenue</p>
                                        </div>
                                    </li>
                                    <li class="px-4 py-2">
                                        <span class="data_group">
                                            <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="44" height="44" rx="22" fill="#F46200" />
                                                <text x="50%" y="50%"
                                                    text-anchor="middle"
                                                    dominant-baseline="central"
                                                    fill="white"
                                                    font-size="18"
                                                    font-family="Arial, sans-serif">
                                                    5
                                                </text>
                                            </svg>
                                            <span>
                                                <h4>Mario's Kitchen Supply</h4>
                                                <p>45 listings</p>
                                            </span>
                                        </span>
                                        <div class="item_revenue data_group d-block">
                                            <h3 class="text-success ">$95 000</h3>
                                            <p class="text-end">Revenue</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script></script>
@stop