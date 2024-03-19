<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Session;




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
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function dashboard()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('dashboard');
    }
    public function appoint()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('appointment');
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
                    $patient->email =$request->email;
                    $patient->phone = $request->phone;
                    $patient->password = $request->password;
                    if ($patient->save()) 
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

    $user = Patient::where('email', '=', $email)->first();

    if ($user) {
        $user2 = Patient::where('password', '=', $pass)->first();
        if($user2){
        $request->session()->put('loginId', $user->id);
        return redirect('dashboard');
        }
        else{
            return redirect()->back()->with('fail', 'Invalid password for email')->withInput();
        }
    } else {
        return redirect()->back()->with('fail', 'Invalid email')->withInput();
    }
    }
}
