<?php

namespace App\Http\Controllers;

use Auth;


class MainController extends Controller
{
    function index() {
        return view('welcome');
    }

    function about(){
        return view('about');
    }

    function login()
    {
        return view('login');
    }

    function home()
    {
        return view('home');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function admin(){

    }
}
