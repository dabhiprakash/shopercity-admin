<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    /**
     * 📜 Get all states or search by name
     */
    public function index(Request $request)
    {
        $query = State::query();

        // 🔍 Search by state name
        if ($request->has('search') && $request->search !== '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $states = $query->orderBy('name', 'asc')->get();

        return response()->json([
            'status' => true,
            'message' => 'State list fetched successfully',
            'data' => $states
        ]);
    }
}
