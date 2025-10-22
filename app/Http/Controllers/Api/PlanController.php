<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Vendor;

class PlanController extends Controller
{
    // List all plans
    public function index()
    {
        $plans = Plan::orderBy('id', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Plan list fetched successfully',
            'data' => $plans
        ]);
    }

    // Get single plan details
    public function show($id)
    {
        $plan = Plan::find($id);
        if (!$plan) {
            return response()->json([
                'status' => false,
                'message' => 'Plan not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Plan details fetched successfully',
            'data' => $plan
        ]);
    }

    public function userPlans(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:vendor,user_id'
        ]);

        $user_id = $request->user_id;

        // All plans
        $all_plans = Plan::orderBy('id', 'asc')->get();

        // Current user's plan
        $vendor = Vendor::where('user_id', $user_id)->first();
        $current_plan = null;

        if ($vendor && $vendor->plan_id) {
            $current_plan = Plan::find($vendor->plan_id);
        }

        return response()->json([
            'status' => true,
            'message' => 'Plans fetched successfully',
            'data' => [
                'all_plans' => $all_plans,
                'current_plan' => $current_plan
            ]
        ]);
    }

}
