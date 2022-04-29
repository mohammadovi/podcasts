<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable =[
        'user_id',
        'title',
        'description',
        'price',
        'inventory',
        'view_count',
        'image','audio','metaTitle','metaDescription'

    ];
}
