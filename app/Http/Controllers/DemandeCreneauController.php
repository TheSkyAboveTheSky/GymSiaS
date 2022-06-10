<?php

namespace App\Http\Controllers;

use App\Models\DemandeCreneau;
use Illuminate\Http\Request;
use App\Models\Seance;
use Illuminate\Support\Facades\Auth;

class DemandeCreneauController extends Controller
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
    public function store(Request $request)
    {
        //
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
        $demande = DemandeCreneau::where('id',$id)->first();
        $demande->Etatdemande=2;
        $demande->seance->start_time = $demande->start_time;
        $seance = Seance::where('id',$demande->seance_id)->first();
        $seance->weekday = $demande->weekday;
        $seance->start_time=$demande->start_time;
        $seance ->end_time = $demande->end_date;
        $seance ->save();
        $demande->save();
        return redirect()->route('admin-demandes_creneau');
    }
    public function refuser(Request $request ,$id){
        $demande = DemandeCreneau::where('id',$id)->first();
        $demande->Etatdemande=0;
        $demande->save();
        return redirect()->route('admin-demandes_creneau');
    }
    public function demande(Request $request)
    {
        $seance_id = $request->seance_id;
        $salle_id = $request->salle_id;
        return view('coach/demande')->with([
            'seances_id' => $seance_id,
            'salle_id'   => $salle_id,
        ]);
    }
    public function demandec(Request $request)
    {
        $demande = new DemandeCreneau();
        $input = $request->all();
        $demande->fill($input);
        $demande->save();
        return redirect()->route('coach-seances');
    }
}
