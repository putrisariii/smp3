<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPDB</title>
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

     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

    <div class="ppdb">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">PPDB</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    
        <div class="container">
            @foreach ( $atributs as $row )
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="card">
                        <div class="card-body card-ppdb">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <i class="fa-regular fa-calendar-days"></i>
                                <h3>Tanggal Pendaftaran </h3>
                                <p >
                                    {{Carbon\Carbon::parse($row->tanggal_awal)->isoformat('dddd, D MMMM Y')}} - 
                                    {{Carbon\Carbon::parse($row->tanggal_akhir)->isoformat('dddd, D MMMM Y')}}
                                </p>
                                <div class="line-dec mx-auto mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="card">
                        <div class="card-body card-ppdb">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <i class="fa-solid fa-users"></i>
                                <h3>Kuota Penerimaan</h3>
                                <p>{{ $row->kuota }}</p>
                                <div class="line-dec mx-auto mt-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5">
                    <div class="card">
                        <div class="card-body card-ppdb">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <i class="fa-solid fa-location-dot"></i>
                                <h3>Lokasi Pendaftaran</h3>
                                <p>{{ $row->lokasi }}</p>
                                <p class="mt-2 mb-2">atau</p>
                                <div class="text-center">
                                    @if (strtotime($row->tanggal_awal) <= strtotime('today') && strtotime($row->tanggal_akhir) >= strtotime('today'))
                                        <a href="form-ppdb" class="btn btn-outline-primary" role="button" aria-pressed="true">Pendaftaran Online</a>
                                    @else
                                        <button class="btn btn-primary" onclick="showSweetAlert()">Pendaftaran Online</button>
                                    @endif

                                </div>
                                {{-- <button type="submit" class="btn btn-primary btn-rounded mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><p>Pendaftaran Online</p></button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body card-sk">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h3 class="mb-2">Syarat Pendaftaran</h3>
                                <div class="line-dec mx-auto mb-4"></div>
                            </div>
                            <div class="row d-flex justify-cntent-center">
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Ijazah/SKL (Surat Keterangan Lulus) Asli dan Fotocopy (2 Lembar)</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Akta Kelahiran Asli dan Fotocopy</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Kartu Keluarga Asli dan Fotocopy</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Rapor Asli</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Fotocopy KTP Orang Tua</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Pas Photo berwarna menggunakan seragam sekolah 3x4 dan 2x3</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Fotocopy KIA/KIP/KIS/Piagam Prestasi bagi yang memiliki</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <i class="fa-solid fa-bullseye align-self-center p-3"></i>
                                    <div class="align-self-center">
                                        <p>Seluruh berkas di masukkan ke dalam MAP (Laki-laki MAP = Biru Perempuan MAP = Merah)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
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
    
    <script>
        function showSweetAlert() {
            swal({
                title: 'Tidak Bisa Melakukan Pendaftaran',
                text: 'Waktu Pendaftaran Sudah Lewat dan Belum Dibuka',
                icon: 'warning',
                buttons: {
                    cancel: {
                        text: 'OK',
                        value: null,
                        visible: true,
                        className: 'btn btn-primary'
                    }
                }
            });
        }
    </script>

    <script>
        function display
        element.style.display = "none";
    </script>
    
    
   

    
    
</body>

</html>