<?php

namespace App\Modules\Shop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Concerns\UuidPrimaryKey;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Shop extends Model
{   
    use HasFactory,
        UuidPrimaryKey,
        LogsActivity;

    protected $fillable = [
        'name',
        'address',
        'rating',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
                ->logAll()
                ->useLogName('shop');
    }
}
