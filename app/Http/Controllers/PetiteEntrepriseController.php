<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetiteEntreprise;
class PetiteEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $PetiteEntreprises = PetiteEntreprise::all();
        return view('PetiteEntreprise.index', ['PetiteEntreprises'=>$PetiteEntreprises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PetiteEntreprise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'listeProjets' => 'required|min:3|max:255',


            
        ]);
        PetiteEntreprise::create($request->post());
        return redirect()->route('PetiteEntreprise.index')->with('status','l\'entreprise a été ajouter avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(PetiteEntreprise $PetiteEntreprise)
    {
        return view('PetiteEntreprise.show',['PetiteEntreprise'=>$PetiteEntreprise]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PetiteEntreprise $PetiteEntreprise)
    {
        return view('PetiteEntreprise.edit',['PetiteEntreprise'=>$PetiteEntreprise]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PetiteEntreprise $PetiteEntreprise)
    {
        $request->validate ([
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'listeProjets' => 'required|min:3|max:255',


            
        ]);
        $PetiteEntreprise->update($request->post());
            return redirect()->route('PetiteEntreprise.index')->with('status','l\'entreprise a été ajouter avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetiteEntreprise $PetiteEntreprise)
    {
        $PetiteEntreprise->delete();
        return redirect()->route('PetiteEntreprise.index') ;
    }
}
