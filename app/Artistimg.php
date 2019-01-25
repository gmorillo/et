<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artist;

class Artistimg extends Model
{
    protected $fillable = [
        'artist_id', 'img',
    ];

    public function artist()
    {
        return $this -> belongsToMany(Artist::class);
    }
}
