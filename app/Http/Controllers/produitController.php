<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    public  function index(){
        $produit = produit::all();
        return  view('produit.index',['produit' => $produit]);
    }
    public  function create(){
        return view( 'produit.create');

    }
    public function store(Request $request){

              $data = $request->validate([
                  'titre' => 'required ',
                  'description' => 'required',
                  'prix' => 'required',
                  'telephone' => 'required',
                  'email' => 'required | email'
              ]);

              $newProduit = produit::create($data);
              return redirect(route('produit.index'));

    }
    public function edit(produit $produit){
       // dd($produit);
        return view('produit.edit', ['produit' => $produit]);

    }
    public  function  update(produit $produit ,Request $request){
        $data = $request->validate([
            'titre' => 'required ',
            'description' => 'required',
            'prix' => 'required',
            'telephone' => 'required',
            'email' => 'required | email'
        ]);

        $produit->update($data);
        return redirect(route('produit.index'));

    }
    public  function destroy(produit $produit){
          $produit->delete();
        return redirect(route('produit.index'));
    }
}
