<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Salle;
use App\Models\User;
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
Route::get('/','HomeController@checkUserType');
Route::get('/bar', function () {
    return view('layouts.bar');
});
Route::get('/index',function(){
    $salles = Salle::all();
    $users = User::all();
    return view('index')->with([
        'salles'=>$salles,
        'users' =>$users,
    ]);
});
Route::get('/coachs','PagesController@coachs')->name('coachs');
Route::get('/planning','PagesController@planning')->name('planning');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/client/dashboard',function(){
    return view('client/dashboard');
})->name('client-dashboard');
Route::get('/coach/dashboard',function(){
    return view('coach/dashboard');
})->name('coach-dashboard');

 Route::prefix('admin')->middleware('auth')->group(function(){
     Route::get('/home',function(){
         return view('clients');
     })->name('admin-home');
     Route::resource('clients','ClientController');
     Route::resource('coachs','CoachController');
     Route::resource('salles','SalleController');
     Route::resource('seances','SeanceController');
     Route::resource('abonnements','AbonnementController');
 });