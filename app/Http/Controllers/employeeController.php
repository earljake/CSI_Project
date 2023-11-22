<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{

    public function login(Request $request)
    {
        $fields = $request->validate([
            "loginusername"=> "required",
            "loginpassword"=> "required"
        ]);

        if (auth()->attempt(['username' => $fields['loginusername'], 'password' => $fields['loginpassword']])) {
            // Authentication successful logic
            return 'goods na';
        } 
        
        else {
            // Log the failed login attempt
            \Log::info('Failed login attempt: ' . $fields['loginusername']);
            return back()->withErrors(['login' => 'Invalid credentials. Please try again.']);
        }
       
    }
    public function register(Request $request) {
        $fields = $request -> validate([
            'designation' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'password'=> ['required','min:8'],
            
        ]);

        $fields['password'] = bcrypt($fields['password']);
        $emp = Employee::create($fields);
        auth()->login($emp);

        return redirect('/login');
    }
}
