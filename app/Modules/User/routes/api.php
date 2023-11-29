<?php

use Illuminate\Support\Facades\Route;
use App\Modules\User\Http\Controllers\ListUsersController;
use App\Modules\User\Http\Controllers\CreateUserController;
use App\Modules\User\Http\Controllers\UpdateUserController;
use App\Modules\User\Http\Controllers\DeleteUserController;


Route::get('/', ListUsersController::class)->name('user.list');
Route::post('/', CreateUserController::class)->name('user.create');
Route::patch('/{user}', UpdateUserController::class)->name('user.update');
Route::delete('/{user}', DeleteUserController::class)->name('user.delete');
