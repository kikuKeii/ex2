<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'ruangan_id' => 1,
            'pasien_id' => 1,
            'checkin' => "2022-01-01 00:00:00",
            'checkout' => "2022-01-02 00:00:00",
            'bayar' => "300000",
        ]);
        DB::table('payments')->insert([
            'ruangan_id' => 2,
            'pasien_id' => 2,
            'checkin' => "2022-01-05 00:00:00",
            'checkout' => "2022-01-06 00:00:00",
            'bayar' => "400000",
        ]);
    }
}
