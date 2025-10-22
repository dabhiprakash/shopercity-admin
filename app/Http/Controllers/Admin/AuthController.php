<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use App\Models\Admin;
use App\Models\LoginAttempt;
use Validator;
use Auth;

class AuthController extends MasterController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function front_page()
    {
        if (Auth::guard('admin')->check()) {
            return redirect(route('admin.dashboard'));
        } else {
            return view('admin.auth.front_page');
        }
    }


    public function index()
    {

        if (Auth::guard('admin')->check()) {
            return redirect(route('admin.dashboard'));
        } else {
            $data['js_files'] = array(
                'js/admin/auth.js',
            );
            return view('admin.auth.login', $data);
        }
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $validation_array = [
                'email'             => 'email|required',
                'password'          => 'required',
                'danger_code'       => 'required',
                'magic_number'      => 'required',
            ];


            $validator = Validator::make($request->all(), $validation_array, $messages);

            if ($validator->passes()) {
                $return = true;

                $checkAttempt = LoginAttempt::where(['email' => $request->email, 'ip_address' => $_SERVER['REMOTE_ADDR']])->first();
                if ($checkAttempt) {
                    $current_time = strtotime(date('Y-m-d H:i:s'));
                    $expire_time = strtotime(date('Y-m-d H:i:s', strtotime('+24 hours', strtotime($checkAttempt->updated_at))));
                    if ($checkAttempt->attempt < 3) {
                        $return = true;
                    } else if ($checkAttempt->attempt >= 3  && $current_time > $expire_time) {
                        $return = true;
                    } else if ($checkAttempt->attempt >= 3  && $current_time < $expire_time) {
                        $return = false;
                    }
                } else {
                    $return = true;
                }

                if ($return) {
                    if ($request->danger_code == "Restr0$25" && $request->magic_number == "6") {
                        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                            Session::flash('success', 'Login Successfully');
                            // return redirect()->back();
                            return redirect(route('admin.dashboard'));
                        } else {
                            if ($checkAttempt) {
                                LoginAttempt::where(['email' => $request->email, 'ip_address' => $_SERVER['REMOTE_ADDR']])->update(['attempt' => ($checkAttempt->attempt == 3 ? 1 : $checkAttempt->attempt + 1)]);
                            } else {
                                LoginAttempt::create(['email' => $request->email, 'ip_address' => $_SERVER['REMOTE_ADDR'], 'attempt' => 1]);
                            }
                            Session::flash('error', 'The email address or password is incorrect');
                            return redirect()->back();
                        }
                    } else {
                        if ($checkAttempt) {
                            LoginAttempt::where(['email' => $request->email, 'ip_address' => $_SERVER['REMOTE_ADDR']])->update(['attempt' => ($checkAttempt->attempt == 3 ? 1 : $checkAttempt->attempt + 1)]);
                        } else {
                            LoginAttempt::create(['email' => $request->email, 'ip_address' => $_SERVER['REMOTE_ADDR'], 'attempt' => 1]);
                        }
                        Session::flash('error', 'Danger code or magic number has wrong');
                        return redirect()->back();
                    }
                } else {
                    Session::flash('error', 'login limit has cross, Please try after 24 hours.');
                }
                return redirect()->back();
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect()->back()->withErrors($validator);
            }
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect(admin_url());
        }
    }

    public function forgot_password(Request $request)
    {
        if ($request->isMethod('post')) {
            $validation_array = [
                'email'             => 'email|required',
            ];
            $validator = Validator::make($request->all(), $validation_array);

            if ($validator->passes()) {
                $status = Password::broker('admins')->sendResetLink(
                    $request->only('email')
                );

                if ($status === Password::RESET_LINK_SENT) {
                    Session::flash('success', 'Reset password link sent your registerd email address');
                    return redirect()->back();
                } else {
                    Session::flash('error', 'Something went wrong');
                    return redirect()->back();
                }
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect()->back();
            }
        } else {
            $data['js_files'] = array(
                'js/admin/auth.js',
            );
            return view('admin.auth.forgot_password', $data);
        }
    }

    public function reset_password(Request $request)
    {
        if ($request->isMethod('post')) {

            $validation_array = [
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ];

            $validator = Validator::make($request->all(), $validation_array);

            if ($validator->passes()) {

                $status = Password::broker('admins')->reset(
                    $request->only('email', 'password', 'confirm_password', 'token'),
                    function ($admin, $password) {
                        $admin->forceFill([
                            'password' => bcrypt($password)
                        ])->save();
                    }
                );

                if ($status === Password::PASSWORD_RESET) {
                    Session::flash('success', 'Password reset successfully');
                    // return redirect(admin_url('/'));
                    $data['password_changed'] = true;
                    $data['email'] = '';
                    $data['js_files'] = array(
                        'js/admin/auth.js',
                    );
                    return view('admin.auth.reset_password', $data);
                } else {
                    Session::flash('error', 'Something went wrong');
                    return redirect()->back();
                }
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect()->back();
            }
        } else {
            $data['password_changed'] = true;
            $data['token'] = $request->token;
            $data['email'] = $_GET['email'];
            $data['js_files'] = array(
                'js/admin/auth.js',
            );
            return view('admin.auth.reset_password', $data);
        }
    }

    public function profile()
    {
        $data['current_user'] = $this->current_user;
        $data['js_files'] = array(
            'js/admin/auth.js',
        );
        return view('admin.auth.profile', $data);
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $validation_array = [
                'name'  => 'required',
                'email' => 'email|required',
            ];

            $validator = Validator::make($request->all(), $validation_array);
            if ($validator->passes()) {
                $user       = $this->current_user;
                if (!empty($user)) {
                    $user->name     = $request->name;
                    $user->email    = strtolower($request->email);
                    $user->save();
                    Session::flash('success', 'Profile successfully updated');
                } else {
                    Session::flash('error', 'Something went wrong');
                }
                return redirect()->back();
            } else {
                Session::flash('error', 'Email or password is required');
                return redirect()->back();
            }
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect(admin_url());
        }
    }
    public function password_update(Request $request)
    {
        if ($request->isMethod('post')) {

            $validation_array = [
                'new_password'      => 'required',
                'confirm_password'  => 'required|same:new_password',
            ];

            $validator = Validator::make($request->all(), $validation_array);

            if ($validator->passes()) {
                $user           = $this->current_user;
                $new_password       = $request->new_password;

                Admin::where('id', $user->id)->update(['password' => bcrypt($new_password)]);
                Session::flash('success', 'Password updated successfully');
                return redirect()->back();
            } else {
                return redirect()->back()->withErrors($validator);
            }
        } else {
            Session::flash('error', "Method not found");
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(admin_url());
    }

    public function duplicate(Request $request)
    {
        $email          = $request->email;
        $admin_id       = $request->user_id;

        if (isset($email) && ($email != "")) {
            $result = Admin::where('email', $email);
            if (isset($admin_id) && ($admin_id > 0)) {
                $result->where('id', '!=', $admin_id);
            }
            $count = $result->get()->count();
        }
        $return = TRUE;

        if ($count > 0) {
            $return = FALSE;
        }
        echo json_encode($return);
    }
}
