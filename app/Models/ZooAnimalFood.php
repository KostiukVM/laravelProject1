<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooAnimalFood extends Model
{
    protected $table = "animal_food";

    public function animalFood()
    {
        return $this->hasMany(ZooAnimalFood::class);
    }
}
