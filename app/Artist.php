<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Condition;
use App\Type;

class Artist extends Model
{
    protected $fillable = [
        'status', 'name','condition_id', 'type_id',
    ];

    public function condition()
    {
        return $this -> belongsToMany(Condition::class);
    }

    public function type()
    {
        return $this -> belongsToMany(Type::class);
    }
}
