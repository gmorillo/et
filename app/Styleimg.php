<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Style;

class Styleimg extends Model
{
    protected $fillable = [
        'style_id', 'img',
    ];

    public function artist()
    {
        return $this -> belongsToMany(Style::class);
    }
}
