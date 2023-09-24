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
            $table->string('nama', 50);
            $table->integer('nisn')->length(10)->unsigned();
            $table->string('ttl', 100);
            $table->string('jenis_kelamin', 12);
            $table->string('agama', 10);
            $table->integer('anak_ke')->length(2)->unsigned();
            $table->integer('saudara')->length(2)->unsigned();
            $table->string('hobi');
            $table->string('alamat');
            $table->integer('telpon_ortu')->length(13)->unsigned();
            $table->integer('telpon_siswa')->length(13)->unsigned();
            $table->enum('pernah_juara', ['ya','tidak']);
            $table->string('prestasi')->nullable();
            $table->enum('punya_kip', ['ya','tidak']);
            $table->string('no_kip')->nullable();
            $table->string('penyakit');
            $table->string('asal_sd', 50);
            $table->integer('no_kk')->length(16)->unsigned();
            $table->string('nama_ayah', 50);
            $table->string('ttl_ayah', 100);
            $table->integer('nik_ayah')->length(16)->unsigned();
            $table->string('pendidikan_ayah', 100);
            $table->string('pekerjaan_ayah', 100);
            $table->string('nama_ibu', 50);
            $table->string('ttl_ibu', 100);
            $table->integer('nik_ibu')->length(16)->unsigned();
            $table->string('pendidikan_ibu', 100);
            $table->string('pekerjaan_ibu', 100);
            $table->string('penghasilan_ortu', 100);
            $table->string('nama_wali', 50);
            $table->string('alamat_wali');
            $table->integer('telpon_wali')->length(13)->unsigned();
            $table->string('pekerjaan_wali', 100);
            $table->string('penghasilan_wali', 100);
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
