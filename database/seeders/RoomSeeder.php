<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
            'kamar' => 'A1',
            'fasilitaskamar' => 'AC,Kamar Mandi,Doublebed',
            'hargakamar' => '4.000.000/bulan',
            'infokamar' => 'tersedia',

        ]);

    }
}
