<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>profil</title>
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

    <!-- Guru Start -->
    <div class="guru">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-2">Tenaga Pengajar dan Staf SMPN 3 Sungai Kakap</h1>
                    <div class="line-dec mx-auto mb-4"></div>
                </div>
                <div class="row g-4">
                    @foreach ( $pengajars as $row )
                    <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <a data-bs-toggle="modal" data-bs-target="#detailGuru{{ $row->id }}">
                        <div class="team-item bg-light h-100">
                            <div class="img-item">
                                <img src="{{ asset('file/Pengajar/' . $row->foto) }}" class="img-fluid" alt="">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <div class="text-heading">
                                    <p class="mb-0">{{ $row->nama }}</p>
                                </div>
                                <div class="text-caption">
                                    <p class="pb-4">Guru {{ $row->mapel}}</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- Modal Guru-->

                    <div class="modal fade" id="detailGuru{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                        <div class="modal-detail">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header justify-content-end">
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 col-12">
                                                <div class="img-item img-rounded">
                                                    <img src="{{ asset('file/Pengajar/' . $row->foto) }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class=" pb-0">
                                                    <div class="text-heading">
                                                        <p>Nama Lengkap</p>
                                                    </div>
                                                    <div class="text-caption">
                                                        <p class="mb-0">{{ $row->nama }}</p>
                                                    </div>
                                                    <div class="text-heading">
                                                        <p>Mengajar Pelajaran</p>
                                                    </div>
                                                    <div class="text-caption">
                                                        <p class="mb-0">{{ $row->mapel }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    {{-- Modal Guru end --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Guru End -->

    
        

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