<?php

namespace App\Http\Controllers;

use App\Models\DemandeAcces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seance;

class DemandeAccesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function demande(Request $request)
    {
        $DemandeAcces = new DemandeAcces;
        $DemandeAcces->user_id = Auth::user()->id;
        $DemandeAcces->seance_id = $request->seance_id;
        $DemandeAcces->save();
        return redirect()->route('client-seances');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function accepter(Request $request, $id){
        $demande = DemandeAcces::where('id',$id)->first();
        $demande->Etatdemande=2;
        $demande->save();
        $seance = Seance::where('id',$demande->seance_id);
        return redirect()->route('admin-demandes_acces');
    }
    public function refuser(Request $request ,$id){
        $demande = DemandeAcces::where('id',$id)->first();
        $demande->Etatdemande=0;
        $demande->save();
        return redirect()->route('admin-demandes_acces');
    }
}
