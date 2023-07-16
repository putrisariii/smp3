<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Formulir PPDB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="/assets/fontawesome-free/css/all.min.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('pengunjung.component.navbar')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Formulir PPDB</h1>
                </div>
            </div>
        </div>
    </div>
  
    <div class="kritik-saran">
        <div class="container-xxl py-5">
            <div class="container bg-white p-lg-5 p-4">
                <h3 class="mb-4 text-center">Formulir Pendaftaran</h3>
                    <form action="/form-ppdb" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <h5>Data Diri</h5>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="mr-3">Nama Siswa (sesuai ijazah SD)</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nisn" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">NISN Siswa</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="ttl" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Tempat dan Tanggal Lahir Siswa(sesuai skl/ijazah sd)</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="jenis_kelamin" class="form-select" id="floatingSelectGrid">
                                <option selected>Pilih</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                                </select>
                                <label for="floatingSelectGrid">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="agama" class="form-select" id="floatingSelectGrid">
                                <option selected>Pilih</option>
                                <option value="1">Islam</option>
                                <option value="2">Protestan</option>
                                <option value="2">Katolik</option>
                                <option value="2">Hindu</option>
                                <option value="2">Buddha</option>
                                <option value="2">Khonghucu</option>
                                </select>
                                <label for="floatingSelectGrid">Agama</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="anak_ke" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Anak ke</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="saudara" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Jumlah Saudara Kandung</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="hobi" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Hobi</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="alamat" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Alamat Lengkap</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="telpon_ortu" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No Telepon Orang Tua</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="telpon_siswa" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No Telepon Calon Peserta Didik</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="pernah_juara" class="form-select" id="floatingSelectGrid">
                                <option selected>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                                </select>
                                <label for="floatingSelectGrid">Memiliki Prestasi (pernah juara lomba)</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input name="prestasi" type="text" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Memiliki Prestasi di Bidang</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="punya_kip" class="form-select" id="floatingSelectGrid">
                                <option selected>Pilih</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                                </select>
                                <label for="floatingSelectGrid">Memiliki Kartu PKH/KIP</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="no_kip" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No Kartu PKH/KIP</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="penyakit" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Penyakit Yang Pernah diderita</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="asal_sd" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Asal Sekolah (SD)</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="no_kk" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No kartu keluarga (KK) / Surat domisili</label>
                            </div>
                                <h5>Data Orang Tua</h5>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nama_ayah" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Nama Ayah Kandung</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="ttl_ayah" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Tempat dan Tanggal Lahir Ayah</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nik_ayah" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No KTP/NIK Ayah</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="pendidikan_ayah" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Pendidikan Terakhir Ayah</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Pekerjaan Ayah</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nama_ibu" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Nama Ibu Kandung</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="ttl_ibu" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Tempat dan Tanggal Lahir Ibu</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nik_ibu" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No KTP/NIK Ibu</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="pendidikan_ibu" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Pendidikan Terakhir Ibu</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Pekerjaan Ibu</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="penghasilan_ortu" class="form-select" id="floatingSelectGrid">
                                <option selected>Pilih</option>
                                <option value="1">Di bawah Rp 500.000</option>
                                <option value="2">Rp 500.000 s.d Rp 1.000.000</option>
                                <option value="2">Rp 1.000.000 s.d Rp 3.000.000</option>
                                <option value="2">Rp 3.000.000 s.d Rp 5.000.000</option>
                                <option value="2">Di atas Rp 5.000.000</option>
                                </select>
                                <label for="floatingSelectGrid">Penghasilan Orang Tua</label>
                            </div>
                                <h5>Data Wali</h5>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nama_wali" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Nama Wali Siswa</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="alamat_wali" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Alamat Wali</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="telpon_wali" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">No Telepon Wali</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="pekerjaan_wali" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Pekerjaan Wali</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="penghasilan_wali" class="form-select" id="floatingSelectGrid">
                                <option selected>Pilih</option>
                                <option value="1">Di bawah Rp 500.000</option>
                                <option value="2">Rp 500.000 s.d Rp 1.000.000</option>
                                <option value="2">Rp 1.000.000 s.d Rp 3.000.000</option>
                                <option value="2">Rp 3.000.000 s.d Rp 5.000.000</option>
                                <option value="2">Di atas Rp 5.000.000</option>
                                </select>
                                <label for="floatingSelectGrid">Penghasilan Wali</label>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary btn-rounded">Kirim</button>
                </form>
            </div>
        </div>  
    </div>
        
        

    @include('pengunjung.component.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>