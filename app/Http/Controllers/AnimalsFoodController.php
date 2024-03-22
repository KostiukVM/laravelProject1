<?php

namespace App\Http\Controllers;

use App\Models\ZooAnimal;
use App\Models\ZooAnimalFood;
use App\Models\ZooEmployee;
use Illuminate\Http\Request;

class AnimalsFoodController extends Controller
{

    public function showAnimalsFood(Request $request, ZooAnimalFood $food)
    {
        $employee = ZooEmployee::class;

        $zooAnimalsFood = $food->animalFood;
        dd($zooAnimalsFood->toArray());
    }

}
