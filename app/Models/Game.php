<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 *
 * Represents a board game entity.
 *
 * @package App\Models
 */
class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',            // The name of the board game
        'description',     // A brief description of the board game
        'price',           // The price of the board game
        'image',           // URL to an image of the board game
        'category',        // The category of the board game
        'video',           // URL to a video about the board game
        'number_gamer',    // The number of players the game supports
        'playing_time',    // The average playing time of the game
        'complexity',      // The complexity rating of the game
        'rating',          // The average rating of the game
        'number_rating',   // The number of ratings the game has received
        'published_date',  // The date the game was published
        'rank'             // The rank of the game
    ];
}
