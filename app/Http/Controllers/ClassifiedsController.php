<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClassifiedsController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function create()
    {
         return view('create');  
    }
}
