<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;




class PatientController extends Controller
{

    //navigations
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }







    //Function
    //register
    public function addpatient(Request $request)
    {

        $pass = $request->password; 
        $conpass = $request->conpassword;
        $email = $request->email;

        if($pass == $conpass)
        {
            // Check if any other patient has the same email
            $existingPatient = Patient::where('email', $email)->first();

            if ($existingPatient) {
                return back()->with('fail', "Email already in use");
            }
            else{
                    $patient = new Patient();
                    $patient->name = $request->name;
                    $patient->username = $request->username;
                    $patient->email =$request->email;
                    $patient->phone = $request->phone;
                    $patient->password = $request->password;
                    if ($service->save()) 
                    {
                        
                        return redirect('/')->with('success', "You Have Been Registered");

                    }
            }
            

        }
        else
        {
            return back()->with('fail', "Password Don't match");
        }

        


    }
    //login
    public function userloggin(Request $request)
    {
        $email = $request->email;
        $pass = $request->password; 
        $email = $request->email;
    $pass = $request->password;

    $patient = Patient::where('email', $email)
                      ->where('password', $pass)
                      ->first();

    if ($patient) {
        echo"pass";
    } else {
        echo"pass";
    }
    }
}
