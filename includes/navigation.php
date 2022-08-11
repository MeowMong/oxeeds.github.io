<body>
    <!-- Header -->
    <header id="topHeader" class="container my-2">
        <img src="assets/images/TWH.png" alt="" width="50" class="me-3">
        <a class="navbar-brand me-3 fs-5 fw-bold" href="index2.php">SDN 1 PURWOKERTO KULON</a>
        <img src="assets/images/BanyumasColor.png" alt="" width="50">
    </header>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-light navbar-expand-lg bg-light container rounded shadow p-3 bg-body">
        <div class="container mx-2 my-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'index') == TRUE) {
                                                echo "active border border-success rounded link-success";
                                            } ?>" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle <?php if (strpos($_SERVER['REQUEST_URI'], 'profil') == TRUE) {
                                                                echo "active border border-success rounded link-success";
                                                            } ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="profil.php#profil-Visi">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="profil.php#profil-Tujuan">Tujuan Sekolah</a></li>
                            <li><a class="dropdown-item" href="profil.php#profil-Sejarah">Sejarah</a></li>
                            <li><a class="dropdown-item" href="profil.php#profil-Struktur">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="profil.php#profil-Data">Data Guru & Pegawai</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle <?php if (strpos($_SERVER['REQUEST_URI'], 'kurikulum') == TRUE) {
                                                                echo "active border border-success rounded link-success";
                                                            } ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kurikulum
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="kurikulum.php#kurikulum-Kurikulum">Kurikulum SDN 1 Purwokerto Kulon</a></li>
                            <li><a class="dropdown-item" href="kurikulum.php#kurikulum-Program">Program</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle <?php if (strpos($_SERVER['REQUEST_URI'], 'kesiswaan') == TRUE) {
                                                                echo "active border border-success rounded link-success";
                                                            } ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="kesiswaan.php#kesiswaan-Tatatertib">Tata Tertib</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php#kesiswaan-Kesiswaan">Kesiswaan SDN 1 Purwokerto Kulon</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php#kesiswaan-Program">Program</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php#kesiswaan-Program">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php#kesiswaan-Prestasi">Prestasi</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle <?php //if (strpos($_SERVER['REQUEST_URI'], 'galeri') == TRUE) {
                                                                // echo "active border border-success rounded link-success";
                                                            // } ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="galeri.php#galeri-Fasilitas">Fasilitas Sekolah</a></li>
                            <li><a class="dropdown-item" href="galeri.php#galeri-Ekstrakurikuler">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="galeri.php#galeri-Prestasi">Prestasi</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'berita') == TRUE) {
                                                echo "active border border-success rounded link-success";
                                            } ?>" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?php if (strpos($_SERVER['REQUEST_URI'], 'kontak') == TRUE) {
                                                echo "active border border-success rounded link-success";
                                            } ?>" href="respon_kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="admin/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>