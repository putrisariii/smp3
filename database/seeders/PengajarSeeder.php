<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengajars')->insert([
            'no' => '1',
            'nama' => 'Putri Sari',
            'foto' => 'a',
            'mapel' => 'mtk',
        ]);
    }
}
