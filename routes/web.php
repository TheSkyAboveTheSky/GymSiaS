<?php

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
Route::get('/clients','PagesController@clients')->name('clients');
Route::get('/offres','PagesController@offres')->name('offres');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/admin/clients','PagesController@getClient')->name('admin-clients');
Route::get('/admin/coachs','PagesController@getCoach')->name('admin-coachs');
Route::get('/client/dashboard',function(){
    return view('client/dashboard');
})->name('client-dashboard');
Route::get('/coach/dashboard',function(){
    return view('coach/dashboard');
})->name('coach-dashboard');
Route::post('/save/client','PagesController@save_client');
Route::post('/save/coach','PagesController@save_coach');