<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumo_value;

class DownloadFile extends Controller
{
    function getData(){
        return Jumo_value::all();
    }
}
