<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    function show(){

        $produits = \App\Models\Produit::all();

        return view('produits', [
            'title' => 'Listes des Produits',
            'produits' => $produits]);
    }

    function showid($id){

        $produit = \App\Models\Produit::findOrFail($id);

        return view('produit', [
            'title' => 'List Client',
            'produit' => $produit,]);
    }

}
