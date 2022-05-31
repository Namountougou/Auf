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
        $i=1;
        return view('Abonne.index', compact('abonnes','i'));
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
                        ->with('success','Abonné ajouté avec succès');
        
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
        $abonne = Abonnes::findOrFail($id);
        return view('Abonne.edit', compact('abonne'));
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
        $request->validate(
            ['nom'=>'required',
                'date_n'=>'required',
                'date_db'=>'required',
                'telephone'=>'required',
                'email'=>'required',

            ]
        );
        $abonne = Abonnes::findOrFail($id);
        $abonne->nom = $request->input('nom');
        $abonne->date_n = $request->input('date_n');
        $abonne->date_db = $request->input('date_db');
        $abonne->telephone = $request->input('telephone');
        $abonne->email = $request->input('email');
        $abonne->save();
        return redirect()->route('Abonne.index')
        ->with('success','Abonné modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonne = Abonnes::findOrFail($id);
        $abonne->delete();
        return redirect()->route('Abonne.index')
                        ->with('success','Abonné supprimé avec succès');


    }
}
