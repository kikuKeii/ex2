<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangans')->insert([
            'type' => "1",
            'price' => "300000",
        ]);
        DB::table('ruangans')->insert([
            'type' => "2",
            'price' => "400000",
        ]);
    }
}
