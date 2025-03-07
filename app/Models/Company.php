<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'slug'];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string'
    ];
}
