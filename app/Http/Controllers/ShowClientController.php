<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowClientController extends Controller
{
    //
    function show(){
        return view('listclient', [
            'title' => 'List Client',
            'name' => 'Test User',
            'email' => '']);
    }
}
