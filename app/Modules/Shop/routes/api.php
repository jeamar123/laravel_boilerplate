<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Shop\Http\Controllers\ListShopsController;
use App\Modules\Shop\Http\Controllers\CreateShopController;
use App\Modules\Shop\Http\Controllers\UpdateShopController;
use App\Modules\Shop\Http\Controllers\DeleteShopController;
use App\Modules\Shop\Http\Controllers\LoginShopController;


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/', ListShopsController::class)->name('shop.list');
    Route::post('/', CreateShopController::class)->name('shop.create');
    Route::patch('/{shop}', UpdateShopController::class)->name('shop.update');
    Route::delete('/{shop}', DeleteShopController::class)->name('shop.delete');
});