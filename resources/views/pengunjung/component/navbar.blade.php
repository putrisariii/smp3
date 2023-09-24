    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <div class="container">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img class="img-fluid me-2" src="/assets/img/logo-smpn3sungaikakap.png" alt=""/>
                <h5 class="m-0 text-primary">SMP Negeri 3 <br>Sungai Kakap</h5>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link {{ Request::is('beranda') ? 'active' : '' }}">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('tentang-sekolah', 'dosen-staf') ? 'active' : '' }}" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="tentang-sekolah" class="dropdown-item">Tentang Sekolah</a>
                            <a href="dosen-staf" class="dropdown-item">Data Pengajar dan Staf</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('berita', 'pengumuman') ? 'active' : '' }}" data-bs-toggle="dropdown">Berita dan Pengumuman</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="berita" class="dropdown-item">Berita</a>
                            <a href="pengumuman" class="dropdown-item">Pengumuman</a>
                        </div>
                    </div>
                    <a href="prestasi" class="nav-item nav-link {{ Request::is('prestasi') ? 'active' : '' }}">Prestasi</a>
                    <a href="ekstrakurikuler" class="nav-item nav-link {{ Request::is('ekstrakurikuler') ? 'active' : '' }}">Ekstrakurikuler</a>
                    <a href="ppdb" class="nav-item nav-link {{ Request::is('ppdb') ? 'active' : '' }}">PPDB</a>
                    <a href="kritik-saran" class="nav-item nav-link {{ Request::is('kritik-saran') ? 'active' : '' }}">Kritik dan Saran</a>
                </div>
            </div>
        </div>
        
    </nav>
    <!-- Navbar End -->