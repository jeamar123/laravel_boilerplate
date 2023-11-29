<?php

namespace App\Modules\Log\Http\Controllers;

use App\Modules\Log\Models\Log;
use App\Modules\Log\Http\Requests\UpdateLogRequest;
use App\Modules\Log\Actions\UpdateLogAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdateLogController
{
    public function __invoke(
        Log $log, 
        UpdateLogRequest $request, 
        UpdateLogAction $updateLogAction
    ): JsonResponse
    {
        $updateLogAction->execute($log, $request->validated());

        return response()->json([
            'message' => 'Success',
            'log' => $log,
        ], 200);
    }
}   