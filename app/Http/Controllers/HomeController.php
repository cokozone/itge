<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return 'service pAGE';
    }

    public function service(){
        return 'service pAGE';
    }

    public function contact(){
        return 'contact pAGE';
    }

    public function login(){
        return 'login pAGE';
    }

}
