<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prestasi</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Prestasi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

   
   <!-- Prestasi Start -->
   <div class="prestasi">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-1">Prestasi</h1>
                    <div class="line-dec mx-auto mb-4"></div>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ( $prestasis as $row )
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a data-bs-toggle="modal" data-bs-target="#detail{{ $row->id }}">
                        <div class="team-item bg-light h-100">
                            <div class="img-item">
                                <img src="{{ asset('file/Prestasi/' . $row->foto) }}" class="img-fluid" alt="">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <div class="text-heading">
                                    <p class="mb-0">Juara {{ $row->juara }}</p>
                                </div>
                                <div class="text-caption">
                                    <p class="pb-4">{{ $row->jenis }}</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <!-- Modal -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="detail{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row ">
                                            <div class=" col-md-12 col-12 mb-3 ">
                                                <img src="{{ asset('file/Prestasi/' . $row->foto) }}" class="img-fluid" alt="">
                                            </div>
                                            <div class=" col-md-12 col-12 text-center">
                                                <div class="text-heading">
                                                    <p class="mb-0">Juara {{ $row->juara }}</p>
                                                </div>
                                                <div class="text-caption">
                                                    <p class="pb-4">{{ $row->jenis }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Prestasi End -->
    


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