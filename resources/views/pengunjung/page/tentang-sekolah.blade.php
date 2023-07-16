<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>profil</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Profil</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Identitas -->
    <div class="tentang">
        <div class="row ">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card" style="margin: 1px; margin-bottom:20px; border-radius:20px;">
                    <div class="card-body card-sk">
                        <div class="col-lg-12 col-md-12">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h3 class="mb-2">Identitas</h3>
                                <div class="line-dec mx-auto mb-4"></div>
                            </div>
                            <div class="row d-flex justify-cntent-center">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                            <td>Nama Sekolah</td>
                                            <td>SMP Negeri 3 SUngai Kakap</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Nomor Statistik</td>
                                            <td>201130215500</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Provinsi</td>
                                            <td>Kalimantan Barat</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Otonomi Daerah</td>
                                            <td>Kabupaten Kubu Raya</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Kecamatan</td>
                                            <td>Sungai Kakap</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Desa/Kelurahan</td>
                                            <td>Punggur Kecil</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Jalan</td>
                                            <td>Pelita III</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Kode Pos</td>
                                            <td>78381</td>
                                            </tr>
                            
                                            <tr>
                                            <td>Status Sekolah</td>
                                            <td>Negeri</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="">Identitas</h1>
                    <div class="line-dec mx-auto"></div>
    </div>
    <div class="container-xxl py-5">
        
    </div> --}}

    <!-- Identitas End -->

    <!-- Visi Misi Start -->
        <div class="visi-misi">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="">Visi dan Misi</h1>
                    <div class="line-dec mx-auto"></div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-6 col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-12 p-3 wow zoomIn" data-wow-delay="0.1s">
                                <img class="img-fluid" src="assets/img/galeri-2.jpg" alt="">
                            </div>
                            <div class="col-lg-5 col-md-12 p-3 align-self-end wow zoomIn" data-wow-delay="0.3s">
                                <img class="img-fluid" src="assets/img/galeri-1.jpg" alt="">
                            </div>
                            <div class="col-lg-8 col-md-12 p-3 wow zoomIn" data-wow-delay="0.5s">
                                <img class="img-fluid" src="assets/img/galeri-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-3 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <div class="text-center">
                            <h3 class="p-3" >Visi</h3>
                            <p>Berprestasi Dalam “INTAN” (Intelensi, Takwa Dan Nasionalis)</p>
                        </div>
                        <div class="text-center">
                            <h3 class="p-3" >Misi</h3>
                        </div>
                        <div class="container-misi">
                            <div class="d-flex mb-3">
                                <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                <div class="align-self-center">
                                    <p>Melaksanakan Pendidikan Yang Efektif, Inovatif Untuk Mengoptimalkan Potensi Siswa, Memprogramkan, Melatih Siswa Untuk Berprestasi Sesuai Dengan Bakat Dan Minat Siswa</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                <div class="align-self-center">
                                    <p>Menerapkan Kedisiplinan/Tata Tertib Yang Demokratis Terhadap Seluruh Warga Sekolah.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                <div class="align-self-center">
                                    <p>Menumbuhkan Penghayatan Kepada Ajaran Agama Yang Dianut Sesuai Dengan Tujuan Pendidikan Nasional.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                <div class="align-self-center">
                                    <p>Menerapkan Rasa Kepedulian Sosial Terhadap Warga Sekolah Maupun Masyarakat Disekitar Sekolah.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                <div class="align-self-center">
                                    <p>Membentuk Pribadi Yang Cinta Tanah Air Dan Bangsa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi End -->

    <!-- struktur -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="">Struktur Organisasi</h1>
        <div class="line-dec mx-auto"></div>
    </div>
    <div class="container-xxl py-5">
        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="/assets/img/struktur2.png" alt="">
    </div>
   
     <!-- struktur End -->  

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