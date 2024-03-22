<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooAnimalFood extends Model
{
    protected $table = "AnimalsFood";
    public function animalFood()
    {
        return $this->hasMany( ZooAnimalFood::class);
    }
}
