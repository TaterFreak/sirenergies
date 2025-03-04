<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'is_new', 'image'];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'is_new' => 'boolean',
        'image' => 'string'
    ];
}
