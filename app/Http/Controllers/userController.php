<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function viewLoginPage()
    {
        return view('login');
    }

    public function viewForgetPasswordPage()
    {

        return view('forgetpassword');
    }

    // public function viewProfilePage($customerID)
    // {
    //     // Retrieve customer data based on the customerID
    //     $customer = Customer::find($customerID);

    //     // Check if the customer exists
    //     if ($customer) {
    //         // Pass the customer data and customerID to the view
    //         return view('profile', ['customer' => $customer, 'customerID' => $customerID]);
    //     } else {
    //         // Handle the case where the customer is not found
    //         return view('');
    //     }
    // }



    public function createUser(Request $request)
    {
        // Validate the user input
        // $request->validate([
        //     'username' => 'required|string|max:50',
        //     'password' => 'required|string|max:50',
        //     'fullName' => 'required|string|max:100',
        //     'email' => 'required|email|max:100',
        //     'phone' => 'required|string|max:20',
        //     'birthday' => 'required|date',
        //     'address' => 'required|string|max:255',
        // ]);

        // Retrieve the user input
        $fullName = $request->input('fullname');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $major = $request->input('major');
        $year = $request->input('year');
       


        // Call the stored procedure
        

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->fullName = $fullName;
        $user->email = $email;
        $user->major = $major;
        $user->year = $year;
        $user->save();
        

      

        // You can return the message to the view or handle it as needed
        return redirect()->route('login');
    }


    public function login(Request $request)
    {
        // Validate the user input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Attempt to find the user by username and plain text password
        $user = User::where('username', $username)->where('password', $password)->first();
    
        if ($user) {
            // Authentication passed, store the user ID in the session
            session(['userID' => $user->userID]);
    
            // Redirect to the homepage with the cookie
            return redirect()->route('homepage', ['userID' => $user->userID]);
        } else {
            // Authentication failed
            return redirect()->route('login')->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    
    public function showUserDetails($userID)
    {
        // Retrieve the user based on userID
        $user = User::find($userID);

        // Check if the user exists
        if ($user) {
            // Return the view with the user's full name
            return view('homepage', ['username' => $user->username,'fullName' => $user->fullname]);
        } else {
            // Handle the case where the user is not found
            return redirect()->route('homepage')->with('error', 'User not found');
        }
    }

    public function updatePasswordByEmail(Request $request)
    {
        $email = $request->input('email');
        $newPassword = $request->input('password');

        DB::select("CALL updatePasswordByEmail(?, ?)", [$email, $newPassword]);

        return view('');
    }

    public function logout()
    {
        Session::forget('customerID');

        return redirect()->route('login');
    }
}