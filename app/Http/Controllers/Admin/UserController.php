<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $stats = [
            'users' => User::count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }
}
