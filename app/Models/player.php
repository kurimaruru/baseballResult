<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'name',
        'position',
        'throw',
        'hitting',
    ];
}
