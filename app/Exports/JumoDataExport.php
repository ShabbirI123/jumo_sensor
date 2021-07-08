<?php

namespace App\Exports;

use App\Models\Jumo_value;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JumoDataExport implements FromCollection,WithHeadings
{
    public function headings():array {
        return [
            "id",
            "Temp1",
            "Temp2",
            "Temp3",
            "rH1",
            "rH2",
            "rH3",
            "P1",
            "P2",
            "P3",
            "TA",
            "TB",
            "VOC1",
            "VOC2",
            "CO2",
            "rH",
            "createdAt"
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Jumo_value::all();
        return collect(Jumo_value::getJumoData());
    }

}
