<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooAnimal extends Model
{
   protected $table = "Animals";
   public function employeeToAnimal()
   {
       return $this->hasMany(ZooEmployee::class);
   }
   public function foodToAnimal()
   {
       return $this->hasMany(ZooAnimalFood::class);
   }
}
