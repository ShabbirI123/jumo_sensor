<?php

namespace App\Http\Controllers;

use App\Models\Jumo_value;
use Illuminate\Http\Request;
use App\Exports\JumoDataExport;
use Excel;

class JumoValueController extends Controller
{
    public function exportData() {
        return Excel::download(new JumoDataExport, 'jumo_data.csv');
    }
}
