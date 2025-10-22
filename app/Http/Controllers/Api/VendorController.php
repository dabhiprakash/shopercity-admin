<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Category;

class VendorController extends Controller
{
    /**
     * Unified vendor API with filters + optional category-wise grouping
     * Query params:
     * - search
     * - category_id
     * - city_id
     * - state_id
     * - pincode
     * - discount_id
     * - trending=1
     * - latest=1
     * - group_by_category=1 (returns vendors grouped by category)
     */
    public function index(Request $request)
    {
        $query = Vendor::query();

        // Filters
        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('store_name', 'like', '%' . $request->search . '%');
            });
        }
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }
        if ($request->has('city_id') && $request->city_id != '') {
            $query->where('city_id', $request->city_id);
        }
        if ($request->has('state_id') && $request->state_id != '') {
            $query->where('state_id', $request->state_id);
        }
        if ($request->has('pincode') && $request->pincode != '') {
            $query->where('zipcode', $request->pincode);
        }
        if ($request->has('discount_id') && $request->discount_id != '') {
            $query->where('discount_id', $request->discount_id);
        }

        // Trending / latest sorting
        if ($request->has('trending') && $request->trending == 1) {
            $query->orderBy('created_by', 'desc');
        } else if ($request->has('latest') && $request->latest == 1) {
            $query->orderBy('id', 'desc');
        } else {
            $query->orderBy('name', 'asc');
        }

        $query->where('status', 2); // only approved

        $vendors = $query->get()->transform(function ($vendor) {
            $vendor->image_url = $vendor->image ? url('uploads/vendors/' . $vendor->image) : null;
            $vendor->banner_url = $vendor->banner ? url('uploads/vendors/' . $vendor->banner) : null;
            return $vendor;
        });

        // ✅ Group by category if requested
        if ($request->has('group_by_category') && $request->group_by_category == 1) {
            $grouped = $vendors->groupBy('category_id')->map(function ($items, $key) {
                $category = Category::find($key);
                return [
                    'category_id' => $key,
                    'category_name' => $category ? $category->name : null,
                    'vendors' => $items
                ];
            })->values();

            return response()->json([
                'status' => true,
                'message' => 'Vendors grouped by category fetched successfully',
                'data' => $grouped
            ]);
        }

        // Default: return plain vendor list
        return response()->json([
            'status' => true,
            'message' => 'Vendors fetched successfully',
            'data' => $vendors
        ]);
    }

    /**
     * Vendor details by ID
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);

        if (!$vendor || $vendor->status != 2) {
            return response()->json([
                'status' => false,
                'message' => 'Vendor not found'
            ], 404);
        }

        $vendor->image_url = $vendor->image ? url('uploads/vendors/' . $vendor->image) : null;
        $vendor->banner_url = $vendor->banner ? url('uploads/vendors/' . $vendor->banner) : null;

        return response()->json([
            'status' => true,
            'message' => 'Vendor details fetched successfully',
            'data' => $vendor
        ]);
    }
}
