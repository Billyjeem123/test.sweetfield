<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){

     $menu = Menu::paginate(5);
         return  view('home.index', ['items' => $menu, 'menus' => $menu]);
     }
    public function testimonial(){

        return view('home.testimonial');
    }


    public function food_menu(){

        return view('home.menu');
    }


    public function cart(){

        return  view('home.cart');
    }


}
