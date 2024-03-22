<?php

namespace App\Http\Controllers;

use App\Models\ZooAnimalFood;
use Illuminate\Http\Request;

class AnimalsEmployeeController extends Controller
{
    public function showAnimalsFood(Request $request, ZooAnimalFood $food)
    {
        $food = ZooAnimalFood::class;

        $zooAnimalsFood = $food->animalEmployee;
        dd($zooAnimalsFood->toArray());
    }
}
