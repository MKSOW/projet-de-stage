<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vature;
class vatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vatures = voiture::all();
        return view('vatures.index',['vatures' =>$vatures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vatures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'matricule'=>'required',
            'marque'=>'required',
            'couleur'=>'required',
            'dateMiseEnCirculation'=>'required',
        ]);
        vature::create($request->post());
        return redirect()->route('vatures.index')->with('status','la voiture a été ajouter avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('vatures.edit',['vature' =>$vature]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('vatures.edit',['vature'=>$vature]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate ([
            'matricule'=>'required',
            'marque'=>'required',
            'couleur'=>'required',
            'dateMiseEnCirculation'=>'required',
        ]);
        vature::create($request->post());
        return redirect()->route('vatures.index')->with('status','la voiture a été ajouter avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
