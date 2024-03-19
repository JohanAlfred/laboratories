<?php

namespace App\Http\Controllers;
use App\Models\Technician;
use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }
    public function adminmain()
    {
        return view('admin.dashboard');
    }
    public function adminadd()
    {
        return view('admin.add');
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
                return redirect()->route('admin')->with('fail', 'Invalid password for email')->withInput();
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
                    
                    return redirect()->route('adduser')->with('fail', 'Invalid password for email');

                }
                echo 'email pass';
        }
        
        

    }
    else
    {
        return back()->with('fail', "Password Don't match");
    }

   }
}
