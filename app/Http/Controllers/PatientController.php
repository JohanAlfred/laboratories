<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointments;
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
    public function payments()
    {
        // $data = array();
        // if (Session::has ('loginid')) {
        //     $data = User::where('id', '=', Session::get('loginid'))-›first();
        // }
        return view('payment');
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

        if ($user){
            $user2 = Patient::where('password', '=', $pass)->first();
            if($user2){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return redirect()->back()->with('fail', 'Invalid password for email')->withInput();
            }
        } 
        else {
            return redirect()->back()->with('fail', 'Invalid email')->withInput();
        }
    }
    public function createappointment(Request $request)
    {
        $selectedDate = $request->input('date');
        $selectedTime = $request->input('time');
        $existingAppointment = Appointments::where('date', $selectedDate)
            ->where('time', $selectedTime)
            ->first();
            if($existingAppointment){
                return redirect()->back()->with('fail', 'time slot not available')->withInput();
            }
            else{
                $appointment = new Appointments();
                $appointment->testtid = $request->input('test');
                $appointment->patientid = $request->input('patient_id');
                $appointment->date = $request->input('date');
                $appointment->time = $request->input('time');
                $appointment->status = 'pending'; // You may set the status as 'pending' initially

                // Save the appointment to the database
                if($appointment->save()){
                    
                    // $id = $appointment->id;
                    return view('payments');
                }
                else{
                    return back()->with('fail', "Password Don't match");
                }
            }
        
    }
}
