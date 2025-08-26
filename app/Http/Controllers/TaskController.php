<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('test');
    }

     public function create(){
        // $habits =::all();
        return view('buku.create',compact('Habits'));  
    }
}
