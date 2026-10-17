<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name',
        'issuer',
        'issue_date',
        'description',
        'image',
        'order',
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];
}
