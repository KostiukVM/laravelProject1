<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ZooController;
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



Route::get('/', [ZooController::class, 'showAnimals'])->name('animals');

Route::get('/food', [ZooController::class, 'showFood'])->name('food');

Route::get('/employees', [ZooController::class, 'showEmployees'])->name('employees');

Route::get('/animals/{animal}', [ZooController::class, 'showAnimalData'])->name('animals.data');

Route::get('/animalFood', [ZooController::class, 'showAnimalsFood'])->name('animals.food');

Route::get('/animalEmployee', [ZooController::class, 'showAnimalsEmployee'])->name('animals.employee');
