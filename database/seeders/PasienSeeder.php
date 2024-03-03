<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            'dokter_id' => 1,
            'name' => "Al",
            'type' => "Jantung",
            'checkin' => "2022-01-01 00:00:00",
            'checkout' => "2022-01-02 00:00:00",
        ]);
        DB::table('pasiens')->insert([
            'dokter_id' => 1,
            'name' => "El",
            'type' => "Jantung",
            'checkin' => "2022-01-05 00:00:00",
            'checkout' => "2022-01-06 00:00:00",
        ]);
    }
}
