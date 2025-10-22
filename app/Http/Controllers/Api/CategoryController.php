<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('arrange', 'asc')->get();

        return response()->json([
            'status' => true,
            'message' => 'All categories fetched successfully',
            'data' => $categories
        ], 200);
    }

    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required|string|max:100'
        ]);

        $categories = Category::where('name', 'like', '%' . $request->q . '%')
            ->orderBy('arrange', 'asc')
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'Search results fetched successfully',
            'data' => $categories
        ], 200);
    }

    public function trending()
    {
        $categories = Category::orderBy('created_by', 'desc')
        ->limit(10)
        ->get();

        return response()->json([
            'status' => true,
            'message' => 'Recently added categories fetched successfully',
            'data' => $categories
        ]);

    }
}
