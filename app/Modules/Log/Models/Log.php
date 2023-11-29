<?php

namespace App\Modules\Log\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Concerns\UuidPrimaryKey;

class Log extends Model
{
    use HasFactory, UuidPrimaryKey;

    protected $fillable = [
        'user',
        'information',
    ];
}
