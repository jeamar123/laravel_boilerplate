<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Log\Http\Controllers\ListLogsController;
use App\Modules\Log\Http\Controllers\CreateLogController;
use App\Modules\Log\Http\Controllers\UpdateLogController;
use App\Modules\Log\Http\Controllers\DeleteLogController;


Route::get('/', ListLogsController::class)->name('log.list');
Route::post('/', CreateLogController::class)->name('log.create');
Route::patch('/{log}', UpdateLogController::class)->name('log.update');
Route::delete('/{log}', DeleteLogController::class)->name('log.delete');
