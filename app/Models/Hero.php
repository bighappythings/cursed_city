<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    /** @use HasFactory<\Database\Factories\HeroFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'move',
        'agility',
        'defence',
        'vitality',
        'attributes',
        'size',
        'wounds',
        'weapons',
        'abilities',
        'inspiration'
    ];
}
