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

    function download(){
        return view('/download');
    }

    function dashboard(){
        return view('/dashboard');
    }

    function users(){
        return view('/users');
    }

    function settings(){
        return view('/settings');
    }

    function profile(){
        return view('/profile');
    }
}
