<?php

namespace App\Modules\Shop\Http\Controllers;

use App\Modules\Shop\Models\Shop;
use App\Modules\Shop\Http\Requests\UpdateShopRequest;
use App\Modules\Shop\Actions\UpdateShopAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdateShopController
{
    public function __invoke(
        Shop $shop, 
        UpdateShopRequest $request, 
        UpdateShopAction $updateShopAction
    ): JsonResponse
    {
        $updateShopAction->execute($shop, $request->validated());

        return response()->json([
            'message' => 'Success',
            'shop' => $shop,
        ], 200);
    }
}   