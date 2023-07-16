<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn');
            $table->string('ttl');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->enum('agama', ['islam','protestan'.'katolik','hindu','buddha','khonghucu']);
            $table->string('anak_ke');
            $table->string('saudara');
            $table->string('hobi');
            $table->string('alamat');
            $table->string('telpon_ortu');
            $table->string('telpon_siswa');
            $table->enum('pernah_juara', ['ya','tidak']);
            $table->string('prestasi');
            $table->enum('punya_kip', ['ya','tidak']);
            $table->string('no_kip');
            $table->string('penyakit');
            $table->string('asal_sd');
            $table->string('no_kk');
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->string('nik_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->string('nik_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->enum('penghasilan_ortu', ['dibawah_500','500-1000'.'1000-3000','3000-5000','diatas_5000']);
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('telpon_wali');
            $table->string('pekerjaan_wali');
            $table->enum('penghasilan_wali', ['dibawah_500','500-1000'.'1000-3000','3000-5000','diatas_5000']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
