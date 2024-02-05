<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $clients = client::all();
        return view('clients.index',['clients' =>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'adresse'=>'required',
            'ville'=>'required',
            'numero_tel'=>'required',
            ]);
            client::create($request->post());
            return redirect()->route('clients.index')->with('status','le client a été ajouter avec succés');

    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        return view('clients.show',['client' =>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        return view('clients.edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'adresse'=>'required',
            'ville'=>'required',
            'numero_tel'=>'required',
            ]);
            
            $client->update($request->post());
            return redirect()->route('clients.index')->with('status','le client a été ajouter avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        $client->delete();
        return redirect()->route('clients.index') ;
    }
}
