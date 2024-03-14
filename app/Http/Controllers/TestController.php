<?php

namespace App\Http\Controllers;

use App\Models\ZooAnimal;
use App\Models\ZooAnimalFood;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testMigration(Request $request)
    {
       $zoo = ZooAnimal::all();
       dd($zoo->employee);
       return 'yes';
    }


}
