<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salle;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = User::where('role_id',0)->get();
        return view('clients.index')->with([
            'clients' =>$clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salles = Salle::all()->pluck('name','id')->prepend(trans('Please Select'),'');
        return view('clients.create')->with([
            'salles' => $salles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'salle_id' => 'required|numeric',
            'duree_abonement_in_months' => 'required',
            'email' => 'required|email',
            'role_id' => 'required|numeric',
        ]);
        $input = $request->all();
        User::create($input);
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = User::findOrFail($id);
        $today  = Carbon::now();
        return view('clients.show', compact('client','client'))->with([
            'today' => $today,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salles = Salle::all()->pluck('name','id')->prepend(trans('Please Select'),'');
        $client = User::where('id',$id)->first();
        return view("clients.edit")->with([
            'client'=>$client,
            'salles' =>$salles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $client = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'salle_id' => 'required|numeric',
            'duree_abonement_in_months' => 'required',
            'email' => 'required|email',
            'role_id' => 'required|numeric',
        ]);
        $input = $request->all();
        $client->fill($input)->save();
        return redirect()->route("clients.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = User::findOrFail($id);
        $client->delete();

        return redirect()->route("clients.index");
    }
}
