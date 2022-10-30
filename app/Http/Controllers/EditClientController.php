<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class EditClientController extends Controller
{
    //
    function show(){
        return view('createclient', [
            'title' => 'Create Client',
            'name' => 'Test User',
            'email' => '']);
    }


    function showid($id){

        $client = Client::find($id);

        return view('createclient', [
            'title' => 'Create Client',
            'name' => 'Test User',
            'email' => '']);
    }
}
