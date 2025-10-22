@extends('seller.layouts.master')
@section('content')
    <section class="pt-0">
        <div class="container-fluid p-0">
            <div class="custom-row">
                <div class="sidebar-col">
                    @include('seller.layouts.sidebar')
                </div>
                <div class="content-col">
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Notifications</h2>
                            </div>
                            <ul class="setting_items">
                                <li>
                                    <span>
                                        <h4>Marketing emails</h4>
                                        <p>Receive emails about new products and features</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio" checked>
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                                <li>
                                    <span>
                                        <h4>Security alerts</h4>
                                        <p>Got notified about important security updates</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio">
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                                <li>
                                    <span>
                                        <h4>Account activity</h4>
                                        <p>Notifications about your account activity</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio">
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                                <li>
                                    <span>
                                        <h4>Enable push notification</h4>
                                        <p>Receive push notifications on this device</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio">
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Two-Factor Authentication</h2>
                            </div>
                            <ul class="setting_items">
                                <li>
                                    <span>
                                        <h4>Enable 2FA</h4>
                                        <p>Secure your account with two-factor authentication</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio">
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Privacy Settings</h2>
                            </div>
                            <ul class="setting_items">
                                <li>
                                    <span>
                                        <h4>Profile visibility</h4>
                                        <p>Who can see your profile information</p>
                                    </span>
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <select class="form-select theme-form-select">
                                            <option value="city1">Public</option>
                                            <option value="city1">Private</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <span>
                                        <h4>Data sharing</h4>
                                        <p>Allow anonymous usage data to improve our service</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio">
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                                <li>
                                    <span>
                                        <h4>Analytics</h4>
                                        <p>Help us to improve by sharing usage analytics</p>
                                    </span>
                                    <div class="form-check form-switch switch-radio ms-auto">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="redio">
                                        <label class="form-check-label" for="redio"></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mobile_display">
                        <div class="card-body">
                            <div class="footer_action">
                                <a href="javascript:void(0);" class="btn btn-outline btn-default btn-md">Cancel</a>
                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Save Changes</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion change-password mb-3" id="accordionChangePassword">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="changePassword">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Change Password
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="changePassword" data-bs-parent="#accordionChangePassword">
                                <div class="accordion-body">
                                    <div class="title">
                                        <h2>Change Password</h2>
                                    </div>
                                    <div class="row g-3 mt-1 px-1 pb-2">
                                        <div class="col-lg-3">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="password" class="form-control" id="password">
                                                <label for="name">Old Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="password" class="form-control" id="password">
                                                <label for="name">New Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="password" class="form-control" id="password">
                                                <label for="name">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Save New Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="long_btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteConfrimModal" >Delete Account</a>
                    <div class="card mobile_display_none">
                        <div class="card-body">
                            <div class="footer_action">
                                <a href="javascript:void(0);" class="btn btn-outline btn-default btn-md">Cancel</a>
                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="modal delete-confrim-modal fade theme-modal" id="deleteConfrimModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header d-flex">
                <span class="data_group">
                    <h2>Delete Account</h2>
                </span>
                <button type="button" class="btn modal-close-btn" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="gap-3">
                    <div>
                        <p>This action cannot be undone. This will permanently delete your account and remove all associated data from our servers.</p>
                    </div>
                    <div class="p-3 mb-3 delete-info rounded bg-danger bg-opacity-10">
                        <strong>What will be deleted:</strong>
                        <ul class="mb-0">
                            <li>Your profile and personal information</li>
                            <li>All your content and uploads</li>
                            <li>Account settings and preferences</li>
                            <li>Connected accounts and integrations</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Type your password to confirm:</h3>
                    </div>
                    <div class="input-group form-floating theme-form-floating-2 search-box mt-3 input-custom-prefix">
                        <input type="password" class="form-control input-with-append" id="password">
                        <label for="name">Password</label>
                        <span class="input-group-text input-group-append show-password">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer footer_action">
                <div class="d-flex justify-content-between align-items-center gap-2 w-100">
                    <div>
                        <a href="javascript:void(0);" class="btn btn-outline btn-default btn-md" data-bs-dismiss="modal">
                            Cancel
                        </a>
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
