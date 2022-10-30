<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Facture;

class FactureController extends Controller
{
    //
    function show(){
        // Récupère toutes les factures
        $factures = Facture::all();

        return view('factures', [
            'title' => 'Listes des Factures',
            'factures' => $factures]);
    }

    function showid($id){
        // Récupérer la facture avec l'ID
        $facture = Facture::findOrFail($id);

        if($facture == null){
            $facture = [["id" => 0, "factureNom" => "Aucune facture trouvé"]];
        }

        return view('facture', [
            'title' => 'Facture n°' . $id,
            'facture' => $facture]);

    }
}
