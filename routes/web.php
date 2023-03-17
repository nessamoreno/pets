<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetWebController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pet',[PetWebController::class,'list']);
Route::get('/pet/create', [PetWebController::class,'create'])->name('pet.register');
Route::post('/pet/store', [PetWebController::class,'store'])->name('pet.store');
Route::delete('/pet/{id}/delete', [PetWebController::class,'delete'])->name('pet.delete');
Route::get('pet/{id}/update',[PetWebController::class,'update'])->name('pet.update');
Route::put('pet/{id}/put',[PetWebController::class,'put'])->name('pet.put');