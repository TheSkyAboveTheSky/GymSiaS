<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\Salle;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;


class SeanceController extends Controller
{
    public function index(){
        $seances = Seance::all();
        return view('admin.seances.index',compact('seances'));
    }
    public function create(){
        $salles = Salle::all()->pluck('name','id')->prepend(trans('global.pleaseSelect'),'');
        $coachs = User::all()->pluck('name','id')->prepend(trans('global.pleaseSelect'),'');
        return view('admin.seances.create',compact('salles','coachs'));

    }
    

}

