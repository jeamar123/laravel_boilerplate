<?php

namespace App\Modules\Log\Http\Controllers;

use App\Modules\Log\Models\Log;
use App\Modules\Log\Http\Requests\CreateLogRequest;
use App\Modules\Log\Actions\CreateLogAction;
use Illuminate\Http\JsonResponse;

class CreateLogController
{
    public function __invoke(
        CreateLogRequest $request,
        CreateLogAction $createLogAction,
    ): JsonResponse
    {
        $createLogAction->execute($request->validated());

        return response()->json([
            'message' => 'Success'
        ], 201);
    }
}   