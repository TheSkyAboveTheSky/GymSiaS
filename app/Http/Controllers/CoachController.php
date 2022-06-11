<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salle;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coachs = User::where('role_id',1)->get();
        return view('coachs.index')->with([
            'coachs' =>$coachs
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
        return view('coachs.create')->with([
            'salles' => $salles
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
            'email' => 'required|email',
            'role_id' => 'required|numeric',
        ]);
        $input = $request->all();
        User::create($input);
        return redirect()->route('coachs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coach = User::findOrFail($id);
        return view('coachs.show', compact('coach','coach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach = User::where('id',$id)->first();
        $salles = Salle::all()->pluck('name','id')->prepend(trans('Please Select'),'');
        return view("coachs.edit")->with([
            'coach'=>$coach,
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
        $coach = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'salle_id' => 'required|numeric',
            'email' => 'required|email',
            'role_id' => 'required|numeric',
        ]);
        $input = $request->all();
        $coach->fill($input)->save();
        return redirect()->route("coachs.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach = User::findOrFail($id);
        $coach->delete();

        return redirect()->route("coachs.index");
    }
    public function search(){
        $search_text = $_GET['querycoach'];
        $coachs = User::where('name','LIKE','%'.$search_text.'%')
        ->where('role_id',1)
        ->get();
        return view('coachs.search',compact('coachs'));
    }
}
