<?php

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class ClientController extends Controller
{
    // ... other methods ...

    public function store(Request $request)
    {
        try {
            // Your code to insert or update the record
            Client::create($request->all());

            // Redirect or return a success response
            return redirect()->route('client.index')->with('success', 'Record created successfully');
        } catch (QueryException $e) {
            // Check if the exception is due to a unique constraint violation
            if ($e->getCode() == '23000') {
                // Redirect or return with an error message
                return redirect()->back()->withInput()->with('error', 'Duplicate entry. This combination already exists.');
            }

            // Handle other exceptions or rethrow the exception if needed
            throw $e;
        }
    }
    // ... other methods ...
}


