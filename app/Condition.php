<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artist;

class Condition extends Model
{
    protected $fillable = [
        'condition',
    ];
    
    public function artist()
    {
        return $this -> belongsToMany(Artist::class);
    }
}
