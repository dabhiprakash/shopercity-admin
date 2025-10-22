<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends MasterController
{
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return view('auth.login');
    }

    public function signup() {
        return view('auth.signup');
    }

    public function signup2() {
        $data['js_files'] = array(
            'js/seller/auth.js',
        );
        return view('auth.signup2', $data);
    }

    public function signup3() {
        return view('auth.signup3');
    }



}
