<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    // FEtch
    public function Users(){
        $supplier= Supplier::all();
        return view('admin.supplier.supplier',compact('supplier'));
    }

    // Store

    public function Store(Request $req){
          $name = $req->name;
         $email = $req->email;
         $password = $req->password;

        echo $count = Supplier::where('email',$email)->where('pass',$password)->count();
        if($count<1){
            Supplier::insert([
                'name'=>$name,
                'email'=>$email,
                'pass' => $password,
                'password' => Hash::make($password),
                
            ]);
            return redirect()->route('admin_supplier')->with('success', 'Supplier Created successfully');

        }else if($count>0){
            return redirect()->route('admin_supplier')->with('error', 'Supplier Already Exists');
            
        }
        
    }

    // Edit

    public function Edit($id){
        $user= Supplier::where('id',$id)->first();
        return view('admin.supplier.supplier_edit',compact('user'));

    }

    // Update

    public function Update(Request $req){
        $id = $req->idi;
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;

        Supplier::where('id', $id)->update([
            'name'=>$name,
            'pass' => $password,
            'password' => Hash::make($password)        
        ]);

        return redirect()->route('admin_supplier')->with('success', 'Supplier Updated successfully');
        
    }

    //  Delete

    public function Delete($id){
        $deleted = Supplier::destroy($id);
        return redirect()->route('admin_supplier')->with('success', 'Supplier Deleted successfully');
    }
}

