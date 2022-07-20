<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-galeri.css" />

    <!-- Tambahan -->
    <!-- Font - Inter Bold 40 -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Title -->
    <title>Galeri - SDN 1 Purwokerto Kulon</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container-fluid">
            <!-- <h1>SDN 1 PURWOKERTO KULON</h1> -->
            <div class="row">
                <div class="col-sm-4 bg-white text-black text-start" id="img-header-TWH"><img src="img/index/TWH.png"
                        width="100px" class="img-fluid" /></div>
                <div class="col-sm-4 bg-white text-black text-center" id="txt-header">SDN 1 PURWOKERTO KULON</div>
                <div class="col-sm-4 bg-white text-black text-end" id="img-header-BC"><img
                        src="img/index/BanyumasColor.png" width="100px" class="img-fluid" /></div>
            </div>
        </div>
    </header>
    <!-- Akhir dari Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-white bs5" style="background-color: #282a35">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" id="bg-nav">
                <a id="button-nav" class="nav-link text-white" href="index.html">Beranda</a>
                <a id="button-nav" class="nav-link text-white" href="berita.html">Berita</a>
                <a id="button-nav" class="nav-link active text-white" style="background-color: #00a859"
                    aria-current="page" href="#">Galeri</a>
                <a id="button-nav" class="nav-link text-white" href="data.html">Data</a>
            </div>
        </div>
    </nav>
    <!-- Akhir dari Navbar -->

    <!-- Our Gallery -->
    <section id="gallery" class="vh-80 d-flex justify-content-center
            overflow-hidden p-4 flex-column">
        <p class="h2 pb-4">Our Gallery</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button class="" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" class="" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" class="" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" class="" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" class="" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h4>Layanan & Fasilitas</h1>
                        <div class="row">
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/1.jpg" class="w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Mushola</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/2.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Perpustakaan Tampak Depan</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/3.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Perpustakaan Tampak Dalam</h4>
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <h4>Layanan & Fasilitas</h1>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/4.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Parkiran</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/5.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Tempat Cuci Tangan</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/6.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Tempat Sampah</h4>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <h4>Kegiatan</h1>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/7.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Guru Mengajar</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/8.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Siswa Belajar</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/9.jpg" class="d-block w-100
                                    rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Siswa Bermain</h4>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <h4>Lainnya</h1>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/10.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Pencegahan Virus</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/11.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Siswa Mencuci Tangan</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/12.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Guru</h4>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <h4>Lainnya</h1>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/13.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Gerbang Sekolah</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/14.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Ruang Kelas Tampak Depan</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/15.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Lorong Sekolah</h4>
                            </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <h4>Lainnya</h1>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/16.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Lapangan Sekolah</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/17.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Karya Siswa</h4>
                            </div>
                            <div class="col overflow-hidden position-relative">
                                <img src="img/galeri/18.jpg" class="d-block
                                    w-100 rounded" alt="..." />
                                <h4 class="position-absolute h-100 w-100 top-0
                                    bg-gradient-dark rounded d-flex
                                    align-items-end text-white p-4">
                                    Tanaman</h4>
                            </div>
                    </div>
                </div>
            </div>
            <div class="w-100 d-flex align-items-center
                    justify-content-between top-0 bottom-0 position-absolute">
                <button class="carousel-control-prev bg-dark rounded-circle" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next bg-dark rounded-circle" type="button"
                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        </div>
        <!-- End of Content -->

        <!-- Footer -->
        <footer>
            <!-- Start Contact -->
            <section class="contact" id="contact">
                <div class="container">
                    <div class="content">
                        <div class="box form">
                            <form>
                                <input type="text" placeholder="Masukkan Nama" />
                                <input type="text" placeholder="Masukan Email" />
                                <input type="text" placeholder="Masukan No. HP" />
                                <textarea placeholder="Masukkan Pesan"></textarea>
                                <button type="submit">Kirim Pesan</button>
                            </form>
                        </div>
                        <div class="box text">
                            <h2>SDN 1 PURWOKERTO KULON</h2>
                            <p class="title-p">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <div class="info">
                                <ul>
                                    <li><span class="fa fa-map-marker"></span> Jln. DI Panjaitan Gang Karangbaru III
                                        No.50 Kecamatan Purwokerto Selatan Kabupan Banyumas</li>
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        (0281) 6577339
                                    </li>
                                    <li><span class="fa fa-envelope"></span> info@Lorem.com</li>
                                </ul>
                            </div>
                            <div class="copy">&copy;Copyright 2022. All Right Reserved</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact -->
        </footer>
        <!-- Akhir dari Footer -->

        <!--Script Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>

        <!--Script menghubungkan ke jquery-->
        <script src="jquery-3.6.0.min.js"></script>

        <!--Script menghubungkan ke js-->
        <script src="/js/script.js"></script>
</body>

</html>