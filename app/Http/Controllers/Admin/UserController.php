<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Supplier;
use Carbon\Carbon;

class UserController extends Controller
{
    //  Fetch All
    public function Users(){
        echo "welcome";
        $appointment= Appointment::all();
        return view('admin.users.users',compact('appointment'));
    }



    // Delete

    public function Delete($id){
        $deleted = Appointment::destroy($id);
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
