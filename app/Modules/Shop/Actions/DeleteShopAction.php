<?php

namespace App\Modules\Shop\Actions;

use App\Modules\Shop\Models\Shop;

class DeleteShopAction
{
    public function execute(Shop $shop): Shop
    {
        $shop->delete();

        return $shop;
    }
}
