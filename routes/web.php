<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('animals');
});

Route::get('animalFood',
    [TestController::class, 'showAnimalsFood' ]
)->name('animals.food');

Route::get('animalEmployee',
    [TestController::class, 'showAnimalsEmployee' ]
)->name('animals.employee');

Route::get('animals/{animal}',
    [TestController::class, 'showAnimalData' ]
)->name('animals.data');
