<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
Use App\Models\User;

class UserAuth extends Controller
{
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|string|max:255',
            'password'  => 'required|min:3'
        ]);

        $user_data = array(
            'name'  => $request->get('name'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt($user_data))
        {
            $users = User::where('name',$user_data['name'])->pluck('role');
            $busers = trim($users, '[]');
            $ausers = trim($busers, '"');

            echo($ausers);
            $request->session()->put('role', $ausers);
            if ($ausers)
            return redirect('/home');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }
}
