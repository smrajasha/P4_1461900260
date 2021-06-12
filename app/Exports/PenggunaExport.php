<?php

namespace App\Exports;

use App\Models\Pengguna;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenggunaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengguna::all();
    }
}
