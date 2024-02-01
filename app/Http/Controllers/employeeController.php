<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Employee;
use App\Models\MarketingRecord;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Database\QueryException;

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
            return redirect ('/home');
        } else {
            // Log the failed login attempt
            \Log::info('Failed login attempt: ' . $fields['loginusername']);
            return back()->withErrors(['login' => 'Invalid credentials. Please try again.']);
        }
       
    }

    public function register(Request $request)
    {
        $fields = $request->validate([
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


    public function marketing(Request $request)
    {
        $fields = $request->validate([
            'custom_id'=> 'sometimes',
            'customer_name' => 'required',
            'sales_person' => 'required',
            'project_category' => 'required',
            'project_description' => 'required',
            'reference' => 'required',
            'lead_date' => 'required',
            'engage_date' => 'required',
        ]);
        
    $marketingRecord = new MarketingRecord();
    $marketingRecord->custom_id = $fields['custom_id']; // It's optional, may be null
    $marketingRecord->customer_name = $fields['customer_name'];
    $marketingRecord->sales_person = $fields['sales_person'];
    $marketingRecord->project_category = $fields['project_category'];
    $marketingRecord->project_description = $fields['project_description'];
    $marketingRecord->reference = $fields['reference'];
    $marketingRecord->lead_date = $fields['lead_date'];
    $marketingRecord->engage_date = $fields['engage_date'];

    // Save the record to the database
    $marketingRecord->save();


        return redirect('/marketing');
    }


    public function showRegistrationForm()
    {
        return view('signup');
    }

    public function showRegForm()
    {
        return view('clientreg');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function showClientRegistrationForm()
    {
        return view('clientregistration');
    }

    public function showLanding()
    {
        return view('landing');
    }

    public function showMarketing()
    {
        $uniqueFullNames = Client::distinct()
            ->selectRaw("CONCAT(firstname, ' ', lastname) as full_name")
            ->pluck('full_name');

        return view('marketing', compact('uniqueFullNames'));
    }

    public function showHome()
    {
        return view('home');
    }

    public function clientregistration(Request $request)
    {
        try {
            // Validate the request data...
            $fields = $request->validate([
                'category' => 'required',
                'firstname' => [
                    'required',
                    Rule::unique('client')
                        ->where(function ($query) use ($request) {
                            return $query->where('category', $request->input('category'))
                                ->where('lastname', $request->input('lastname'));
                        }),
                ],
                'lastname' => 'required',
                'company_name' => 'required',
                'address' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
            ], [
                'firstname.unique' => 'Duplicate entry. This combination already exists.',
            ]);

            $category = $fields['category'];
            $uniqueFullNames = Client::where('category', $fields['category'])
                ->distinct()
                ->selectRaw("CONCAT(firstname, ' ', lastname) as full_name")
                ->pluck('full_name');

            // Set the starting custom_id based on the category
            $startingCustomId = 1;

            // Define different starting values for each category
            switch ($category) {
                case 1: // Residential
                    $startingCustomId = 10001;
                    break;
                case 2: // Commercial
                    $startingCustomId = 20001;
                    break;
                case 3: // Government
                    $startingCustomId = 30001;
                    break;
                // Add more cases for other categories as needed
            }

            // Get the last custom_id for the selected category
            $lastCustomId = Client::where('category', $category)->max('custom_id') ?? $startingCustomId - 1;

            // Increment the last custom_id based on the category
            $customId = $lastCustomId + 1;

            // Create the new client record
            $client = new Client();
            $client->category = $category;
            $client->custom_id = $customId;
            $client->firstname = $fields['firstname'];
            $client->lastname = $fields['lastname'];
            $client->company_name = $fields['company_name'];
            $client->address = $fields['address'];
            $client->email = $fields['email'];
            $client->phone_number = $fields['phone_number'];

            $client->save();

            return view('clientregistration')->with('errorMessage', 'Client registered successfully.');
        } catch (QueryException $e) {
            if ($e->getCode() == '23000') {
                // Set an error message to be displayed in the view
                $errorMessage = 'Duplicate entry. This combination already exists.';
            } else {
                // Handle other exceptions or rethrow the exception if needed
                throw $e;
            }

            // Pass the error message to the view
            return view('clientregistration', compact('errorMessage'));
        }
    }
    public function getCustomIdByName($name)
    {
        $record = Client::where('firstname', $name)->first();
    
        if ($record) {
            return response()->json(['custom_id' => $record->custom_id]);
        } else {
            return response()->json(['custom_id' => null]);
        }
    }

public function showForm()
{
    $names = Client::pluck('firstname'); // Replace 'customername' with your actual column name

    return view('marketing', compact('names'));
}

public function processForm(Request $request)
{
    $name = $request->input('customer_name');
    $customId = $this->getCustomIdByName($name);

    // Process the form using $customId

    return view('marketing'); // Redirect to a success view or do further processing
}




}


