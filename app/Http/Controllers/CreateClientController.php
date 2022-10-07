<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateClientController extends Controller
{



    //
    function show(){
        return view('createclient', [
            'title' => 'Create Client',
            'name' => 'Test User',
            'email' => '']);
    }
}
