<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\Appointments;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Storage;



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
        return view('test');
    }
    public function download(Request $request, $file)
    {
        $cv_uploads=DB::table('lab_results')->where('results', $file)->first();
        $pathToFile =public_path("testfiles/{$cv_uploads->result}");
        return \Response::download($pathToFile);
    }
    public function showtest()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('showtest');
    }
    public function veiwress()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('veiwress');
    }
    public function appointtest()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('appointtest');
    }
    public function contact()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('contact');
    }
    public function profile()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('profile');
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

        // Check if an appointment already exists for the selected date and time
        $existingAppointment = Appointments::where('date', $selectedDate)
            ->where('time', $selectedTime)
            ->first();

        if($existingAppointment){
            return redirect()->back()->with('fail', 'Time slot not available')->withInput();
        }

        // Create a new appointment
        $appointment = new Appointments();
        $appointment->testtid = $request->input('test');
        $appointment->patientid = $request->input('patient_id');
        $appointment->date = $selectedDate; // Use the selectedDate variable
        $appointment->time = $selectedTime; // Use the selectedTime variable
        $appointment->status = 'pending'; // Set the status as 'pending'

        try {
            // Save the appointment to the database
            $appointment->save();

            // Redirect to the payment view
            $testid = $appointment->id;
            $id = $appointment->id;
            Session::put('appid', $id);
            return view('test', compact('id'));
        } catch (\Exception $e) {
            // Log or display the error
            dd($e->getMessage());
        }
        
    }
    public function confirmapp(Request $request)
    {
        $id = $request->appointment_no;
        $payment = new Payment();
        $payment->appointment_no = $request->appointment_no;
        $payment->patient_id =$request->patient_id;
        $payment->card_no = $request->card_no;
        $payment->price = $request->price;
        $payment->expdate = $request->expdate;
        $payment->cvv = $request->cvv;
        if($payment->save())
        {
            $appointment = Appointments::find($id);
            $appointment->status = 'paid'; 

            if($appointment->save()){
                return redirect('appoint')->with('success', "Appointment Scheduled");
            }
            else{
                return redirect('appoint')->with('fail', 'Appointment status not updated');
            }
                
        }
        else
        {
            return redirect('appoint')->with('fail', 'Appointment status failed');
        }
        
    }
    public function sendform(Request $request)
    {
        $data = request(['name', 'email', 'subject', 'message']);
        Mail::to(users: 'johantab2nd@gmail.com')
        ->send(new ContactMe($data));

        return redirect('contact')->with('success', 'Message Sent Successfully');
    }
    public function updateprof(Request $request)
    {
        $pass = $request->pass; 
        $conpass = $request->newpass;
        $email = $request->email;
        $id =$request->id;

        if($pass == $conpass)
        {
            $idcheck = Patient::find($id);
            
            if($idcheck){
                $existingPatient = Patient::where('email', $email)->first();
                if ($existingPatient) {
                    $idcheck->name = $request->name;
                    $idcheck->email = $request->email;
                    $idcheck->phone = $request->phone;
                    $idcheck->password = $request->newpass;
                    if ($idcheck->save()) 
                    {
                        return redirect('profile')->with('success', "Details Updated");
                    }
                }
                else{
                    return redirect('profile')->with('fail', "Email already in use");
                }
            }
            else
            {
                return redirect('profile')->with('fail', "Password Don't match");
            }
            }
            else{

            }
            // Check if any other patient has the same email
            
    }
}
