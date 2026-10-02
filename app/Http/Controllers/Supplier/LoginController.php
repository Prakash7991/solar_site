<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Session;
use DB;

class LoginController extends Controller
{
    ////Supplier Login PAge
    public function Index(){
        return view('supplier.login');
    }
    //Supplier Crdentials Check

    public function Check(Request $req){       
       $email = $req->email;
       $password=  $req->password;
       $details =Supplier::where('email',$email)->where('pass',$password)->get();
       $count =  Supplier::where('email',$email)->where('pass',$password)->count();

       if($count>0){
           $name = $details[0]->name;
           $email  = $details[0]->email;
           $username= $details[0]->name;
           Session::put('supplier_name', $name);
           Session::put('supplier_email', $email);
           Session::put('supplier_username',$username);
           return redirect()->route('supplier_home')->with('success', 'Successfully Logined');
        }else if($count<1){
         return redirect()->route('supplier_login')->with('error', 'Invalid Credentials');
        }
    }

    //Supplier Crdentials Logout
     public function Logout(){
        Session::forget('supplier_name');
        Session::forget('supplier_email');
        Session::forget('suppler_username');

        return redirect()->route('supplier_login')->with('success', 'Logged out successfully');
    }

}
