<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function planning(){
        return view('planning');
    }
    public function coachs(){
        $coachs= User::all();
        return view('coachs')->with([
            'coachs'=>$coachs
        ]);
    }
    
}
