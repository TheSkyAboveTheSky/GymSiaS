<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $salles = Salle::all();
        return view('salles.index')->with([
            'salles' =>$salles
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
        return view('salles.create');
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
            'adresse' => 'required',
        ]);
        $input = $request->all();
        Salle::create($input);
        return redirect()->route('salles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salle = Salle::findOrFail($id);
        return view('salles.show', compact('salle','salle'));

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
        $salle = Salle::where('id',$id)->first();
        return view("salles.edit")->with([
            'salle'=>$salle
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
        $salle = Salle::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'adresse' => 'required',
        ]);
        $input = $request->all();
        $salle->fill($input)->save();
        return redirect()->route("salles.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salle = Salle::findOrFail($id);
        $salle->delete();

        return redirect()->route("salles.index");
    }
    public function search(){
        $search_text = $_GET['querysalle'];
        $salles = Salle::where('name','LIKE','%'.$search_text.'%')
        ->get();
        return view('salles.search',compact('salles'));
    }
}
