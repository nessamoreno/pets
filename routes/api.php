<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    echo ('we are in test to create list of pets');
});


Route::post('/pet',[PetController::class,'create']);
Route::get('/pet', [PetController::class,'list']);
Route::get('/pet/{id}', [PetController::class,'show']);
Route::delete('/pet', [PetController::class,'delete']);
Route::put('/pet/{id}', [PetController::class,'update']);