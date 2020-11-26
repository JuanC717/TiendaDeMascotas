<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\Admin;

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


Route::get('/', [Inicio::class, 'inicio']);


Route::get('/info', [Admin::class, 'info']);
    

Route::get('/caninos', [Admin::class, 'caninos']);
    

Route::get('/felinos', [Admin::class, 'felinos']);
    

Route::get('/pqr', [Admin::class, 'pqr']);
   
