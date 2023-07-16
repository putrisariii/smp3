<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Berita </title>
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
                    <h1 class="display-3 text-white animated slideInDown">Berita</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

   
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
                            <img class="mb-3" src="assets/img/berita-1.jpg" style="height: 550px; border-radius: 8px;">
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