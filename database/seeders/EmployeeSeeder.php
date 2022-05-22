<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Hamal rizqy mukhda',
            'jeniskelamin' => 'lakilaki',
            'notelpon' => '082274562690',
            'nomorkamar' => 'A1',
            'jumlahmenginap' => '2 bulan',
            'tanggalmasuk' => '2 mei 2022',

        ]);

    }
}
