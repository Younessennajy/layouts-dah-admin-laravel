<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateursmodel;

class utilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $searchTerm = $request->input('query');
        $utilisateurs = utilisateursmodel::all();
        // ->when($searchTerm,function ($query ,$searchTerm){
        //     return $query->where('nom', 'like', '%'.$searchTerm.'%');
        // });
        return view('utilisateur.index',compact("utilisateurs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('utilisateur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata= $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'role'=>'required',
            'etat'=>'required',
        ]);
        utilisateursmodel::create($validatedata);
        return redirect('utilisateurs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $utilisateur=utilisateursmodel::find($id);
        return view('utilisateur.update',compact('utilisateur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $utilisateur=utilisateursmodel::find($id);

        $validated= $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'role'=>'required',
            'etat'=>'required',
        ]);
        $utilisateur->update($validated);
        return redirect('utilisateurs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        utilisateursmodel::destroy($id);
        return redirect('utilisateurs');
    }
}
