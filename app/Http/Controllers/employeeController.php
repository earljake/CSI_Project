<?php

namespace App\Http\Controllers;



use App\Models\User;
use App\Models\Client;
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

    public function showRegistrationForm()
    {
        return view('signup'); // View name should match your actual view file
    }


    public function clientreg(Request $request) {
        $fields = $request -> validate([
            'category' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'company_name' => 'required',
            'address'=> 'required',
            'email'=> 'required',
            'phone_number'=> 'required',

            
        ]);
    
        $client = Client::create($fields);
   
        return 'goods';  
    }
    
}


