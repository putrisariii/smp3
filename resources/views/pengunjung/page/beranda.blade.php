<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Beranda</title>
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

<div class="wrapper">
    
    @include('pengunjung.component.navbar')

    <!-- ======= Heading Beranda ======= -->
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="animated slideInDown">
                            <h2>Selamat Datang Di Website Resmi</h2>
                            <h2 style="margin-bottom:50px">SMP Negeri 3 Sungai Kakap</h2>
                            <p>Bersama Kita Belajar</p>
                            <p>Bersama Kita Maju</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel header-carousel position-relative">
                            <div class="owl-carousel-item position-relative">
                                <img class="img-fluid" src="assets/img/smpn3-1.jpg" alt="">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                                </div>
                            </div>
                            <div class="owl-carousel-item position-relative">
                                <img class="img-fluid" src="assets/img/smpn3-2.jpg" alt="">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    <!-- End Heading Beranda -->
    
    <!-- intro -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center h-100 pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                <h5 class="mb-3">Membangun masa depan melalui pendidikan yang berkualitas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center h-100 pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-solid fa-street-view text-primary mb-4"></i>
                                <h5 class="mb-3">Menumbuhkan semangat keunggulan dalam diri setiap individu</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center h-100 pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i> 
                                <h5 class="mb-3">Bersama menciptakan lingkungan belajar yang inspiratif dan inklusif</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center h-100 pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-solid fa-medal text-primary  mb-4"></i>
                                <h5 class="mb-3">Ekskulnya dapat mengembangkan bakat dan minat siswa</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- intro End -->

    <!-- Kata Sambutan Start -->
    <div class="kata-sambutan">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid" src="/assets/img/oauyyo7ebzjogltooboy.jpg" alt=""">
                        </div>
                    </div>
                    <div class="col-lg-9 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="mb-2">Sambutan Kepala Sekolah</h1>
                        <div class="line-dec mx-auto mb-4"></div>
                        <p class="mb-4">Assalamualaikum Warahmatullahi Wabarakatuh<br> Salam sejahtera untuk kita semua</p>
                        <h5 class="mb-4">Selamat Datang Di Website Resmi SMP Negeri 3 Sungai Kakap</h5>
                        <p>Website sekolah adalah situs web yang dibuat dan dikelola oleh sebuah sekolah untuk memberikan informasi tentang sekolah...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kata Sambutan End -->


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


    <!-- Prestasi Start -->
    <div class="prestasi">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-1">Prestasi</h1>
                    <div class="line-dec mx-auto mb-4"></div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <a data-bs-toggle="modal" data-bs-target="#ModalPrestasi">
                            <div class="team-item bg-light h-100">
                                <img class="img-fluid" src="assets/img/piala.jpg"  alt="" />
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">Juara 1</h3>
                                    <h5 class="pb-4">Bulutangkis Putra Tingkat Kecamatan Sungai Kakap</h5>
                                </div>
                            </div>
                        </a>
                        <a data-bs-toggle="modal" data-bs-target="#ModalPrestasi">
                            <div class="team-item bg-light h-100">
                                <img class="img-fluid" src="assets/img/piala.jpg"  alt="" />
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">Juara 1</h3>
                                    <h5 class="pb-4">Bulutangkis Putra Tingkat Kecamatan Sungai Kakap</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"> --}}
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center">
    <a href="prestasi" class="btn btn-outline-primary" role="button" aria-pressed="true">Selengkapnya</a>
    </div>
    <!-- Prestasi End -->

    <!-- Modal Prestasi-->
    <div class="modal fade" id="ModalPrestasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row align-items-start">
                        <div class="col-4">
                            <img class="img-fluid" src="assets/img/piala.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <h4 class="mb-0">Juara 1</h4>
                            <h6 class="pb-4">Bulutangkis Putra Tingkat Kecamatan Sungai Kakap</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Prestasi end --}}

    <!-- Guru Start -->
    <div class="guru">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-2">Tenaga Pengajar SMPN 3 Sungai Kakap</h1>
                    <div class="line-dec mx-auto mb-4"></div>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <div class="team-item bg-light h-100">
                            <img class="img-fluid" src="/assets/img/team-1.jpg"  alt="" />
                            <div class="text-center p-4">
                                <h5 class="mb-0">Rusmia Nainggolan</h5>
                                <small>BAhasa Indonesia</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="team-item bg-light h-100">
                            <img class="img-fluid" src="/assets/img/team-1.jpg"  alt="" />
                            <div class="text-center p-4">
                                <h5 class="mb-0">Rusmia Nainggolan</h5>
                                <small>BAhasa Indonesia</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="guru">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-2">Tenaga Pengajar SMPN 3 Sungai Kakap</h1>
                    <div class="line-dec mx-auto mb-4"></div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a data-bs-toggle="modal" data-bs-target="#ModalPengajar">
                            <div class="team-item bg-light h-100">
                                <img class="img-fluid" src="/assets/img/team-1.jpg"  alt="" />
                                <div class="text-center p-4">
                                    <h5 class="mb-0">Rusmia Nainggolan</h5>
                                    <small>BAhasa Indonesia</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                 <div class="team-item bg-light h-100">
                                <img class="img-fluid" src="/assets/img/team-1.jpg"  alt="" />
                                <div class="text-center p-4">
                                    <h5 class="mb-0">Rusmia Nainggolan</h5>
                                    <small>Bahasa Indonesia</small>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light h-100">
                            <img class="img-fluid" src="/assets/img/team-1.jpg"  alt="" />
                            <div class="text-center p-4">
                                <h5 class="mb-0">Rusmia Nainggolan</h5>
                                <small>Bahasa Indonesia</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item bg-light h-100">
                            <img class="img-fluid" src="/assets/img/team-1.jpg"  alt="" />
                            <div class="text-center p-4">
                                <h5 class="mb-0">Rusmia Nainggolan</h5>
                                <small>Bahasa Indonesia</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Guru End -->

    <!-- Modal Guru-->
    <div class="modal fade" id="ModalPengajar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row align-items-start">
                        <div class="col-4">
                            <img class="img-fluid" src="/assets/img/team-1.jpg" alt="">
                        </div>
                        <div class="col-8">
                            <h5 class="mb-0">Susanti, S.Hut, M.Pd</h5>
                            <small>Guru IPA</small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="dosen-staf" class="btn btn-outline-primary" role="button" aria-pressed="true">Selengkapnya</a>
    </div>
    {{-- Modal Guru end --}}


    <!-- Berita Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-2">Berita</h1>
                <div class="line-dec mx-auto"></div>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="assets/img/berita-1.jpg" style="width: 400px; height: 300px; border-radius: 20px">
                    <h5 class="mb-3">Penyerahan Surat Keterangan Lulus siswa/i kelas IX SMP Negeri 3 Sungai Kakap Tahun Ajaran 2022/2023</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Pada hari ini Kamis, 8 Juni 2023 telah dilaksanakan penyerahan Surat Keterangan Lulus siswa/i kelas IX SMP Negeri 3 Sungai Kakap Tahun Ajaran 2022/2023.</p>
                    <a data-bs-toggle="modal" data-bs-target="#ModalBerita">
                    <div type="button" style="text-align-last: right; font-style:italic">Selengkapnya  <i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    </a>
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="assets/img/berita-2.jpg" style="width: 400px; height: 300px; border-radius: 20px">
                    <h5 class="mb-3">Literasi Digital Oleh Mahasiswa IKIP PGRI Pontianak</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <a data-bs-toggle="modal" data-bs-target="#ModalBerita">
                    <div type="button" style="text-align-last: right; font-style:italic">Selengkapnya  <i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    </a>
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="assets/img/berita-2.jpg" style="width: 400px; height: 300px; border-radius: 20px">
                    <h5 class="mb-3">Literasi Digital Oleh Mahasiswa IKIP PGRI Pontianak</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <a data-bs-toggle="modal" data-bs-target="#ModalBerita">
                    <div type="button" style="text-align-last: right; font-style:italic">Selengkapnya  <i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    </a>
                </div>
                <div class="testimonial-item text-center">
                    <img class=" p-2 mx-auto mb-3" src="assets/img/berita-2.jpg" style="width: 400px; height: 300px; border-radius: 20px">
                    <h5 class="mb-3">Literasi Digital Oleh Mahasiswa IKIP PGRI Pontianak</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <a data-bs-toggle="modal" data-bs-target="#ModalBerita">
                    <div type="button" style="text-align-last: right; font-style:italic">Selengkapnya  <i class="fa-solid fa-arrow-right"></i></div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
    <a href="berita" class="btn btn-outline-primary" role="button" aria-pressed="true">Selengkapnya</a>
    </div>
    <!-- Berita End -->

    <!-- Modal Berita-->
    <div class="modal fade" id="ModalBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img class="img-fluid mb-3" src="assets/img/berita-1.jpg" style="border-radius: 8px;">
                            </div>
                            <div class="col-12">
                                <h5 class="mb-5">Penyerahan Surat Keterangan Lulus siswa/i kelas IX SMP Negeri 3 Sungai Kakap Tahun Ajaran 2022/2023</h5>
                                <div class="testimonial-text bg-light">
                                    <p class="mb-0">Pada hari ini Kamis, 8 Juni 2023 telah dilaksanakan penyerahan Surat Keterangan Lulus siswa/i kelas IX SMP Negeri 3 Sungai Kakap Tahun Ajaran 2022/2023.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Berita end --}}

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