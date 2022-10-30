<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    function show(){

        $clients = \App\Models\Client::all();

        return view('clients', [
            'title' => 'Listes des Client',
            'clients' => $clients]);
    }

    function showid($id){

        $client = \App\Models\Client::findOrFail($id); // throw error 404 to client if fail
        $factures = \App\Models\Facture::where('factureClient', $id)->get();

        return view('client', [
            'title' => 'Information du client',
            'client' => $client,
            'factures' => $factures]);
    }
}
