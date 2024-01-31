<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produitController extends Controller
{
    public  function index(){
return view('produit/ajouterProduit');
    }
}
