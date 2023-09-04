<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Cliente','App\Http\Controllers\ClienteController@GetCliente');
Route::get('Cliente/{Id}','App\Http\Controllers\ClienteController@GetClienteByid');
Route::post('Cliente/Create','App\Http\Controllers\ClienteController@PostCliente');
Route::put('Cliente/Update/{Id}','App\Http\Controllers\ClienteController@UpdateCliente');
Route::delete('Cliente/Delete/{Id}','App\Http\Controllers\ClienteController@DeleteCliente');

