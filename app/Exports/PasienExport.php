<?php

namespace App\Exports;

use App\Models\Pasien;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class PasienExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('tabels.pasien', [
            'pasien'=> DB::table('pasiens')
        ->join('dokters', 'pasiens.dokter_id', '=', 'dokters.id')
        ->select('pasiens.*', 'dokters.name as dokter_name')
        ->get()
        ]);
    }
}
