<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Atribut;
use App\Models\Beranda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'SMPN3 Sungai Kakap',
            'email' => 'smpn3sungaikakap@gmail.com',
            'password' => Hash::make('smpkakap321.')
        ]);


        Atribut::create([
            'tanggal_awal' => '2023-08-19',
            'tanggal_akhir' => '2023-08-19',
            'kuota' => '128',
            'lokasi' => 'SMP Negeri 3 Sungai Kakap',
        ]);


        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Kegiatan Praktik TIK',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        Beranda::create([
            'foto' => '201636231808-galeri-2.jpg',
            'deskripsi' => 'Segala',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
