<?php

namespace App\Modules\Shop\Http\Controllers;

use App\Modules\Shop\Models\Shop;
use App\Modules\Shop\Http\Requests\CreateShopRequest;
use App\Modules\Shop\Actions\CreateShopAction;
use Illuminate\Http\JsonResponse;

class CreateShopController
{
    public function __invoke(
        CreateShopRequest $request,
        CreateShopAction $createShopAction,
    ): JsonResponse
    {
        $createShopAction->execute($request->validated());

        return response()->json([
            'message' => 'Success'
        ], 201);
    }
}   