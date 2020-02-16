<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Negeri Roho - Informasi Tentang Negeri Roho</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <script src="node_modules/chart.js/dist/Chart.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    <script src="graph.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Beranda</a></li>
                                    <li><a href="#">Profil</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Sejarah Negeri Roho</a></li>
                                            <li><a href="#">Perangkat Negeri</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Potensi</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Pertanian</a></li>
                                            <li><a href="#">Pariwisata</a></li>
                                            <li><a href="#">UKM</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Data Statistik</a></li>
                                    <li><a href="#">Transparansi Keuangan</a></li>
                                    <li><a href="#">Berita</a></li>
                                </ul>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(gallery/ekspedisi.jpeg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Mari berwisata ke Negeri Roho</h2>
                                <p>Bila berwisata mari kita jaga kelestarian lingkungan dan jangan merusak tempat umum.</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn alazea-btn active">HUBUNGI KAMI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(gallery/belajar.jpeg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Selamat Datang di Negeri Roho</h2>
                                <p>Banyak sekali tempat wisata yang dapat Anda kunjungi, baik wisata alam dan budaya.</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn alazea-btn mr-30">SELENGKAPNYA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### STATISTIK PENDUDUK ##### -->
    <section class="cool-facts-area bg-img section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <canvas id="mycanvas"></canvas>
                </div>
                <div class="col-6">

                    <div class="alazea-progress-bar mb-50">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Pemerintah Desa</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Pembangunan Desa</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Pembinaan Kemasyarakatan</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Pemberdayaan Masyarakat</p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="65"></span>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

    </section>
    <!-- ##### ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <p>Jl. Pattimura, Kecamatan Seram Utara,  Kabupaten Maluku Tengah, Provinsi Maluku, Indonesia 97117 </p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BERITA NEGERI</h5>
                            </div>

                            <!-- Single Berita Terkait -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-info">
                                    <a href="#" id='artikelx'></a>
                                </div>
                            </div>

                            <!-- Single Berita Terkait -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-info">
                                    <a href="#" id="artikelxx"></a>
                                </div>
                            </div>

                            <!-- Single Berita Terkait -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-info">
                                    <a href="#" id="artikelxxx"></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>KONTAK KAMI</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Alamat:</span> Jl. Pattimura</p>
                                <p><span>Telepon:</span> +62 85243322433</p>
                                <p><span>Email:</span> info.negeriroho@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://tantekos.com" target="_blank">bvqento</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="#">Beranda</a></li>
                                    <li><a href="#">Pedoman Media Siber</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


</body>

</html>