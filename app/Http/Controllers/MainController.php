<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Jumo;
use DB;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function about()
    {
        return view('about');
    }

    public function download(Request $request)
    {
        $sensordatas = DB::select('select * from jumo_values');
        return view('checkboxes', ['sensordatas'=>$sensordatas]);
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
