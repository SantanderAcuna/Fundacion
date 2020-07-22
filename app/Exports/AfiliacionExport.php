<?php

namespace App\Exports;

use App\Afiliacion;
use Maatwebsite\Excel\Concerns\FromCollection;

class AfiliacionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Afiliacion::all();
    }
}
