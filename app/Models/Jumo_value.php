<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Jumo_value extends Model
{
    use HasFactory;
    protected $table='jumo_values';

    public static function getJumoData() {
        $records = DB::table('jumo_values')->select('id','Temp1','Temp2','Temp3','rH1','rH2','rH3','P1','P2','P3','TA','TB','VOC1','VOC2','CO2','rH','createdAt')->get()->toArray();
        return $records;
    }
}
