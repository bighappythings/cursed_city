<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    protected $fillable = ['name', 'move', 'wounds', 'size', 'weapons', 'type', 'dice', 'damage', 'specialRules', 'behaviours', 'bio', 'type_id'];

    /** @use HasFactory<\Database\Factories\EnemyFactory> */
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }


}
