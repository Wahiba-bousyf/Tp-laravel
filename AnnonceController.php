<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Requests\AnnonceRequest;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces=Annonce::latest()->get();
        return view('annonces.index')->with([
            'annonces'=>$annonces
        ]);
    }
    public function create()
    {
        return view('annonces.create');
    }
    public function store(AnnonceRequest $request)
    {
        Annonce::create([
            'titre'=>$request->titre,
            'des'=>$request->des,
            'etat'=>$request->etat,
            'type'=>$request->type,
            'prix'=>$request->prix,
            'ville'=>$request->ville,
            'superficie'=>$request->superficie,
        ]);
        return redirect()->route('home')->with([
            'success'=>'client est bien ajouter'
        ]);
    }
    public function show($id)
    {
        $annonce=Annonce::find($id);
        return view('annonces.show')->with([
            'annonce'=>$annonce
        ]);
    }
    public function edit($id)
    {
        $annonce=Annonce::where('id',$id)->first();
        return view('annonces.edit')->with([
            'annonce'=>$annonce
        ]);
    }
    public function update(AnnonceRequest $request,$id)
    {
        $annonce=Annonce::where('id',$id)->first();
        $annonce->update([
            'titre'=>$request->titre,
            'des'=>$request->des,
            'type'=>$request->type,
            'ville'=>$request->ville,
            'superficie'=>$request->superficie,
            'etat'=>$request->etat,
            'prix'=>$request->prix,
        ]);
        return redirect()->route('home')->with([
            'success'=>'larticle est bien modifier'
        ]);
    }
    public function delete($id)
    {
        $annonce=Annonce::where('id',$id)->first();
        $annonce->delete();
        return redirect()->route('home')->with([
            'success'=>'larticle est bien suprimer'
        ]);
    }
}
