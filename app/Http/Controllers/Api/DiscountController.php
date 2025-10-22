<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{
    // List all discounts with pagination
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);

        $discounts = Discount::orderBy('id', 'asc')
            ->paginate($perPage)
            ->through(function ($item) {
                $item->image_url = $item->image ? url('uploads/discounts/' . $item->image) : null;
                return $item;
            });

        return response()->json([
            'status' => true,
            'message' => 'Discounts fetched successfully',
            'data' => $discounts
        ]);
    }

    // Get single discount details
    public function show($id)
    {
        $discount = Discount::find($id);
        if (!$discount) {
            return response()->json([
                'status' => false,
                'message' => 'Discount not found'
            ], 404);
        }

        $discount->image_url = $discount->image ? url('uploads/discounts/' . $discount->image) : null;

        return response()->json([
            'status' => true,
            'message' => 'Discount details fetched successfully',
            'data' => $discount
        ]);
    }
    public function trending()
    {
        $topDiscounts = Vendor::select('discount_id', DB::raw('COUNT(*) as total'))
            ->whereNotNull('discount_id')
            ->groupBy('discount_id')
            ->orderByDesc('total')
            ->limit(4)
            ->get();

        $discounts = Discount::whereIn('id', $topDiscounts->pluck('discount_id'))
            ->get()
            ->map(function ($item) {
                $item->image_url = $item->image ? url('uploads/discounts/' . $item->image) : null;
                return $item;
            });

        return response()->json([
            'status' => true,
            'message' => 'Trending discounts fetched successfully',
            'data' => $discounts
        ]);
    }
}
