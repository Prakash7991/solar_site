<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;   // 🔥 FIX 1

class CarController extends Controller
{
    //Store
    public function store(Request $request)
    {
        // -------------------------------
        // VALIDATION
        // -------------------------------
        $request->validate([
            'supplier_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'location' => 'required|string|max:255',
            'slot' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // -------------------------------
        // UPLOAD IMAGE
        // -------------------------------
        $imageName = null;

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $imageName = uniqid().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('images'), $imageName); // 🔥 Image gets saved
        }

        $carr = [
            'supplier_name' => $request->supplier_name,
            'name'=>$request->name,
            'email'=>$request->email,
            'type'=>$request->type,
            'location'=>$request->location,
            'slot' =>$request->slot,
            'price'=>$request->price,
            'image'=>$imageName
        ];

        // -------------------------------
        // INSERT INTO DATABASE
        // -------------------------------
        $carId = User::create([          // 🔥 FIX 2 — Save and get ID
            'supplier_name' => $request->supplier_name,
            'name' => $request->name,
            'email' => $request->email,
            'pass' => $request->email,
            'password' => Hash::make($request->email),
            'type' => $request->type,
            'location' => $request->location,
            'slot' => $request->slot,
            'price' => $request->price,
            'image' => $imageName,
        ])->id;

        return response()->json([
            'status' => true,
            'message' => 'Booking created successfully',
            'car_id' => $carr
        ], 200);
    }

    //Fetch

    public function index()
    {
        $cars = User::select('name', 'type', 'location', 'price', 'image')->get();
        return response()->json([
            'cars'=>$cars,
            'message' => 'Bookings Fetched successfully',
        ]);
    }

    //Get Single

    public function show($id)
    {
        $car = User::select('name', 'type', 'location', 'price', 'image')->find($id);
        if (!$car) {
            return response()->json(['message' => 'Booking not found'], 404);
        }
        return response()->json($car);
    }


    //Update
    public function update(Request $request, $id){
       $car = User::find($id);

        if (!$car) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        // VALIDATION
        $request->validate([
            'supplier_name' => 'required|string|max:255',
            'name'          => 'required|string|max:255',
            'email'         => 'required|email',
            'type'          => 'required|string|max:255',
            'location'      => 'required|string|max:255',
            'slot'          => 'nullable|string|max:255',
            'price'         => 'required|numeric',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // DATA
        $updateData = [
            'id'            =>$id,
            'supplier_name' => $request->supplier_name,
            'name'          => $request->name,
            'email'         => $request->email,           
            'type'          => $request->type,
            'location'      => $request->location,
            'slot'          => $request->slot,
            'price'         => $request->price
        ];   

        // DEBUG — SEE ALL INPUTS IN POSTMAN

        
        if ($request->hasFile('image')) {

            // delete old image
            if ($car->image) {
                @unlink(public_path('images/' . $car->image));
            }

            $file = $request->file('image');
            $newImageName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $newImageName);

            $updateData['image'] = $newImageName;

            User::where('id',$id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'pass'=>$request->email,
                'password'=>Hash::make($request->email),
                'slot'=>$request->slot,
                'supplier_name'=>$request->supplier_name,
                'type'=>$request->type,
                'location'=>$request->location,
                'price'=>$request->price,
                'image'=>$newImageName
            ]);


            $carr = [
                'supplier_name' => $request->supplier_name,
                'name'=>$request->name,
                'email'=>$request->email,
                'type'=>$request->type,
                'location'=>$request->location,
                'slot' =>$request->slot,
                'price'=>$request->price,
                'image'=>$newImageName
            ];
        }else{
            User::where('id',$id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'pass'=>$request->email,
                'password'=>Hash::make($request->email),
                'slot'=>$request->slot,
                'supplier_name'=>$request->supplier_name,
                'type'=>$request->type,
                'location'=>$request->location,
                'price'=>$request->price,
              
            ]);

             $carr = [
                'supplier_name' => $request->supplier_name,
                'name'=>$request->name,
                'email'=>$request->email,
                'type'=>$request->type,
                'location'=>$request->location,
                'slot' =>$request->slot,
                'price'=>$request->price
                
            ];
        }

    
        $car->update($updateData);

        return response()->json([
            'status' => true,        
            'received_data' => $carr,
            'message' => 'Succesfully Updated Data'
        ]);
    }



 // Delete

    public function destroy($id)
    {
        $car = User::find($id);
        if (!$car) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        // Delete image if exists
        if ($car->image) {
            @unlink(public_path('images/'.$car->image));
        }

        $car->delete();

        return response()->json([
            'status' => true,
            'message' => 'Booking deleted successfully'
        ], 200);
    }


}
