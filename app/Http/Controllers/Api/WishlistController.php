<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    // List all wishlist vendors for a user
    public function index(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer'
        ]);

        $wishlist = Wishlist::with('vendor')
            ->where('user_id', $request->user_id)
            ->get()
            ->map(function ($item) {
                $vendor = $item->vendor;
                $vendor->image_url = $vendor->image ? url('uploads/vendors/' . $vendor->image) : null;
                $vendor->banner_url = $vendor->banner ? url('uploads/vendors/' . $vendor->banner) : null;
                return $vendor;
            });

        return response()->json([
            'status' => true,
            'message' => 'Wishlist fetched successfully',
            'data' => $wishlist
        ]);
    }

    // Add vendor to wishlist
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'vendor_id' => 'required|integer'
        ]);

        // Prevent duplicates
        $exists = Wishlist::where('user_id', $request->user_id)
            ->where('vendor_id', $request->vendor_id)
            ->first();

        if ($exists) {
            return response()->json([
                'status' => false,
                'message' => 'Vendor already in wishlist'
            ], 400);
        }

        $wishlist = Wishlist::create([
            'user_id' => $request->user_id,
            'vendor_id' => $request->vendor_id
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Vendor added to wishlist',
            'data' => $wishlist
        ]);
    }

    // Remove vendor from wishlist
    public function destroy(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'vendor_id' => 'required|integer'
        ]);

        $wishlist = Wishlist::where('user_id', $request->user_id)
            ->where('vendor_id', $request->vendor_id)
            ->first();

        if (!$wishlist) {
            return response()->json([
                'status' => false,
                'message' => 'Vendor not found in wishlist'
            ], 404);
        }

        $wishlist->delete();

        return response()->json([
            'status' => true,
            'message' => 'Vendor removed from wishlist'
        ]);
    }
}
