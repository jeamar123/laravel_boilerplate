<?php

namespace App\Modules\Log\Http\Controllers;

use App\Modules\Log\Models\Log;
use App\Modules\Log\Actions\DeleteLogAction;
use Illuminate\Http\JsonResponse;

class DeleteLogController
{
    public function __invoke(
        Log $log, 
        DeleteLogAction $deleteLogAction,
    ): JsonResponse
    {
        $deleteLogAction->execute($log);

        return response()->json([
            'message' => 'Success.',
        ], 200);
    }
}   