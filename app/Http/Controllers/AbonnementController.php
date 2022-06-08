<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abonnements = Abonnement::all();
        return view('abonnements.index')->with([
            'abonnements' =>$abonnements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('abonnements.create');
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
            'duree' => 'required',
            'prix' => 'required|numeric',
            'salle_id' => 'required|numeric',
        ]);
        $input = $request->all();
        Abonnement::create($input);
        return redirect()->route('abonnements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        return view('abonnements.show', compact('abonnement','abonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $abonnement = Abonnement::where('id',$id)->first();
        return view("abonnements.edit")->with([
            'abonnement'=>$abonnement
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
        $abonnement = Abonnement::findOrFail($id);
        $this->validate($request, [
            'duree' => 'required',
            'prix' => 'required|numeric',
            'salle_id' => 'required|numeric',
        ]);
        $input = $request->all();
        $abonnement->fill($input)->save();
        return redirect()->route("abonnements.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        $abonnement->delete();

        return redirect()->route("abonnements.index");
    }
}
