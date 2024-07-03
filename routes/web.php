<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllerwebsite;
use App\Http\Controllers\ControllerBeranda;


Route::get('/', [Controllerwebsite::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Route::get('/dashboard/beranda', [ControllerBeranda::class,'index']);
Route::get('/dashboard/beranda/add', [ControllerBeranda::class,'add']);
Route::post('/dashboard/beranda/add/simpan', [ControllerBeranda::class,'simpan']);
Route::get('/dashboard/beranda/edit/{id}', [ControllerBeranda::class,'edit']);
