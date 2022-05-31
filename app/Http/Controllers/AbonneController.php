<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnes;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnes = Abonnes::all();
        return view('Abonne.index', compact('abonnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Abonne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'date_n' => 'required',
            'date_db' => 'required',
            'telephone' => 'required',
            'email' => 'required',
        ]);
        $abonne = new Abonnes();
        $abonne->nom = $request->input('nom');
        $abonne->date_n = $request->input('date_n');
        $abonne->date_db = $request->input('date_db');
        $abonne->telephone = $request->input('telephone');
        $abonne->email = $request->input('email');
        $abonne->save();
       return redirect()->route('Abonne.index')
                        ->with('success','Abonne created successfully.');
        
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
}
