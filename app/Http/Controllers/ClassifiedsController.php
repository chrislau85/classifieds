<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classified;


class ClassifiedsController extends Controller
{
    public function index()
    {
        $classifieds = Classified::all();
        return view('index', compact('classifieds'));
    }
    
    public function create()
    {
         return view('create');  
    }

    public function show($id)
    {
         $classified = classified::find($id);
         return view('show', compact('classified'));  
    }

    public function edit($id)
    {
         return view('edit');  
    }

}
