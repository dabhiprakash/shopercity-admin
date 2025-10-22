<div class="modal-header">
    <h4 class="modal-title">{{ (isset($user_id) && $user_id != ''? 'Update' : 'Create' )  }}  User</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="post" id="user-form"  autocomplete="off">
                @csrf
                <input type="hidden" name="user_id" class="user_id" value="{{ (isset($user_id) && $user_id != '') ? $user_id : ''}}"/>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ isset($user->name) ? $user->name : '' }}" placeholder="Name">
                            </div>
                        </div>
						 <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Business Name</label>
                                <input type="text" class="form-control" name="business_name" value="{{ isset($user->business_name) ? $user->business_name : '' }}" placeholder="Business Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ isset($user->phone) ? $user->phone : '' }}" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ isset($user->email) ? $user->email : '' }}" placeholder="Email"  autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" value="" placeholder="Password" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ isset($user->address) ? $user->address : '' }}" placeholder="Address">
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label class="form-label">{{ lang_translate('Allow login') }}</label>&nbsp;
                                <label class="custom-switch">
                                    <input type="checkbox" name="allow_login" class="custom-switch-input" {{ (isset($user->allow_login) && $user->allow_login == 1) ?'checked' : '' }}>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{ lang_translate('Active') }} / {{ lang_translate('Inactive') }}</span>
                                </label>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="text-center mt-10">
                    <button type="submit" id="submit-user" class="btn btn-primary">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>{{ (isset($user_id) && $user_id != ''? 'Update' : 'Save')  }}
                    </button>
                    <a href="javascript:void(0)" title="Cancel" class="btn btn-danger mr-1" data-dismiss="modal">
                        <i class="ft-x"></i> Close
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
