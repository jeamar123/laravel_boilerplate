<?php

namespace App\Modules\Shop\Actions;

use App\Modules\Shop\Models\Shop;

class UpdateShopAction
{
    public function __construct()
    {

    }

    public function execute(Shop $shop, array $attributes): Shop
    {
        $shop->update($attributes);

        return $shop;
    }
}
