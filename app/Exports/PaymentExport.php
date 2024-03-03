<?php

namespace App\Exports;

use App\Models\Payment;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class PaymentExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('tabels.index', [
            'payment' => DB::table('payments')
        ->join('ruangans', 'payments.ruangan_id', '=', 'ruangans.id')
        ->join('pasiens', 'payments.pasien_id', '=', 'pasiens.id')
        ->join('dokters', 'pasiens.dokter_id', '=', 'dokters.id')
        ->select('payments.*', 'pasiens.name', 'dokters.name as dokter_name', 'ruangans.type', 'ruangans.price', DB::raw('DATEDIFF(payments.checkout, payments.checkin) AS stay_duration'), DB::raw('(DATEDIFF(payments.checkout, payments.checkin)*ruangans.price) AS total_price'))
        ->get()
        ]);
    }
}
