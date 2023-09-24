<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Beranda</title>
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
    


<div class="wrapper">
    <div class="beranda">
    
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
                            <p>SPENTA Suka Hebat</p>
                            <p class="mb-3">SPENTA Suka Berkelas</p>
                        </div>
                    </div>
                    <div class="col-lg-6 cursor-pointer">
                        <div class="owl-carousel header-carousel position-relative">
                            <div class="owl-carousel-item position-relative">
                                <img class="img-fluid img-fix" src="{{ asset('file/Beranda/' . $berandas->first()->foto) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <?php
                                    $text = $berandas->first()->deskripsi;
                                    echo ($text);
                                ?> 
                                </div>
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                                </div>
                            </div>
                            <div class="owl-carousel-item position-relative">
                                <img class="img-fluid" src="{{ asset('file/Beranda//' . $berandas->skip(1)->first()->foto) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <?php
                                    $text = $berandas->skip(1)->first()->deskripsi;
                                    echo ($text);
                                ?> 
                                </div>
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                                </div>
                            </div>
                            <div class="owl-carousel-item position-relative">
                                <img class="img-fluid" src="{{ asset('file/Beranda//' . $berandas->skip(2)->first()->foto) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <?php
                                    $text = $berandas->skip(2)->first()->deskripsi;
                                    echo ($text);
                                ?> 
                                </div>
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

        @include('pengunjung.component.sosmed')
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
                                <img class="img-fluid" src="{{ asset('file/Beranda//' . $berandas->skip(3)->first()->foto) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h1 class="mb-2">Sambutan Kepala Sekolah</h1>
                            <div class="line-dec mx-auto mb-4"></div>
                            <p class="mb-4">Assalamualaikum Warahmatullahi Wabarakatuh<br> Salam sejahtera untuk kita semua</p>
                            <h5 class="mb-4">Selamat Datang Di Website Resmi SMP Negeri 3 Sungai Kakap</h5>
                            <p>                            
                                <?php
                                $text = $berandas->skip(3)->first()->deskripsi;
                                echo ($text);
                                ?> 
                            </p>
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
                                    <img class="img-fluid" src="{{ asset('file/Beranda//' . $berandas->skip(4)->first()->foto) }}" alt="">
                                </div>
                                <div class="col-lg-5 col-md-12 p-3 align-self-end wow zoomIn" data-wow-delay="0.3s">
                                    <img class="img-fluid" src="{{ asset('file/Beranda//' . $berandas->skip(5)->first()->foto) }}" alt="">
                                </div>
                                <div class="col-lg-8 col-md-12 p-3 wow zoomIn" data-wow-delay="0.5s">
                                    <img class="img-fluid" src="{{ asset('file/Beranda//' . $berandas->skip(6)->first()->foto) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-3 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                            <div class="text-center">
                                <h3 class="p-3" >Visi</h3>
                                <p>Terwujudnya SMP Negeri 3 Sungai Kakap “BERKELAS” (Bersih, Estetik, Religius, Kreatif, Etika, Lugas, Adaptif dan Sportif) yang trampil menggunakan IT dan berbudaya lingkungan hidup dalam era globalisasi</p>
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

       

        

        <!-- Guru Start -->
        <div class="guru">
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-2">Tenaga Pengajar SMPN 3 Sungai Kakap</h1>
                        <div class="line-dec mx-auto mb-4"></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                            @foreach ( $pengajars as $row )
                            <div class="team-item bg-light h-100" data-toggle="modal" data-target="#detailGuru{{ $row->id }}">
                                <div class="img-item">
                                    <img src="{{ asset('file/Pengajar/' . $row->foto) }}" class="img-fluid" alt="">
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <div class="text-heading">
                                        <p class="mb-0">{{ $row->nama }}</p>
                                    </div>
                                    <div class="text-caption">
                                        <p class="pb-4">Guru {{ $row->mapel }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @foreach ( $pengajars as $row )
                        <!-- Modal -->
                        <div class="modal-detail">
                            <div class="modal fade" id="detailGuru{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header justify-content-end">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Guru End -->
        <div class="text-center">
            <a href="dosen-staf" class="btn btn-outline-primary p-3" role="button" aria-pressed="true">Selengkapnya</a>
        </div>

        <!-- Berita Start -->
        <div class="berita">
            <div class="container-xxl py-5">
                <div class="text-center mx-auto" style="max-width: 500px">
                    <div class="display-6 animated slideInDown">
                        <p>Berita Terkini</p>
                    </div>
                <div class="line-dec mb-4 mx-auto"></div>
                </div>
                <div class="container">
                    <div class="row g-3">
                        @foreach ($beritas->take(3) as $row)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item h-100">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="col-12 img-item img-rounded p-3">
                                        <img class="img-fluid" src="{{ asset('file/Berita/' . $row->foto) }}" alt=""/>
                                    </div>
                                    <div class="col-12 p-3">
                                        <div class="text-heading">
                                            <a href="/berita">
                                                <p><?php $num_char = 50; $text = $row->judul; echo substr($text, 0, $num_char) . '...';?></p>
                                            </a>
                                        </div>
                                        <div class="text-caption">
                                            <p><?php $num_char = 50; $text = $row->narasi; echo substr($text, 0, $num_char) . '...';?></p>
                                        </div>
                                        <label>{{Carbon\Carbon::parse($row->tanggal)->isoformat('dddd, D MMMM Y')}}</label>
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
        
        <div class="text-center">
            <a href="berita" class="btn btn-outline-primary p-3" role="button" aria-pressed="true">Selengkapnya</a>
        </div>
        <!-- Berita End -->

         <!-- Prestasi Start -->
         <div class="prestasi">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-1">Prestasi</h1>
                        <div class="line-dec mx-auto mb-4"></div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                            @foreach ( $prestasis as $row )
                            <div class="team-item bg-light h-100" data-toggle="modal" data-target="#detailPrestasi{{ $row->id }}">
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
                            @endforeach
                        </div>
                        @foreach ( $prestasis as $row )
                        <!-- Modal -->
                        <div class="modal-detail">
                            <div class="modal fade" id="detailPrestasi{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header justify-content-end">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="img-item img-rounded">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="prestasi" class="btn btn-outline-primary p-3" role="button" aria-pressed="true">Selengkapnya</a>
        </div>
        <!-- Prestasi End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-1">Kritik dan Saran</h1>
                    <div class="line-dec mx-auto mb-4"></div>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    @foreach($data_kritik->slice(0, 3) as $row)
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="assets/img/user.png" style="width: 80px; height: 80px;">
                            <h5 class="mb-4">{{$row->nama}}</h5>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">{{$row->pesan}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    <!-- Testimonial End -->

    </div>
</div>

@include('pengunjung.component.footer')


    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function(){
            // Aktifkan carousel
            $("#carouselExample").carousel();
    
            // Hentikan auto-rotate saat hover
            $("#carouselExample").hover(function(){
                $(this).carousel('pause');
            }, function(){
                $(this).carousel('cycle');
            });
        });
    </script>
    

</body>

</html>