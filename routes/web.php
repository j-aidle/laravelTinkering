<?php

use App\Http\Controllers\ComptadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);

//Route::post('/incrementar',function(){
//   $comptador = session('comptador',0);
//   session()->put('comptador',$comptador+1);
//
//   return response()->json(['comptador'=>$comptador]);
//});
//
//Route::post('/reset', function(){
//    session('comptador',0);
//    return response()->json(['comptador'=>0]);
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
