<?php

namespace App\Exports;

use App\Models\Ruangan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class RuanganExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('tabels.ruang', ['ruangan' => Ruangan::all()]);
    }
}
