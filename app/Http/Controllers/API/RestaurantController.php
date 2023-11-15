<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    function getList()
    {
        try {
            $restaurantList = Restaurant::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Restaurant list',
                'data' => $restaurantList
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to get Restaurant list',
                'data' => $th->getMessage()
            ]);
        }
    }
}