<?php
include('fun.php');
?>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script src="node_modules/chart.js/dist/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="graph_table.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>
    <?php include('nav.html');?>

    <!-- ##### STATISTIK PENDUDUK ##### -->
    <section class="cool-facts-area bg-img section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="section-heading text-center">
                        <h2>STATISTIK PENDUDUK</h2>
                        <p>Data statistik penduduk Negeri Roho</p>
                    </div>
                    <div class="row">

                        <!-- Single Cool Facts Area -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                                <div class="cf-icon">
                                    <i class="fa fa-users" style="font-size:50px;color:#58d68d;"></i>
                                </div>
                                <div class="cf-content">
                                    <h2><span class="counter"><?= getJumlahPenduduk($conn); ?></span></h2>
                                    <h6>Jiwa</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts Area -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                                <div class="cf-icon">
                                    <i class="fa fa-street-view" style="font-size:50px;color:#58d68d;"></i>
                                </div>
                                <div class="cf-content">
                                    <h2><span class="counter"><?= getJumlahKepalaKeluarga($conn); ?></span></h2>
                                    <h6>Kepala Keluarga</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts Area -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                                <div class="cf-icon">
                                    <i class="fa fa-male" style="font-size:50px;color:#58d68d;"></i>
                                </div>
                                <div class="cf-content">
                                    <h2><span class="counter"><?= getJumlahPendudukByJenkel(1, $conn); ?></span></h2>
                                    <h6>Laki-laki</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts Area -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                                <div class="cf-icon">
                                    <i class="fa fa-female" style="font-size:50px;color:#58d68d;"></i>
                                </div>
                                <div class="cf-content">
                                    <h2><span class="counter"><?= getJumlahPendudukByJenkel(2, $conn); ?></span></h2>
                                    <h6>Perempuan</h6>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section-heading text-center">
                        <h2>Jenis Kelamin</h2>
                        <p>Grafik Data Demografi Berdasar Jenis Kelamin</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-9">
                            <canvas id="canvasJenkel"></canvas>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <table id="tableJeniskelamin" class="display" width="100%"></table>
                        </div>
                    </div>

                    <!-- Kelompok Umur -->
                    <div class="section-heading text-center">
                        <h2>Kelompok Umur</h2>
                        <p>Grafik Data Demografi Berdasar Kelompok Umur</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <canvas id="canvasGender"></canvas>
                        </div>
                    </div>



                    <div class="section-heading text-center">
                        <h2>Agama</h2>
                        <p>Grafik Data Demografi Berdasar Agama</p>
                    </div>
                    <canvas id="canvasAgama"></canvas>


                    <div class="section-heading text-center">
                        <h2>Pekerjaan</h2>
                        <p>Grafik Data Demografi Berdasar Pekerjaan</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-8">
                            <canvas id="canvasPekerjaan"></canvas>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <table id="tablePekerjaan" class="display" width="100%"></table>
                        </div>
                    </div>



                    <div class="section-heading text-center">
                        <h2>Pendidikan</h2>
                        <p>Grafik Data Demografi Berdasar Pendidikan Sedang Ditempuh</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-8">
                            <canvas id="canvasPendidikan"></canvas>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <table id="tablePendidikan" class="display" width="100%"></table>
                        </div>
                    </div>
                    <hr>

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
    <!-- Data tables -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>

</html>