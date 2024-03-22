<?php

namespace App\Http\Controllers;

use App\Models\ZooAnimal;
use App\Models\ZooAnimalFood;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showAnimals(Request $request)
    {
       $animals = ZooAnimal::all();

       return view('animals', ['animalList' => $animals]);
    }
    public function showAnimalData(Request $request, ZooAnimal $animal)
    {

        $zooAnimals = $animal->animalId;
        dd($zooAnimals->toArray());
    }


}
