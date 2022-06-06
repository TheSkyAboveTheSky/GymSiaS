<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function checkUserType(){
        if (!Auth::user()){
            return redirect()->route('login');
        }
        if (Auth::user()->role_id === 0){
            return redirect()->route('client-dashboard');
        }
        if (Auth::user()->role_id === 1){
            return redirect()->route('coach-dashboard');
        }
        if (Auth::user()->role_id === 2){
            return redirect()->route('admin-clients');
        }

    }
}
