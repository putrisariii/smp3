<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kritik dan Saran</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Kritik dan Saran</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    {{-- Kritik-Saran --}}
    <div class="kritik-saran">
      <div class="container-xxl py-5">
          <div class="container bg-white p-lg-5 p-4">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h4 class="mb-5">Kirimkan kritik dan saranmu untuk SMPN 3 Sungai Kakap yang lebih baik</h4>
          </div>
          <form action="/kritik-saran" method="POST" enctype="multipart/form-data" id="myForm">
            @csrf
            <div class="row">
              <div class="form-floating col-md-6 mb-4">
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput" class="mr-3">Nama lengkap</label>
              </div>
              <div class="form-floating col-md-6 mb-4">
                <input type="text" name="telpon" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">No Telepon</label>
              </div>
              <div class="form-floating col-md-6 mb-4">
                <input type="text" name="whatsapp" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">No Whatsapp</label>
              </div>
              <div class="form-floating col-md-6 mb-4">
                <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Email</label>
              </div>
              <div class="form-floating col-md-12 mb-4">
                <textarea class="form-control" name="pesan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Isi pesan</label>
              </div>
            </div>
            <button type="submit"  class="btn btn-primary btn-rounded" >Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Kritik-saran end -->

 

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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.js"></script>
<script>
   document.getElementById('myForm').addEventListener('submit', function(event) {
      // event.preventDefault();
  
      
      // Simulasikan pengiriman data ke server
      // Di sini Anda dapat menambahkan logika untuk mengirim data ke backend
      
      // Setelah data terkirim berhasil
     
      
      // Atau, jika ada respon dari server yang mengindikasikan data berhasil terkirim
      // if (response.success) {
      //   Swal.fire({
      //     title: 'Data Terkirim!',
      //     text: 'Data berhasil terkirim.',
      //     icon: 'success',
      //     confirmButtonText: 'Ok'
      //   });
      // }
    });
</script>
</html>