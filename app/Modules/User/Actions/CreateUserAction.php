<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Models\User;

class CreateUserAction
{
    public function __construct()
    {

    }

    public function execute(array $attributes): User
    {
        $user = User::create([
            ...$attributes,
            ...[
                
            ]
        ]);

        return $user;
    }
}
