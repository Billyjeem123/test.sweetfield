<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return  view('admin.index');
    }

    public function menu(){

        return  view('admin.menu');
    }


    public function orders(){

        return  view('admin.order');
    }

    public function testimonials(){

        return  view('admin.testimonials');
    }

    public function messages(){

        return  view('admin.messages');
    }


    public function advert(){

        return  view('admin.advert');
    }




}
