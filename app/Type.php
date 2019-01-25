<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artist;

class Type extends Model
{
    
	protected $fillable = [
        'type',
    ];

    public function artist()
    {
        return $this -> belongsToMany(Artist::class);
    }
}
