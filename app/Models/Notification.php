<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['title', 'is_new'];

    protected $casts = [
        'title' => 'string',
        'is_new' => 'boolean',
    ];
}
