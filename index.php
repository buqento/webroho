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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>

    <script>
        const data = fetch('https://www.malukuterkini.com/wp-json/wp/v2/posts')
        .then((response) => {
            return response.json();
        })
        .then((artikel) => {

            let titlex = artikel[0].title.rendered
            document.getElementById('artikelx').innerHTML = titlex
            let titlexx = artikel[1].title.rendered
            document.getElementById('artikelxx').innerHTML = titlexx
            let titlexxx = artikel[2].title.rendered
            document.getElementById('artikelxxx').innerHTML = titlexxx

            let title = artikel[0].title.rendered
            let excerpt = artikel[0].excerpt.rendered
            document.getElementById('artikel').innerHTML = title
            document.getElementById('excerpt').innerHTML = excerpt

            let title2 = artikel[1].title.rendered
            let excerpt2 = artikel[1].excerpt.rendered
            document.getElementById('artikel2').innerHTML = title2
            document.getElementById('excerpt2').innerHTML = excerpt2

            let title3 = artikel[2].title.rendered
            let excerpt3 = artikel[2].excerpt.rendered
            document.getElementById('artikel3').innerHTML = title3
            document.getElementById('excerpt3').innerHTML = excerpt3
        })

    </script>

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

    <!-- ##### VISI & MISI ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Visi & Misi</h2>
                        <p>Visi Negeri Roho tahun 2020-2025 : "Terwujudnya Negeri Roho yang Aman, Damai dan Sejahtera".</p>
                    </div>

                    <div class="service-content text-center">
                        <h5>Sumber Daya Manusia</h5>
                        <p>Peningkatan kualitas sumber daya manusia.</p>
                    </div>
                    <div class="service-content text-center">
                        <h5>Pembangunan</h5>
                        <p>Peningkatan pembangunan disegala bidang.</p>
                    </div>
                    <div class="service-content text-center">
                        <h5>Ekonomi</h5>
                        <p>Peningkatan Ekonomi Masyarakat.</p>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- #####  ##### -->

    <!-- ##### SAMBUTAN ##### -->
    <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="img/bg-img/13.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>SAMBUTAN</h2>
                                            <p>Selamat datang di website Negeri Roho</p>
                                        </div>
                                        <p>“Selamat datang di Website Negeri Roho, Kecamatan Wahai, Kabupaten Maluku Tengah. Semoga website ini bermanfaat bagi semua pihak, seiring berkembangnya teknologi informasi dan komunikasi tentunya negeri mulai berbenah dan berinovasi, agar semua informasi mudah dan dapat di akses oleh semua lapisan masyarakat.”</p>
                                        <div class="testimonial-author-info">
                                            <h6>Yeter Berasa</h6>
                                            <p>Kepala Negeri Roho</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### ##### -->

    <!-- ##### TENTANG NEGERI ##### -->
    <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>NEGERI ROHO</h2>
                        <p>Negeri Roho, Seram Utara, Maluku Tengah</p>
                    </div>
                    <p>Masarakat Negeri Roho merupakan masyarakat tradisional yang berada dalam kawasan Taman Nasional Manusela dan berada di sekitar KPH Wai Sapalewa. Pemanfaatan Lahan oleh setiap keluarga adalah 5 ha namun hanya dikelola1 ha karena yang sisanya harus diwariskan kepada generasi berikutnya. Pemanfaatan lahan menggunakan sistem agroforestry namun secara tradisional yang oleh masyarakat kedua desa dikenal dengan istilah Dusung. Tanaman yang ditanam berupa tanaman perkebunan dan tanaman pangan yang memiliki nilai ekonomis yaitu Kakao dan Kelapa serta singkong, pisang dan ubi talas. Tanaman Kehutanan yang ditanam yaitu Kayu Besi, Durian dan Linggua.</p>

                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area bg-overlay mb-100">
                        <img src="img/bg-img/23.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=kKQ6ErmZyBM" class="video-icon">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- #####  ##### -->

    <!-- ##### STATISTIK PENDUDUK ##### -->
    <section class="cool-facts-area bg-img section-padding-100-0">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>STATISTIK PENDUDUK</h2>
                        <p>Data statistik penduduk Negeri Roho</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <i class="fa fa-users" style="font-size:50px;color:lime;"></i>
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">975</span></h2>
                            <h6>Jiwa</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <i class="fa fa-street-view" style="font-size:50px;color:lime;"></i>
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">250</span></h2>
                            <h6>Kepala Keluarga</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <i class="fa fa-male" style="font-size:50px;color:lime;"></i>
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">475</span></h2>
                            <h6>Laki-laki</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <i class="fa fa-female" style="font-size:50px;color:lime;"></i>
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">950</span></h2>
                            <h6>Perempuan</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- ##### ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>KOMUNITAS</h2>
                        <p>Komunitas Masyarakat Negeri Roho</p>
                    </div>

                    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v6.0&appId=2615774338658413&autoLogAppEvents=1"></script>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-100">


                    <div class="fb-page" data-href="https://www.facebook.com/lokerindonesiatimur/" data-tabs="timeline" data-width="900" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lokerindonesiatimur/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lokerindonesiatimur/">Lowongan Kerja Indonesia Timur</a></blockquote></div>
                </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Maps -->
                    <div id="mapid" style="width: 600px; height: 400px;"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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

    <script>
        var mymap = L.map('mapid').setView([-2.795289, 129.497849], 16);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.popup()
        .setLatLng([-2.795289, 129.497849])
        .setContent("Lokasi Negeri Roho")
        .openOn(mymap);

        L.polygon([
            [-2.794100, 129.497430],
            [-2.795107, 129.499018],
            [-2.796500, 129.498417],
            [-2.796875, 129.496218]
        ]).addTo(mymap);


    </script>
</body>

</html>