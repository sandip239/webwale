<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // Add 'title' to the array
        'content',
        'main_description',
        'image', // And other fields you might have
    ];
    protected $table='blog_new_post';
}
