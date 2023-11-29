<?php

namespace App\Modules\Log\Http\Controllers;

use App\Modules\Log\Models\Log;
use Illuminate\Http\JsonResponse;

class ListLogsController
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'logs' => Log::get()
        ], 200);
    }
}   