<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalutController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principale', function (){
    return view('main');
});



Route::resource('tasks', TaskController::class);
Route::get('/salut/{nom}', [SalutController::class, 'index']);
