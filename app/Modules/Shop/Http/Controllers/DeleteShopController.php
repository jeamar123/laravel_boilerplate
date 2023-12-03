<?php

namespace App\Modules\Shop\Http\Controllers;

use App\Modules\Shop\Models\Shop;
use App\Modules\Shop\Actions\DeleteShopAction;
use Illuminate\Http\JsonResponse;

class DeleteShopController
{
    public function __invoke(
        Shop $shop, 
        DeleteShopAction $deleteShopAction,
    ): JsonResponse
    {
        $deleteShopAction->execute($shop);

        return response()->json([
            'message' => 'Success.',
        ], 200);
    }
}   