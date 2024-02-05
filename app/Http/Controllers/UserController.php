<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showFormC()
{
    $companyNames = Client::pluck('company_name');
    return view('marketing', compact('companyNames'));
}


}
