<?php

namespace App\Http\Controllers\API;

use App\Models\Food;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    function getList()
    {
        try {
            $foodList = Food::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Food list',
                'data' => $foodList
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to get Food list',
                'data' => $th->getMessage()
            ]);
        }
    }
}