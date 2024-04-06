<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technician;
use Session;
use App\Models\Payment;
use App\Models\LabResult;
use App\Models\Appointments;

class TechnicianController extends Controller
{   

    //Navigations
    public function tech()
    {
        return view('tech.index');
    }
    public function techdash()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('tech.techdash');
    }
    public function showtechapp()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('tech.showtechapp');
    }
    public function uploadres()
    {
        $data = array();
        if (Session::has ('loginid')) {
            $data = User::where('id', '=', Session::get('loginid'))-›first();
        }
        return view('tech.uploadres');
    }
     public function updatetable(Request $request)
     {
        $id = $request->id;
        Session::put('appid', $id);
        return view('tech.upload', compact('id'));
        
     }
     public function techprofile(Request $request)
     {
        $id = $request->id;
        Session::put('appid', $id);
        return view('tech.techprofile', compact('id'));
        
     }













     //funcitons
     public function techlogin(Request $request)
     {

        
        $email = trim($request->email);
        $pass = trim($request->password);
 
         $user = Technician::where('email', '=', $email)->first();
 
         if ($user){
             $user2 = Technician::where('password', '=', $pass)->first();
             if($user2){
                 $request->session()->put('TechId', $user->id);
                 return redirect('techdash');
             }
             else{
                 return redirect()->back()->with('fail', 'Invalid password for email')->withInput();
             }
         } 
         else {
             return redirect()->back()->with('fail', 'Invalid email')->withInput();
         }
     }
     public function insertresult(Request $request)
     {
        $id = $request->id;
        $result = $request->file('result');
        $app = Appointments::find($id);
        if($app){
            $fileName = $result->getClientOriginalName();

                $path = $result->move(public_path('testfiles'), $fileName);
                if($path)
                {
                    $labResult = new LabResult();
                    $labResult->appointment_id = $request->id; // Example appointment ID
                    $labResult->test_id = $request->testid; // Example test ID
                    $labResult->result = $fileName;
                    if($labResult->save())
                    {   
                        
                        $app->status ="completed";
                        if($app->save())
                        {
                            return redirect('showtechapp')->with('success', " uploaded ")->withInput();
                        }
                        else{
                            return redirect('showtechapp')->with('fail', "Couldn't upload result, failed at appointment table")->withInput();
                        }
                    }
                    else{
                        return redirect('showtechapp')->with('fail', "Couldn't upload result, failed at result table")->withInput();
                    }
                    
                }
                else{
                    echo"failed";
                }
            
           
        }
        else{
            return redirect()->back()->with('fail', 'Appointment Not Found')->withInput();
        }


     }
     public function insertresult2(Request $request)
     {
        $id = $request->id;
        $result = $request->file('result');
        $app = Appointments::find($id);
        if($app){

            $testtid = $app->testtid;

            $fileName = $result->getClientOriginalName();

                $path = $result->move(public_path('testfiles'), $fileName);
                if($path)
                {
                    $labResult = new LabResult();
                    $labResult->appointment_id = $request->id; // Example appointment ID
                    $labResult->test_id = $testtid; // Example test ID
                    $labResult->result = $fileName;
                    if($labResult->save())
                    {   
                        
                        $app->status ="completed";
                        if($app->save())
                        {
                            return redirect('showtechapp')->with('success', " uploaded ")->withInput();
                        }
                        else{
                            return redirect('showtechapp')->with('fail', "Couldn't upload result, failed at appointment table")->withInput();
                        }
                    }
                    else{
                        return redirect('showtechapp')->with('fail', "Couldn't upload result, failed at result table")->withInput();
                    }
                    
                }
                else{
                    echo"failed";
                }
            
           
        }
        else{
            return redirect()->back()->with('fail', 'Appointment Not Found')->withInput();
        }


     }
     public function updatetech(Request $request)
    {
        $pass = $request->pass; 
        $conpass = $request->newpass;
        $email = $request->email;
        $id =$request->id;

        if($pass == $conpass)
        {
            $idcheck = Technician::find($id);
            
            if($idcheck){
                $existingPatient = Technician::where('email', $email)->first();
                if ($existingPatient) {
                    $idcheck->name = $request->name;
                    $idcheck->email = $request->email;
                    $idcheck->phone = $request->phone;
                    $idcheck->password = $request->newpass;
                    if ($idcheck->save()) 
                    {
                        return redirect('techprofile')->with('success', "Details Updated");
                    }
                }
                else{
                    return redirect('techprofile')->with('fail', "Email already in use");
                }
            }
            else
            {
                return redirect('techprofile')->with('fail', "Password Don't match");
            }
        }
        else{
            return redirect('techprofile')->with('fail', "Password Not Same");
        }
            // Check if any other patient has the same email
            
    }

     
}
