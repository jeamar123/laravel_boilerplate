<?php

namespace App\Modules\Log\Actions;

use App\Modules\Log\Models\Log;

class CreateLogAction
{
    public function __construct()
    {

    }

    public function execute(array $attributes): Log
    {
        $log = Log::create([
            ...$attributes,
            ...[
                
            ]
        ]);

        return $log;
    }
}
