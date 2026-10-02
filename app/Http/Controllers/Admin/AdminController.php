<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Session;
use DB;

class AdminController extends Controller
{
    // Admin Credentials Check
    public function Check(Request $req){       
       $username = $req->username;
       $password=  $req->password;
       $details =Admin::where('username',$username)->where('password',$password)->get();
       $count =  Admin::where('username',$username)->where('password',$password)->count();

       if($count>0){
           $name = $details[0]->name;
           $email  = $details[0]->email;
           $username= $details[0]->username;
           Session::put('admin_name', $name);
           Session::put('admin_email', $email);
           Session::put('admin_username',$username);
           return redirect()->route('admin_home')->with('success', 'Successfully Logined');
        }else if($count<1){
         return redirect()->route('admin_login')->with('error', 'Invalid Credentials');
        }
    }

     // Admin Edit Profile
    public function Edit_Profile(){
         $admin_name =  Session::get('admin_name');
         $admin_details = Admin::where('name',$admin_name)->first();
         return view('admin.edit_profile',compact('admin_details','admin_name'));       
    }

    // Admin Update Profile

    public function Update_Profile(Request $req){
        $id= $req->idi;
        $name = $req->name;
        $username = $req->username;
        $password = $req->password;
        Admin::where('id', $id)->update([
            'name' => $name,
            'username'=>$username,
            'password'=>$password
        ]);
        return redirect()->route('admin_home')->with('success', 'Profile Details Updated');
    }

    // Admin Logout

    public function Logout(){
        Session::forget('admin_name');
        Session::forget('admin_email');
        Session::forget('admin_username');

        return redirect()->route('admin_login')->with('success', 'Logged out successfully');
    }



   
}
