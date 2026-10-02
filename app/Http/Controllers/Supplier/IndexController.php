<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\User;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller{
    // Supplier
    public function Index(){
        return view('supplier.index');
    }
    // Edit Profile

     public function Edit_Profile(){
         $admin_name =  Session::get('supplier_name');
         $admin_details = Supplier::where('name',$admin_name)->first();
         return view('supplier.edit_profile',compact('admin_details','admin_name'));       
    }
    // Update PRofile

    public function Update_Profile(Request $req){
        $id= $req->idi;
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        Supplier::where('id', $id)->update([
            'name' => $name,
            'email'=>$email,
            'pass'=>$password
            
        ]);
        return redirect()->route('supplier_home')->with('success', 'Profile Details Updated');      

    }

    //Fetch Supplier

    public function FetchUser(){
        $suppliers = Supplier::all();
        $name = Session::get('supplier_username');
       
         $users = User::where('supplier_name',$name)->get();
          
         $count = User::where('supplier_name',$name)->count();
       
        return view('supplier.users.users',compact('users','suppliers'));
    }

    public function Edit($id){
        $supplier =Supplier::all();
        $user= User::where('id',$id)->first();
        return view('supplier.users.user_edit',compact('user','supplier'));
    }

    public function Update(Request $req){
        $id = $req->idi;
        $sname = $req->sname;
          $name = $req->name;
         $email = $req->email;
         $slot = $req->slot;
         $type = $req->type;    
         $location = $req->location;
         $price = $req->price;
         $slot = Carbon::parse($req->slot)->format('d-m-Y H:i');
         $oimage = $req->oimage;
        if ($req->hasFile('file')) {

        // Get original name (same file name uploaded)
            $originalName = $req->file('file')->getClientOriginalName();

            // Move file to public/images with same name
            $req->file('file')->move(public_path('images'), $originalName);
        }else{
            $originalName = $req->oimage;
        }

        User::where('id', $id)->update([
            'supplier_name'=>$sname,                
                'name'=>$name,
                'email'=>$email,
                'pass' => $email,
                'password' => Hash::make($email),
                'slot'=>$slot,
                'type'=>$type,
                'location'=>$location,
                'price'=>$price,
                'image'=>$originalName     
        ]);

        return redirect()->route('supplier_home')->with('success', 'Booking Updated successfully');
        
    }



}
?>