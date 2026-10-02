<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //  ADmin Home
    public function Index(){
        return view('admin.index');        
    }

     //  ADmin Login PAge

    public function Login(){
        return view('admin.login'); 

    }
}
