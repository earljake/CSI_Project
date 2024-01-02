<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ShowController extends Controller
{
    public function show() {
        $data = Client::all();
        ($data); // Dump and die to inspect the result
        return view('table', compact('data'));
    }
    
}
