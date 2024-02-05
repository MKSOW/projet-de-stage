<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voiture;
class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = voiture::all();
        return view('voitures.index',['voitures' =>$voitures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required|integer:4',
            'kilometrage'=>'required',
            'prix'=>'required',
            ]);
            voiture::create($request->post());
            return redirect()->route('voitures.index')->with('status','la voiture a été ajouter avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(voiture $voiture)
    {
        return view('voitures.edit',['voiture' =>$voiture]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(voiture $voiture)
    {
        return view('voitures.edit',['voiture'=>$voiture]);
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, voiture $voiture)
    {
        
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required|integer:4',
            'kilometrage'=>'required',
            'prix'=>'required',
            ]);
            $voiture->fill($request->post())->save();
            return redirect()->route('voitures.index')->with('status','la voiture a été ajouter avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index') ;
    }
}
