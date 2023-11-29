<?php

namespace App\Modules\Log\Actions;

use App\Modules\Log\Models\Log;

class UpdateLogAction
{
    public function __construct()
    {

    }

    public function execute(Log $log, array $attributes): Log
    {
        $log->update($attributes);

        return $log;
    }
}
