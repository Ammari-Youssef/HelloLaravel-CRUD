<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class 
NavigationController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function computers(){
        return view('computers.index');
    }



}
