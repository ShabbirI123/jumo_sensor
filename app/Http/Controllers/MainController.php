<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Jumo;

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

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|string|max:255',
            'password'  => 'required|min:3'
        ]);

        $user_data = array(
            'name'  => $request->get('name'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/successlogin');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function successlogin()
    {
        return view('successlogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
