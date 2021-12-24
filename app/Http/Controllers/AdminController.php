<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function tausiah(){
        return view('admin.tausiah');
    }

    public function articles(){
        return view('admin.articles');
    }
}
