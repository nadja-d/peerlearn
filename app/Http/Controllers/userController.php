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
        $username = $request->input('username');
        $password = $request->input('password');

        $userCollection = DB::select('CALL authenticateUser(?, ?)', [$username, $password]);


        // Check if the result is not empty and retrieve the first element
        if (!empty($userCollection)) {
            $customer = $userCollection[0];

            // Check if the result is not equal to 'Authentication Failed'
            if ($customer->result !== 'Authentication Failed') {
                $customerID = $customer->result;

                // Store the userID in the session
                session(['customerID' => $customerID]);

                $cookie = cookie('category', 'cookie', 0);

                // Redirect to the profile page
                return redirect()->route('homepage', ['category' => 'cookie', 'customerID' => $customerID])->withCookie($cookie);
            } else {
                return redirect()->route('login');
            }
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