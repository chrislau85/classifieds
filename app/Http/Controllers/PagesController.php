<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');   
    }
    
    public function about(){
        $name = "Chris";
        return view('pages.about')->with('name', $name);
    }
}
