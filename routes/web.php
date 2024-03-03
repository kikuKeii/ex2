<?php

use App\Exports\DokterExport;
use App\Exports\PasienExport;
use App\Exports\PaymentExport;
use App\Exports\RuanganExport;
use App\Models\Dokter;
use App\Models\Payment;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Route;
use App\Models\Brand;
use App\Models\Pasien;
use Maatwebsite\Excel\Facades\Excel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // dd(Dokter::all());

    $data =[
        'title'=>'Home',
        'payment' => DB::table('payments')
        ->join('ruangans', 'payments.ruangan_id', '=', 'ruangans.id')
        ->join('pasiens', 'payments.pasien_id', '=', 'pasiens.id')
        ->join('dokters', 'pasiens.dokter_id', '=', 'dokters.id')
        ->select('payments.*', 'pasiens.name', 'dokters.name as dokter_name', 'ruangans.type', 'ruangans.price', DB::raw('DATEDIFF(payments.checkout, payments.checkin) AS stay_duration'), DB::raw('(DATEDIFF(payments.checkout, payments.checkin)*ruangans.price) AS total_price'))
        ->get()
    ];
    // dd($data);
    return view('pages.index', $data);
});

Route::get('/pasien', function () {

    $data = [
        'title' => 'Pasien',
        'pasien'=> DB::table('pasiens')
        ->join('dokters', 'pasiens.dokter_id', '=', 'dokters.id')
        ->select('pasiens.*', 'dokters.name as dokter_name')
        ->get()
    ];
    // dd($data);
    return view('pages.pasien', $data);
});

Route::get('/dokter', function () {
    $data = [
        'title' => 'Dokter',
        'dokter' => Dokter::all()
    ];
    // dd($data);
    return view('pages.dokter', $data);
});

Route::get('/ruang', function () {
    $data = [
        'title' => 'Ruangan',
        'ruangan' => Ruangan::all()
    ];
    // dd($data);
    return view('pages.ruang', $data);
});

Route::get('/ruang/export', function () {
    return Excel::download(new RuanganExport, 'ruangan.xlsx');
});

Route::get('/payment/export', function () {
    return Excel::download(new PaymentExport, 'data.xlsx');
});

Route::get('/dokter/export', function () {
    return Excel::download(new DokterExport, 'dokter.xlsx');
});
Route::get('/pasien/export', function () {
    return Excel::download(new PasienExport, 'pasien.xlsx');
});
