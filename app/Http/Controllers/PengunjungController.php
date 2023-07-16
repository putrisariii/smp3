<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\KritikSaran;
use App\Models\Formulir;
use App\Models\Atribut;

class PengunjungController extends Controller
{
    public function Beranda () {
        return view ('pengunjung.page.beranda');
    }
    public function Berita () {
        return view ('pengunjung.page.berita');
    }
    public function Pengumuman () {
        return view ('pengunjung.page.pengumuman');
    }
    public function TentangSekolah () {
        return view ('pengunjung.page.tentang-sekolah');
    }
    public function Prestasi () {
        return view ('pengunjung.page.prestasi');
    }
    public function Ekstrakurikuler () {
        return view ('pengunjung.page.ekstrakurikuler');
    }
   
    // public function FormPpdb () {
    //     return view ('pengunjung.page.form-ppdb');
    // }

    // ------------------------------  PPDB  ------------------------------\\
        // tampil
        public function Ppdb () {
            $dataatribut = Atribut::all();
            
            return view ('/pengunjung/page/ppdb',['atributs' => $dataatribut]);
           
        }

    // ------------------------------  PPDB end  ------------------------------\\




    // ------------------------------  Kritik Saran  ------------------------------\\
        // tampil
        public function KritikPengunjung () {
            $datakritik = KritikSaran::all();
            return view ('/pengunjung/page/kritik-saran',['kritiks' => $datakritik]);
        }

        // create
        public function TambahKritik (Request $request) {
            $datakritik = KritikSaran::create($request->all());

            return redirect()->route('KritikPengunjung');
        }

    // ------------------------------  Kritik Saran end  ------------------------------\\



    // ------------------------------ Formulir PPDB  ------------------------------\\
        // tampil
        public function FormPengunjung () {
            $dataformulir = Formulir::all();
            return view ('/pengunjung/page/form-ppdb',['formulirs' => $dataformulir]);
        }

        // create
        public function TambahForm (Request $request) {
            $dataformulir = Formulir::create($request->all());

            return redirect()->route('FormPengunjung');
        }

    // ------------------------------ Formulir PPDB end  ------------------------------\\





    public function DosenStaf () {
        return view ('pengunjung.page.dosen-staf');
    }
    public function Home () {
        return view ('coba.home');
    }


}
