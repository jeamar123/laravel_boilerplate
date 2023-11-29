<?php

namespace App\Modules\Log\Actions;

use App\Modules\Log\Models\Log;

class DeleteLogAction
{
    public function execute(Log $log): Log
    {
        $log->delete();

        return $log;
    }
}
