<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Berita;
use App\Models\Atribut;
use App\Models\Formulir;
use App\Models\Pengajar;
use App\Models\Prestasi;
use App\Models\KritikSaran;
use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Models\Pengumuman;
use App\Models\Beranda;
use RealRashid\SweetAlert\Facades\Alert;


class PengunjungController extends Controller
{
    public function Beranda () {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        $pengajars = Pengajar::orderBy('created_at', 'desc')->get();
        $prestasis = Prestasi::orderBy('created_at', 'desc')->get();
        $data_kritik = KritikSaran::where('status', 'Tampil')
        ->orderBy('created_at', 'desc')
        ->get();
        $berandas = Beranda::all();

        return view ('pengunjung.page.beranda',compact ('beritas','pengajars','prestasis','berandas','data_kritik'));
       
    }
    public function Berita () {
        $databerita = Berita::orderBy('created_at', 'desc')->get();
        return view ('pengunjung.page.berita',['beritas' => $databerita]);
    }
    public function Pengumuman () {
        $datapengumuman = Pengumuman::orderBy('created_at', 'desc')->get();
        return view ('pengunjung.page.pengumuman',['pengumumans' => $datapengumuman]);

        return view ('pengunjung.page.pengumuman');
    }
    public function TentangSekolah () {
        $berandas = Beranda::all();
        return view ('pengunjung.page.tentang-sekolah',compact ('berandas'));
    }
    public function Prestasi () {
        $prestasis = Prestasi::orderBy('created_at', 'desc')->get();
        return view ('pengunjung.page.prestasi',compact ('prestasis'));
    }
    public function Ekstrakurikuler () {
        $dataekstrakurikuler = Ekstrakurikuler::all();
        return view ('pengunjung.page.ekstrakurikuler',['ekstrakurikulers' => $dataekstrakurikuler]);
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

            Alert::success('Success Title', 'Success Message')->showConfirmButton();
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
            $rules = [
                'nisn' => 'required|max:10',
                'nik_ayah' => 'required|max:16',
                'nik_ibu' => 'required|max:16',
            ];
        
            $messages = [
                'nisn.required' => 'Kolom NISN wajib diisi.',
                'nik_ayah.required' => 'Kolom NISN wajib diisi.',
                'nik_ibu.required' => 'Kolom NISN wajib diisi.',
                'nisn.max' => 'NISN tidak boleh lebih dari 10 karakter.',
                'nik_ayah.max' => 'NISN tidak boleh lebih dari 16 karakter.',
                'nik_ibu' => 'NISN tidak boleh lebih dari 16 karakter.',
            ];
        
            $this->validate($request, $rules, $messages);

            $dataformulir = Formulir::create($request->all());

            $nama = $request->input('nama');
            session(['nama' => $nama]);
            return redirect()->route('ShowPpdb');
        }

        //show ppdb
        public function ShowPpdb () {
            $nama = session('nama'); // Mengambil data nama dari sesi
            return view('pengunjung.page.show-ppdb', compact('nama'));
           
        }


    // ------------------------------ Formulir PPDB end  ------------------------------\\





    public function DosenStaf () {
        $datapengajar = Pengajar::orderBy('created_at', 'desc')->get();
        return view ('pengunjung.page.dosen-staf',['pengajars' => $datapengajar]);
    }
    public function Home () {
        return view ('coba.home');
    }


}