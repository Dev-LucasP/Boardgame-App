<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'video',
        'number_gamer',
        'playing_time',
        'complexity',
        'rating',
        'number_rating',
        'published_date',
        'rank'
    ];
}
