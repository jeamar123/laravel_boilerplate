<?php

namespace App\Modules\Shop\Http\Controllers;

use App\Modules\Shop\Models\Shop;
use Illuminate\Http\JsonResponse;

class ListShopsController
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'shops' => Shop::get()
        ], 200);
    }
}   