<?php

namespace App\Http\Controllers\API;

use App\Models\Banner;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    function getList()
    {
        try {
            $bannerList = Banner::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Banner list',
                'data' => $bannerList
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to get Banner list',
                'data' => $th->getMessage()
            ]);
        }
    }
}