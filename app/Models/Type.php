<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'description', 'attributes'];

    /** @use HasFactory<\Database\Factories\TypeFactory> */
    use HasFactory;

    public function enemies()
    {
        return $this->hasMany(Enemy::class);
    }
}
