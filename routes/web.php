<?php

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
    return view('welcome');
});

Route::controller(\App\Http\Controllers\EmployeeController::class)->group(callback: function (){
   Route::get('/employee', 'index');
   Route::get('/employee/{id}', 'show');
   Route::post('/employee', 'store');
   Route::put('/employee/update/{id}', 'update');
   Route::delete('/employee/delete/{id}', 'delete');
});

