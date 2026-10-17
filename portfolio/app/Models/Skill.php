<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'proficiency',
        'description',
        'icon',
        'order',
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
