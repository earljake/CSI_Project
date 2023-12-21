<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ShowController extends Controller
{
    public function show (){

        $data=Client::all();
    return view ('table',compact('data'));
    }
}
