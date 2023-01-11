<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlayer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        // 'results' => 'array',
        // 'created_at' => 'datetime:d-m-Y'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

}
