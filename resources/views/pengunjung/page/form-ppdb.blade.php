<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Formulir PPDB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/img/logo-smpn3sungaikakap.png" rel="icon">

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
                <form action="/form-ppdb" method="POST" enctype="multipart/form-data" id="pendaftaran">
                @csrf
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="data-diri-tab" data-toggle="tab" href="#data-diri" role="tab" aria-controls="data-diri" aria-selected="true">Data Diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="data-orang-tua-tab" data-toggle="tab" href="#data-orang-tua" role="tab" aria-controls="data-orang-tua" aria-selected="false">Data Orang Tua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="data-wali-tab" data-toggle="tab" href="#data-wali" role="tab" aria-controls="data-guru" aria-selected="false">Data Wali</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
                        <h2>Data Diri</h2>
                        <div class="row">
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput" class="mr-3">Nama Siswa (sesuai ijazah SD)</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="nisn" class="form-control" id="nisnInput" placeholder="Password" required>
                                    <label for="floatingPassword">NISN Siswa</label>
                                    @error('nisn')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    <span class="error-message" id="nisnError"></span>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="ttl" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Tempat dan Tanggal Lahir Siswa(sesuai skl/ijazah sd)</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <select name="jenis_kelamin" class="form-select" id="floatingSelectGrid" required>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <label for="floatingSelectGrid">Jenis Kelamin</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <select name="agama" class="form-select" id="floatingSelectGrid" required>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                    <label for="floatingSelectGrid">Agama</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="anak_ke" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Anak ke</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="saudara" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Jumlah Saudara Kandung</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="hobi" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Hobi</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="alamat" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Alamat Lengkap</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="telpon_ortu" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">No Telepon Orang Tua</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="telpon_siswa" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">No Telepon Calon Peserta Didik</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <select name="pernah_juara" class="form-select" id="prestasi" required>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                    </select>
                                    <label for="prestasi">Memiliki Prestasi (pernah juara lomba)</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4" id="val-prestasi" style="display: none">
                                    <input name="prestasi" type="text" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="prestasi">Memiliki Prestasi di Bidang</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <select name="punya_kip" class="form-select" id="kip" required>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                    </select>
                                    <label for="kip">Memiliki Kartu PKH/KIP</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4" id="val-kip" style="display: none">
                                    <input type="text" name="no_kip" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">No Kartu PKH/KIP</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="penyakit" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Penyakit Yang Pernah diderita</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="asal_sd" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Asal Sekolah (SD)</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="no_kk" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">No kartu keluarga (KK) / Surat domisili</label>
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="data-orang-tua" role="tabpanel" aria-labelledby="data-orang-tua-tab">
                        <h2>Data Orang Tua</h2>
                            <div class="row">
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="nama_ayah" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Nama Ayah Kandung</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="ttl_ayah" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Tempat dan Tanggal Lahir Ayah</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="nik_ayah" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">No KTP/NIK Ayah</label>
                                    @error('nik_ayah')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="pendidikan_ayah" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Pendidikan Terakhir Ayah</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="pekerjaan_ayah" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Pekerjaan Ayah</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="nama_ibu" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Nama Ibu Kandung</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="ttl_ibu" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Tempat dan Tanggal Lahir Ibu</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="number" name="nik_ibu" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">No KTP/NIK Ibu</label>
                                    @error('nik_ibu')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="pendidikan_ibu" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Pendidikan Terakhir Ibu</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <input type="text" name="pekerjaan_ibu" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Pekerjaan Ibu</label>
                                </div>
                                <div class="form-floating col-md-6 mb-4">
                                    <select name="penghasilan_ortu" class="form-select" id="floatingSelectGrid" required>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="Di bawah Rp 500.000">Di bawah Rp 500.000</option>
                                    <option value="Rp 500.000 s.d Rp 1.000.000">Rp 500.000 s.d Rp 1.000.000</option>
                                    <option value="Rp 1.000.000 s.d Rp 3.000.000">Rp 1.000.000 s.d Rp 3.000.000</option>
                                    <option value="Rp 3.000.000 s.d Rp 5.000.000">Rp 3.000.000 s.d Rp 5.000.000</option>
                                    <option value="Di atas Rp 5.000.000">Di atas Rp 5.000.000</option>
                                    </select>
                                    <label for="floatingSelectGrid">Penghasilan Orang Tua</label>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="data-wali" role="tabpanel" aria-labelledby="data-wali-tab">
                        <h2>Data Wali</h2>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="nama_wali" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Nama Wali Siswa</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="alamat_wali" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Alamat Wali</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="number" name="telpon_wali" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">No Telepon Wali</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <input type="text" name="pekerjaan_wali" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Pekerjaan Wali</label>
                            </div>
                            <div class="form-floating col-md-12 mb-4">
                                <select name="penghasilan_wali" class="form-select" id="floatingSelectGrid" required>
                                <option value="" disabled selected>--Pilih--</option>
                                <option value="Di bawah Rp 500.000">Di bawah Rp 500.000</option>
                                <option value="Rp 500.000 s.d Rp 1.000.000">Rp 500.000 s.d Rp 1.000.000</option>
                                <option value="Rp 1.000.000 s.d Rp 3.000.000">Rp 1.000.000 s.d Rp 3.000.000</option>
                                <option value="Rp 3.000.000 s.d Rp 5.000.000">Rp 3.000.000 s.d Rp 5.000.000</option>
                                <option value="Di atas Rp 5.000.000">Di atas Rp 5.000.000</option>
                                </select>
                                <label for="floatingSelectGrid">Penghasilan Wali</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-rounded">Kirim</button>
                    </div>
                </div>
            </form>
            </div>
        </div>  
    </div>
        
        

    @include('pengunjung.component.footer')



    <!-- Tambahkan script Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const nisnInput = document.getElementById('nisnInput');
        const nisnError = document.getElementById('nisnError');
  
        nisnInput.addEventListener('input', checkNisnValidity);
        nisnInput.addEventListener('blur', checkNisnValidity);
  
        function checkNisnValidity() {
            const nisn = nisnInput.value;
            const isNumeric = /^\d+$/.test(nisn); // Regex untuk memeriksa apakah input hanya mengandung angka
  
            if (!isNumeric) {
                nisnError.textContent = 'NISN hanya boleh berisi angka!';
                nisnInput.classList.add('error-border');
            } else if (nisn.length > 10) {
                nisnError.textContent = 'NISN tidak boleh lebih dari 10 angka!';
                nisnInput.classList.add('error-border');
            } else {
                nisnError.textContent = '';
                nisnInput.classList.remove('error-border');
            }
        }
    </script>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $('#prestasi').on('change', function () {
            let data = $('#prestasi').val()
            let val = $('#val-prestasi');
            if (data === "1") val.css("display", "block")
            else if (data === "2") val.css("display", "none")
        })
        $('#kip').on('change', function () {
            let data = $('#kip').val()
            let val = $('#val-kip');
            if (data === "1") val.css("display", "block")
            else if (data === "2") val.css("display", "none")
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>