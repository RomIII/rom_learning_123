<?php

use Illuminate\Support\Facades\Route;
use Rom\Calc\Controller\CalcController;

Route::get('/calc', [CalcController::class,'index']);
Route::post('/calc', [CalcController::class,'calc'])->name('calc');
//Route::get('/calc', function(){
//    return 'ddd';
//});