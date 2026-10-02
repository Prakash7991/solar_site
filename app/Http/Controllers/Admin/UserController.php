<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Supplier;
use Carbon\Carbon;

class Usercontroller extends Controller
{
    //  Fetch All
    public function Users(){
        $users= User::all();
        $suppliers= Supplier::all();

        return view('admin.users.users',compact('users','suppliers'));
    }


    /// Insert

    public function Store(Request $req){
          $sname = $req->sname;
          $name = $req->name;
         $email = $req->email;
         $type = $req->type;    
         $location = $req->location;
         $price = $req->price;
         $slot = Carbon::parse($req->slot)->format('d-m-Y H:i');
          // Get original name (same file name uploaded)
            $originalName = $req->file('file')->getClientOriginalName();

            // Move file to public/images with same name
            $req->file('file')->move(public_path('images'), $originalName);

        echo $count = User::where('email',$email)->count();
        if($count<1){
            User::insert([
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
            return redirect()->route('admin_users')->with('success', 'Booking Created successfully');

        }else if($count>0){
            return redirect()->route('admin_users')->with('error', 'Booking Already Exists');
            ?>
            <script>location.reload(true)</script>
            <?php
            
        }
        
    }
    // Edit

    public function Edit($id){
        $supplier =Supplier::all();
        $user= User::where('id',$id)->first();
        return view('admin.users.user_edit',compact('user','supplier'));
    }

    //  Update

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

        return redirect()->route('admin_users')->with('success', 'Booking Updated successfully');
        
    }

    // Delete

    public function Delete($id){
        $deleted = User::destroy($id);
        return redirect()->route('admin_users')->with('success', 'Booking Deleted successfully');

    }

    public function Acept($id){
        echo $id;
        User::where('id',$id)->Update([
            'status'=>'Accepted'
        ]);

        return redirect()->route('admin_users')->with('success', 'Booking Status Acepted');

    }

    public function Reject($id){
        echo $id;
        User::where('id',$id)->Update([
            'status'=>'Rejected'
        ]);

        return redirect()->route('admin_users')->with('success', 'Booking Status Rejected');
    }

}
