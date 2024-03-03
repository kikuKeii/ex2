<?php

namespace App\Exports;

use App\Models\Dokter;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DokterExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('tabels.dokter', ['dokter' => Dokter::all()]);
    }
}
