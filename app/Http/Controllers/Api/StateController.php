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
    public function index()
    {
        $states = State::orderBy('name', 'asc')-> get()->map(function ($state) {
            $state->id = encrypt_it($state->id);
            return $state;
        });

        return response()->json([
            'status' => true,
            'message' => 'State list fetched successfully',
            'data' => $states
        ]);
    }
}
