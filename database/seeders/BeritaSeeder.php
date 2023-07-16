<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            'judul' => 'Penyerahan Surat Keterangan Lulus',
            'narasi' => 'Pada hari ini Kamis, 8 Juni 2023 telah dilaksanakan penyerahan Surat Keterangan Lulus siswa/i kelas IX SMP Negeri 3 Sungai Kakap Tahun Ajaran 2022/2023.',
            'foto' => 'a',
        ]);
    }
}
