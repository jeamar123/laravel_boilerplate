<?php

namespace App\Modules\Shop\Policies;

use App\Modules\Shop\Models\Shop;

class ShopPolicy
{
    public function list(User $user): bool
    {
        return $user->can('shop:view');
    }

    public function show(User $user): bool
    {
        return $user->can('shop:view');
    }

    public function create(User $user): bool
    {
        return $user->can('shop:create');
    }

    public function update(User $user): bool
    {
        return $user->can('shop:update');
    }

    public function delete(User $user): bool
    {
        return $user->can('shop:delete');
    }

}
