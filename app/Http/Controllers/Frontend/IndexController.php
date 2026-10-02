<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    // Supplier
    public function Index(){
        return view('frontend.index');
    }

    public function Insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|string|max:30',
            'current_bill' => 'required|numeric|min:0',
        ]);

        Appointment::create($validated);

        return response()->json([
            'message' => 'Successfully Appointment Booked',
        ], 201);
    }

    public function Indextwo(){
        return view('frontend.index_two');
    }

    public function About(){
        return view('frontend.about');
    }
    public function Service(){
        return view('frontend.service');
    }

    public function Service_Details(){
        return view('frontend.service_details');
    }
    public function ProjectGrid(){
        return view('frontend.projectgrid');
    }
    
    public function ProjectDetails(){
        return view('frontend.projectgrid_details');
    }

    public function Blog(){
        return view('frontend.blog');
    }
    public function BlogDetails(){
        return view('frontend.blog_detail');
    }
    public function Team(){
        return view('frontend.team');
    }

    public function TeamDetails(){
        return view('frontend.team_details');
    }

    public function Faq(){
        return view('frontend.faq');
    }
    public function Error(){
        return view('frontend.error');
    }

    public function Contact(){
        return view('frontend.contact');
    }

    public function ContactInsert(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'This field is required.',
            'email.required' => 'This field is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'This field is required.',
            'message.required' => 'This field is required.',
        ]);

        Contact::create($validated);

        return response()->json([
            'message' => 'Successfully Contact Enquiry Submitted',
        ], 201);
    }



    

}
