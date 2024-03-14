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







    //Functions
    public function addpatient(Request $request)
    {

        $pass = $request->password; 
        $conpass = $request->conpassword;

        if($pass == $conpass)
        {
            // $patient = new Patient();
            // $patient->name = $request->name;
            // $patient->username = $request->username;
            // $patient->email =$request->email;
            // $patient->phone = $request->phone;
            // $patient->password = $request->password;
            // if ($service->save()) 
            // {
                
                return redirect('/')->with('success', "Password Don't match");

            // }

        }
        else
        {
            return back()->with('fail', "Password Don't match");
        }

        


    }
}
