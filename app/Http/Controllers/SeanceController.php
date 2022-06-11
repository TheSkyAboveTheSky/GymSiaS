<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\User;
use App\Models\Salle;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seances = Seance::all();
        return view('seances.index')->with([
            'seances' =>$seances,

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
        $coachs = User::where('role_id',1)->pluck('name','id')->prepend(trans('Please Select'),'');
        return view('seances.create')->with([
            'salles' => $salles,
            'coachs' => $coachs,
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
            'weekday' => 'required|numeric',
            'activite' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'coach_id' => 'required|numeric',
            'salle_id' => 'required|numeric',
        ]);
        $input = $request->all();
        Seance::create($input);
        return redirect()->route('seances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seance = Seance::findOrFail($id);
        return view('seances.show', compact('seance','seance'));

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
        $coachs = User::where('role_id',1)->pluck('name','id')->prepend(trans('Please Select'),'');
        $seance = Seance::where('id',$id)->first();
        return view("seances.edit")->with([
            'seance'=>$seance,
            'salles'=>$salles,
            'coachs' =>$coachs,
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
        $seance = Seance::findOrFail($id);
        $this->validate($request, [
            'weekday' => 'required|numeric',
            'activite' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'coach_id' => 'required|numeric',
            'salle_id' => 'required|numeric',
        ]);
        $input = $request->all();
        $seance->fill($input)->save();
        return redirect()->route("seances.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seance = Seance::findOrFail($id);
        $seance->delete();

        return redirect()->route("seances.index");
    }
    public function search(){
        $search_text = $_GET['queryseance'];
        $seances = Seance::where('id','LIKE','%'.$search_text.'%')
        ->get();
        return view('seances.search',compact('seances'));
    }
}
