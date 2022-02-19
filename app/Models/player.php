<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'name',
        'image',
        'position',
        'throw',
        'hitting',
    ];

    public function player(){
        return $this->belongsTo(User::class);
    }
}
