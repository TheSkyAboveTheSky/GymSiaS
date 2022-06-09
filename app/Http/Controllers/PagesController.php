<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Abonnement;
use App\Models\Seance;
use App\Models\Salle;
use Carbon\Carbon;

class PagesController extends Controller
{
    // list coachs
    public function coachs(){
            $coachs= User::where('role_id',0)->get();
            return view('coachs')->with([
                'coachs'=>$coachs
            ]);
        }
    // Planning
    public function planning(){
        return view('planning');
    }
}
