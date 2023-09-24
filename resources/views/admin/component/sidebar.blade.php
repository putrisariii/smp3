<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('admin/index') ? 'active' : '' }}">
                    <a href="/admin/index">
                        <i class="fas fa-home text-white"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item mt-2 {{ request()->is('admin/beranda') ? 'active' : '' }}">
                    <a href="/admin/beranda">
                        <i class="fas fa-home text-white"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="nav-item mt-2 {{ request()->is('admin/pengajar-staf') ? 'active' : '' }}">
                    <a href="/admin/pengajar-staf">
                        <i class="fas fa-users text-white"></i>
                        <p>Pengajar & Staf</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/berita','admin/pengumuman') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-table text-white"></i>
                        <p>Berita Pengumuman</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/berita') ? 'active' : '' }}">
                                <a href="/admin/berita">
                                    <span class="sub-item">Berita</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/pengumuman') ? 'active' : '' }}">
                                <a href="/admin/pengumuman">
                                    <span class="sub-item">Pengumuman</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('admin/prestasi') ? 'active' : '' }}">
                    <a href="/admin/prestasi">
                        <i class="fa fa-award text-white"></i>
                        <p>Prestasi</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/ekstrakurikuler') ? 'active' : '' }}">
                    <a href="/admin/ekstrakurikuler">
                        <i class="fa fa-gamepad text-white"></i>
                        <p>Ekstrakurikuler</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/ppdb','admin/form-ppdb') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#table">
                        <i class="fa fa-school text-white"></i>
                        <p>PPDB</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="table">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/ppdb') ? 'active' : '' }}">
                                <a href="/admin/ppdb">
                                    <span class="sub-item">Atribut</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/form-ppdb') ? 'active' : '' }}">
                                <a href="/admin/form-ppdb">
                                    <span class="sub-item">Formulir PPDB</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('admin/kritik-saran') ? 'active' : '' }}">
                    <a href="/admin/kritik-saran">
                        <i class="fa fa-comment text-white"></i>
                        <p>Kritik & Saran</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
