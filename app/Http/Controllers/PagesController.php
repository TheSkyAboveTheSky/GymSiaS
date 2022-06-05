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
    public function clients(){
        $clients=User::all();
        return view('clients')->with([
            'clients'=>$clients
        ]);
    }
    public function getClient(){
        $clients=User::all();
        return view('livewire.client')->with([
            'clients'=>$clients
        ]);
    }
    public function getCoach(){
        $coachs=User::all();
        return view('livewire.coach')->with([
            'coachs'=>$coachs
        ]);
    }
    public function save(Request $request){
        $client = new User;
        $client->name =$request->input("name");
        $client->email=$request->input("email");
        $client->role_id = 0;
        $client->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $client->save();
        return redirect('/');
    }
    
}
