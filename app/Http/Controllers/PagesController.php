<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class PagesController extends Controller
{
    //Pour Test NavBar
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
    // Abonnement
    public function offres(){
        return view('admin.abon');
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
        return view('livewire.client')->with([
            'clients'=>$clients,
            'today'=>$today
        ]);
    }
    // coach [pour coach]
    public function getCoach(){
        $coachs=User::all();
        return view('livewire.coach')->with([
            'coachs'=>$coachs
        ]);
    }
    // save client
    public function save_client(Request $request){
        $client = new User;
        $client->name =$request->input("name");
        $client->email=$request->input("email");
        $client->role_id = 0;
        $client->password = '12345678';
        $client->save();
        return redirect('admin/clients');
    }
    // save coach
    public function save_coach(Request $request){
        $coach = new User;
        $coach->name =$request->input("name");
        $coach->email=$request->input("email");
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
        return view('livewire.coach')->with([
        ]);
    }

}
