<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajar;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Ekstrakurikuler;
use App\Models\KritikSaran;
use App\Models\Formulir;
use App\Models\Atribut;
use App\Models\Beranda;

class AdminController extends Controller
{
    public function Index () {
        return view ('admin.index');
    }

    //------------------------------ Beranda ------------------------------/ 
        // tampil
        public function Beranda () {
            $databeranda = Beranda::all();
            return view ('/admin/beranda',['berandas' => $databeranda]);
        }

         // create
         public function TambahBeranda (Request $request) {
            $rand = date('sHiydm');
            $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

            $databeranda = Beranda::create($request->all());
                
                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Beranda/', $foto);
                    $databeranda->foto = $foto;
                    $databeranda->save();
                }

            return redirect()->route('Beranda');
        }

        // update
            public function UbahBeranda (Request $request, $id) {
                $databeranda = Beranda::find($id);
                // $datapengajar->update($request->all());

                //update foto
                $foto = $databeranda->foto;
                if($request ->file('foto')){
                    $rand = date('sHiydm');
                    $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                    if($request -> hasFile('foto')){
                        $request-> file('foto')->move('file/Beranda/', $foto);
                    }
                }
                    $databeranda->foto = $foto;
                    $databeranda->deskripsi = $request->deskripsi;
                    $databeranda->save();
                
                return redirect()->route('Beranda');

                
            }

        // hapus
            public function HapusBeranda ($id) {
                $databeranda = Beranda::find($id);
                $databeranda->delete();

                return redirect()->route('Beranda');
            }

    //------------------------------ Beranda end ------------------------------/ 




    //------------------------------ Pengajar ------------------------------/ 
        // tampil
            public function PengajarStaf () {
                $datapengajar = Pengajar::latest('created_at')->get();
                return view ('/admin/pengajar-staf',['pengajars' => $datapengajar]);
            }

        // create
            public function TambahPengajar (Request $request) {
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                $datapengajar = Pengajar::create($request->all());
                    
                    if($request -> hasFile('foto')){
                        $request-> file('foto')->move('file/Pengajar/', $foto);
                        $datapengajar->foto = $foto;
                        $datapengajar->save();
                    }

                return redirect()->route('PengajarStaf');
            }

        // update
            public function TampilPengajar (Request $request, $id) {
                $datapengajar = Pengajar::find($id);
                // $datapengajar->update($request->all());

                //update foto
                $foto = $datapengajar->foto;
                if($request ->file('foto')){
                    $rand = date('sHiydm');
                    $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                    if($request -> hasFile('foto')){
                        $request-> file('foto')->move('file/Pengajar/', $foto);
                    }
                } 
                    $datapengajar->nama = $request->nama;
                    $datapengajar->mapel = $request->mapel;
                    $datapengajar->foto = $foto;
                    $datapengajar->save();
                 
                return redirect()->route('PengajarStaf');
            }

        // hapus
            public function HapusPengajar ($id) {
                $datapengajar = Pengajar::find($id);
                $datapengajar->delete();

                return redirect()->route('PengajarStaf');
            }
    // ------------------------------ Pengajar end ------------------------------/ 



    // ------------------------------ Berita ------------------------------  
        // tampil
        public function Berita () {
            $databerita = Berita::all();
            return view ('/admin/berita',['beritas' => $databerita]);
           
        }

        // create
        public function TambahBerita (Request $request) {
            $rand = date('sHiydm');
            $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

            $databerita = Berita::create($request->all());
                
                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Berita/', $foto);
                    $databerita->foto = $foto;
                    $databerita->save();
                }

            return redirect()->route('Berita');
        }

        // update
        public function UbahBerita (Request $request, $id) {
            $databerita = Berita::find($id);

            //update foto
            $foto = $databerita->foto;
            if($request ->file('foto')){
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Berita/', $foto);
                }
            } 
                
                $databerita->judul = $request->judul;
                $databerita->narasi = $request->narasi;
                $databerita->foto = $foto;
                $databerita->save();
             
            return redirect()->route('Berita');
        }
        // hapus
        public function HapusBerita ($id) {
            $databerita = Berita::find($id);
            $databerita->delete();

            return redirect()->route('Berita');
        }

    // ------------------------------ Berita end ------------------------------
    
    

    // ------------------------------ Pengumuman ------------------------------
        // tampil
        public function Pengumuman () {
            $datapengumuman = Pengumuman::all();

            return view ('/admin/pengumuman',['pengumumans' => $datapengumuman]);
        }
        
        // create
        public function TambahPengumuman (Request $request) {
            $rand = date('sHiydm');
            $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();
            $file = $rand.'-'.$request->file('file')->getClientOriginalName();

            $datapengumuman = Pengumuman::create($request->all());
                
                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Pengumuman/', $foto);
                    $datapengumuman->foto = $foto;
                    $datapengumuman->save();
                }
                if($request -> hasFile('file')){
                    $request-> file('file')->move('file/Pengumuman/', $file);
                    $datapengumuman->file = $file;
                    $datapengumuman->save();
                }

            return redirect()->route('Pengumuman');
        }

        // update
        public function UbahPengumuman (Request $request, $id) {
            $datapengumuman = Pengumuman::find($id);
            

            //update foto
            $foto = $datapengumuman->foto;
            if($request ->file('foto')){
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Pengumuman/', $foto);
                }
            } 
            $file = $datapengumuman->file;
            if($request ->file('file')){
                $rand = date('sHiydm');
                $file = $rand.'-'.$request->file('file')->getClientOriginalName();

                if($request -> hasFile('file')){
                    $request-> file('file')->move('file/Pengumuman/', $file);
                }
            } 
                
                $datapengumuman->judul = $request->judul;
                $datapengumuman->narasi = $request->narasi;
                $datapengumuman->file = $file;
                $datapengumuman->foto = $foto;
                $datapengumuman->save();
             
            return redirect()->route('Pengumuman');
        }


        // hapus
        public function HapusPengumuman ($id) {
            $datapengumuman = Pengumuman::find($id);
            $datapengumuman->delete();

            return redirect()->route('Pengumuman');
        }

    // ------------------------------ Pengumuman end ------------------------------



    // ------------------------------ Prestasi ------------------------------
        // tampil
        public function Prestasi () {
            $dataprestasi = Prestasi::all();

            return view ('/admin/prestasi',['prestasis' => $dataprestasi]);
        }

        // create
        public function TambahPrestasi (Request $request) {
            $rand = date('sHiydm');
            $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

            $dataprestasi = Prestasi::create($request->all());
                
                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Prestasi/', $foto);
                    $dataprestasi->foto = $foto;
                    $dataprestasi->save();
                }

            return redirect()->route('Prestasi');
        }

        // update
        public function UbahPrestasi (Request $request, $id) {
            $dataprestasi = Prestasi::find($id);

            //update foto
            $foto = $dataprestasi->foto;
            if($request ->file('foto')){
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Prestasi/', $foto);
                }
            } 
                
                $dataprestasi->juara = $request->juara;
                $dataprestasi->jenis = $request->jenis;
                $dataprestasi->foto = $foto;
                $dataprestasi->save();
             
            return redirect()->route('Prestasi');
        }

        // hapus
        public function HapusPrestasi ($id) {
            $dataprestasi = Prestasi::find($id);
            $dataprestasi->delete();

            return redirect()->route('Prestasi');
        }

    // ------------------------------ Prestasi end ------------------------------



    // ------------------------------ Ekstrakurikuler ------------------------------
        // tampil
        public function Ekstrakurikuler () {
            $dataekstrakurikuler = Ekstrakurikuler::all();

            return view ('/admin/ekstrakurikuler',['ekstrakurikulers' => $dataekstrakurikuler]);
        }

        // create
        public function TambahEkstrakurikuler (Request $request) {
            $rand = date('sHiydm');
            $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

            $dataekstrakurikuler = Ekstrakurikuler::create($request->all());
                
                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Ekstrakurikuler/', $foto);
                    $dataekstrakurikuler->foto = $foto;
                    $dataekstrakurikuler->save();
                }

            return redirect()->route('Ekstrakurikuler');
        }

        // update
        public function UbahEkstrakurikuler (Request $request, $id) {
            $dataekstrakurikuler = Ekstrakurikuler::find($id);

            //update foto
            $foto = $dataekstrakurikuler->foto;
            if($request ->file('foto')){
                $rand = date('sHiydm');
                $foto = $rand.'-'.$request->file('foto')->getClientOriginalName();

                if($request -> hasFile('foto')){
                    $request-> file('foto')->move('file/Ekstrakurikuler/', $foto);
                }
            } 
                
                $dataekstrakurikuler->ekskul = $request->ekskul;
                $dataekstrakurikuler->tentang = $request->tentang;
                $dataekstrakurikuler->foto = $foto;
                $dataekstrakurikuler->save();
             
            return redirect()->route('Ekstrakurikuler');
        }

        // hapus
        public function HapusEkstrakurikuler ($id) {
            $dataekstrakurikuler = Ekstrakurikuler::find($id);
            $dataekstrakurikuler->delete();

            return redirect()->route('Ekstrakurikuler');
        }
    // ------------------------------ Ekstrakurikuler end ------------------------------



    // ------------------------------ Kritik Saran ------------------------------
        // tampil
        public function KritikAdmin() {
            $kritiks = KritikSaran::latest('created_at')->get();
            return view('admin.kritik-saran', compact('kritiks'));
        }
        
        
        

        // Update
        public function UpdateStatus(Request $request, $id) {
            $datakritik = KritikSaran::find($id);
            $datakritik->update($request->all());

            return redirect()->route("KritikAdmin")->with('success','Data Berhasil di Update');
        }
    // End

        // hapus
        public function HapusKritik ($id) {
            $datakritik = KritikSaran::find($id);
            $datakritik->delete();

            return redirect()->route('KritikAdmin');
        }
    // ------------------------------ Kritik Saran end ------------------------------



    // ------------------------------ Formulir PPDB------------------------------
        // tampil form
        public function FormAdmin () {
            $dataformulir = Formulir::all();

            return view ('/admin/form-ppdb',['formulirs' => $dataformulir]);
            
        }

         // update
         public function UbahForm (Request $request, $id) {
            $dataformulir = Formulir::find($id);
            $dataformulir->update($request->all());

            return redirect()->route('FormAdmin');
        }

        // hapus
        public function HapusForm ($id) {
            $dataformulir = Formulir::find($id);
            $dataformulir->delete();

            return redirect()->route('FormAdmin');
        }

    // ------------------------------ Formulir PPDB end ------------------------------



    // ------------------------------ PPDB ------------------------------
        // tampil 
        public function PpdbAdmin () {
            $dataatribut = Atribut::all();

            return view ('/admin/ppdb',['atributs' => $dataatribut]);
            
        }

        // create
        public function TambahPpdb (Request $request) {
            $dataatribut = Atribut::create($request->all());

            // $tanggalawal = $request->input('tanggal_awal');
            // $tanggalakhir = $request->input('tanggal_akhir');
            // $rentang_tanggal = $tanggalawal . ' - ' . $tanggalakhir;

            // $dataatribut = new Atribut;
            // $dataatribut->rentang_tanggal = $rentang_tanggal;
            // $dataatribut->save();

        

            return redirect()->route('PpdbAdmin');
        }

        // update
        public function UbahPpdb (Request $request, $id) {
            $dataatribut = Atribut::find($id);
            $dataatribut->update($request->all());

            return redirect()->route('PpdbAdmin');
        }

        // hapus
        public function HapusPpdb ($id) {
            $dataatribut = Atribut::find($id);
            $dataatribut->delete();

            return redirect()->route('PpdbAdmin');
        }
    // ------------------------------ PPDB end ------------------------------



    


    

    

    

   

    public function Ppdb () {
        return view ('admin.ppdb');
    }

    
}
