<?php

use Illuminate\Support\Facades\Route;
use App\Modules\User\Http\Controllers\ListUsersController;
use App\Modules\User\Http\Controllers\CreateUserController;
use App\Modules\User\Http\Controllers\UpdateUserController;
use App\Modules\User\Http\Controllers\DeleteUserController;
use App\Modules\User\Http\Controllers\LoginUserController;

use App\Modules\User\Models\User;


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/', ListUsersController::class)
        ->name('user.list')
        ->can('list', User::class);
    Route::get('/{user}', ListUsersController::class)
        ->name('user.show')
        ->can('show', User::class);
    Route::post('/', CreateUserController::class)
        ->name('user.create')
        ->can('create', User::class);
    Route::patch('/{user}', UpdateUserController::class)
        ->name('user.update')
        ->can('update', 'user');
    Route::delete('/{user}', DeleteUserController::class)
        ->name('user.delete')
        ->can('delete', 'user');
});

Route::post('/login', LoginUserController::class)->name('user.login');