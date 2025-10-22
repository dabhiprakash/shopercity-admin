<?php

namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;

class MasterController extends BaseController
{

   public $current_user;

   public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->current_user = Auth::guard('admin')->user();
            return $next($request);
        });
   }
}
