<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    // Supplier
    public function Index(){
        return view('frontend.index');
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



    

}
