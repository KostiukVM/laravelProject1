<?php

namespace App\Http\Controllers;

use App\Models\ZooAnimal;
use App\Models\ZooAnimalFood;
use App\Models\ZooEmployee;
use Illuminate\Http\Request;

use App\Models\Animal;
use App\Models\Food;
use App\Models\Employee;

class ZooController extends Controller
{
    public function showAnimals()
    {
        $animals = ZooAnimal::all();
        return view('animals', ['animals' => $animals]);
    }

    public function showFood()
    {
        $food = ZooAnimalFood::all();
        return view('animalsFood', ['food' => $food]);
    }

    public function showEmployees()
    {
        $employees = ZooEmployee::all();
        return view('animalsEmployees', ['employees' => $employees]);
    }
}
