<?php

namespace App\Modules\Shop\Actions;

use App\Modules\Shop\Models\Shop;

class CreateShopAction
{
    public function __construct()
    {

    }

    public function execute(array $attributes): Shop
    {
        $shop = Shop::create([
            ...$attributes,
            ...[
                
            ]
        ]);

        return $shop;
    }
}
