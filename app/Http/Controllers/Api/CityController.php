<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $query = City::query();
        if ($request->has('search') && $request->search !== '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $cities = $query->orderBy('name', 'asc')->get();

        return response()->json([
            'status' => true,
            'message' => 'City list fetched successfully',
            'data' => $cities
        ]);
    }
}
