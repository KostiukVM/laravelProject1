<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooAnimal extends Model
{

    protected $table = "Animals";
   public function animalId()
   {
       return $this->hasMany( ZooAnimal::class);
   }

}
