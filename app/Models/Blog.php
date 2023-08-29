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

    public static function getDifferentData($limit, $orderBy)
    {
        return Blog::select('id', 'title','content','image', 'updated_at')
            ->orderBy($orderBy, 'desc')
            ->limit($limit)
            ->get();
    }


}
