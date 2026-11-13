<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrar', function () {
    return view('opiniones');
});

Route::post('/guardarOpinion',[OpinionController::class,'guardarOpinion']);
