<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){

         return view('home.index');
     }
    public function testimonial(){

        return view('home.testimonial');
    }


    public function food_menu(){

        return view('home.menu');
    }

}
