<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemandeAccesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Salle;
use App\Models\User;
use App\Models\Seance;
use App\Models\Abonnement;
use App\Models\DemandeAcces;
use Carbon\carbon;
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

     Route::get('/dashboard',function(){
        $clients = User::where('role_id',0)->count();
        $coachs = User::where('role_id',1)->count();
        $salles = Salle::count();
        $seances = Seance::count();
        $abonnements = Abonnement::count();
        $month = User::whereBetween('date_debut_abonnement',[Carbon::now()->subMonth(),Carbon::now()])->count();
        $year = User::whereBetween('date_debut_abonnement',[Carbon::now()->subYear(),Carbon::now()])->count();

         return view('admin/dashboard')->with([
             'clients' => $clients ,
             'coachs' => $coachs,
             'salles' => $salles,
             'seances' => $seances,
             'abonnements' =>$abonnements,
             'month' =>$month,
             'year' =>$year
         ]);
     })->name('admin-dashboard');
     Route::get('/demandes_acces',function(){
         $demandes = DemandeAcces::where('Etatdemande',1)->get();
         return view('admin/demandes_acces')->with([
             'demandes' => $demandes
         ]);
     })->name('admin-demandes_acces');
     Route::resource('clients','ClientController');
     Route::resource('coachs','CoachController');
     Route::resource('salles','SalleController');
     Route::resource('seances','SeanceController');
     Route::resource('abonnements','AbonnementController');
     Route::get('/accepter/{id}','DemandeAccesController@accepter');
     Route::get('/refuser/{id}','DemandeAccesController@refuser');
 });

