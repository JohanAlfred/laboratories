<?php

namespace App\Http\Controllers;
use App\Models\Technician;
use App\Models\Test;
use App\Models\User;
use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }
    public function adlogout(){
        if(Session::has('adminId')){
            Session::pull('adminId');
            return redirect('admin');
        }
    }
    public function adminmain()
    {
        return view('admin.dashboard');
    }
    public function adminadd()
    {
        return view('admin.add');
    }
    public function viewusers()
    {
        return view('admin.viewusers');
    }
    public function adtest()
    {
        return view('admin.adtest');
    }
    public function adtestnew()
    {
        return view('admin.adtestnew');
    }
    



    //Function
    public function adlogin(Request $request)
    {
        $email = $request->email;
        $pass = $request->password;
        $user = User::where('email', '=', $email)->first();
        if ($user) {
            $user2 = User::where('password', '=', $pass)->first();
            if($user2){
                $request->session()->put('adminId', $user->id);
                return redirect('adminmain');
            }
            else{
                return redirect()->back()->with('fail', 'Invalid password for email')->withInput();
            }
        }
        else {
            return redirect()->back()->with('fail', 'Invalid email')->withInput();
        }
    }

   public function adduser(Request $request)
   {

    $pass = $request->password; 
    $conpass = $request->conpassword;
    $email = $request->email;

    if($pass == $conpass)
    {
        // Check if any other patient has the same email
        $existingPatient = Technician::where('email', $email)->first();

        if ($existingPatient) {
            return back()->with('fail', "Email already in use");
        }
        else{

                $technician = new Technician();
                $technician->name = $request->name;
                $technician->email =$request->email;
                $technician->password = $request->password;
                if ($technician->save()) 
                {
                    return back()->with('success', "User Added");}
                
        }
        
        

    }
    else
    {
        return back()->with('fail', "Password Don't match");
    }

   }
   public function removetech(Request $request)
    {
        $id = $request->id;
        $existingPatient = Technician::where('id', $id)->first();
        if ($existingPatient) {
            // Find the technician with the given ID
            $technician = Technician::findOrFail($id);

            // Delete the technician
            $technician->delete();
            return back()->with('success', "Technician Removed Successfully");
            
        }
        else{
            return back()->with('fail', "User Doesn't Exist");
        }
    }
    public function savetest(Request $request)
    {
        $test = new Test();
        $test->name = $request->name;
        $test->technicianid = $request->technician_id;
        if($test->save()){
            // Redirect back with success message
            return redirect()->back()->with('success', 'Test created successfully');
        }
        else{
            return back()->with('fail', "Test Failed To Save");
        }

        
    }
    public function removetest(Request $request)
    {
        $id = $request->id;
        $existingPatient = Test::where('id', $id)->first();
        if ($existingPatient) {
            // Find the technician with the given ID
            $test = Test::findOrFail($id);

            // Delete the technician
            $test->delete();
            return back()->with('success', "Technician Removed Successfully");
            
        }
        else{
            return back()->with('fail', "Test Doesn't Exist");
        }
    }
}
