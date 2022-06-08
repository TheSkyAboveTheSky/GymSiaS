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
/*     //Pour Test NavBar
    public function index(){
        return view('index');
    }
    // Planning
    public function planning(){
        return view('planning');
    }
    // list coachs
    public function coachs(){
        $coachs= User::all();
        return view('coachs')->with([
            'coachs'=>$coachs
        ]);
    }
    // list cients
    public function clients(){
        $clients=User::all();
        return view('clients')->with([
            'clients'=>$clients
        ]);
    }
    // client [ pour tableau]
    public function getClient(){
        $clients=User::all();
        $today = Carbon::today();
        return view('admin.client')->with([
            'clients'=>$clients,
            'today'=>$today
        ]);
    }
    // coach [pour coach]
    public function getCoach(){
        $coachs=User::all();
        return view('admin.coach')->with([
            'coachs'=>$coachs
        ]);
    }
    // save client
    public function save_client(Request $request){
        $client = new User;
        $client->name =$request->input("name");
        $client->email=$request->input("email");
        $client->salle_id=$request->input('salle');
        $client->role_id = 0;
        $client->password = '12345678';
        $client->save();
        return redirect('admin/clients');
    }
    public function save_salle(Request $request){
        $salle = new Salle;
        $salle->name =$request->input("name");
        $salle->adresse=$request->input("adresse");
        $salle->save();
        return redirect('admin/salles');
    }
    public function save_Abonnement(Request $request){
        $abonnement = new Abonnement;
        $abonnement->duree =$request->input("duree");
        $abonnement->prix=$request->input("prix");
        $abonnement->salle_id=$request->input("salle");
        $abonnement->save();
        return redirect('admin/abonnements');
    }
    // save coach
    public function save_coach(Request $request){
        $coach = new User;
        $coach->name =$request->input("name");
        $coach->email=$request->input("email");
        $coach->salle_id=$request->input('salle');
        $coach->role_id = 1;
        $coach->password = '12345678';
        $coach->save();
        return redirect('admin/coachs');
    }
    public function total(){
        $users = User::all();
        $clients = $users->where('role_id',0);
        $coachs = $users->where("role_id",1)->count();
        $active = $clients->where('');
        return view('admin.coach')->with([
        ]);
    }
    public function getSalle(){
        $salles=Salle::all();
        return view('admin.salles')->with([
            'salles'=>$salles,
        ]);
    }
    public function getSeance(){
        $seances=Seance::all();
        return view('admin.seances')->with([
            'seances'=>$seances,
        ]);
    }
    public function getAbonnement(){
        $abonnements=Abonnement::all();
        return view('admin.abon')->with([
            'abonnements'=>$abonnements,
        ]);
    }
    public function edit_client(Request $request){
        $client = new User;
        $client->name =$request->input("name");
        $client->email=$request->input("email");
        $client->salle_id=$request->input('salle');
        $client->role_id = 0;
        $client->password = '12345678';
        $client->save();
        return redirect('admin/clients');
    }
/*     public function edit(){
        $client = User::where('id',$id)->first();
        return view('admin-clientedit')->with([
            'client'=>$client
        ]);
    } */
}
