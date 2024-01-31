<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    public  function index(){
             return view('produit.index');
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
}
