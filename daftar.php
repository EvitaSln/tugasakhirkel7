<?php
session_start();
    //koneksi ke database 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Akhir Kelompok 7</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
   <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <nav class="main-menu mobile-menu">
                          <ul>
                          <li><a class="active" href="index.php">Home</a></li>
                                
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="daftar.php">Daftar</a></li>
                              <?php if (isset($_SESSION["user"])): ?>
                              
                                <?php else: ?> 
                              
                            <?php endif ?>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
   
                    



<div class="booking-classes">
        <div class="container-fluid">
            <div class="booking-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="booking-heading set-bg" data-setbg="img/tanaman3.jpg">
                                    <div class="booking-inner-text">
                                        <h2>Daftar Akun</h2>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="booking-form">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                       <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                        <input type="email" class="form-control" name="email"
                                         placeholder="Email">
                                        
                                        <input type="password" class="form-control" name="password"
                                         placeholder="Password">
                                        
                                        
                                    </div>
                                    <div class="col-lg-6">
                                         <input type="text" class="form-control" name="alamat"
                                         placeholder="Alamat">
                                          <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                                      
                                        <input type="submit" name="daftar" value="daftar" class="submit-btn" >

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 

if (isset( $_POST["daftar"]))
{
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];

    $ambil = $koneksi->query("SELECT * FROM user WHERE email_user='$email'");    
    $yangcocok = $ambil->num_rows;

    if ($yangcocok==1)
    {
        echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
        echo "<script>location='daftar.php';</script>";
    }
    else
    {
        $koneksi->query("INSERT INTO user
            (email_user,password_user,nama_user,telepon_user,alamat_user)VALUES('$email','$password','$nama','$telepon','$alamat')");

        echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
        echo "<script>location='login.php';</script>";
    }

    }


 ?>

    <!-- Class Booking Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto text-center">
                    <div class="section-title">
                        <h2>Dengan Hidroponik Berjuang Membenahi Desa </h2>
                        <p> </p>
                    </div>
               
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Client Says Section Begin -->
    <section class="client-says set-bg" data-setbg="img/tanaman5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="client-text">
                        <h2>“Nature’s beauty is a gift that cultivates appreciation and gratitude.” </h2>
                        <h4>Louie Schwartzberg,<span>American director</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Says Section End -->
    <!-- Lifestyles Section Begin -->
    <section class="lifestyle-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="lifestyle-text">
                        <div class="section-title">
                            <h2>Lifestyle & Diet</h2>
                            <p>1. Bersahabat dengan Sarapan, secara tidak langsung sarapan akan mencegahmu makan berlebih sepanjang hari <br>
                            2. Biasakan Makan Teratur<br>
                            3. Istirahat Yang Banyak </p>
                            <a href="#" class="primary-btn">Read More</a>
                        </div>
                    </div>
                </div>
                
    <!-- Lifestyles Section End -->
    <!-
                            </div>
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Boxes Section End -->
    <!-- Call To Section Begin -->
    <section class="callto-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="callto-text">
                        <h2>Come & Train With Us</h2>
                        <p></p>
                        <a href="#" class="primary-btn callto-btn">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Section End -->
    <!-- Map Section Begin -->
    <div class="map">
    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.502986766247!2d99.1566963!3d2.3803122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1653028676657!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        <div class="map-address">
            <div class="map-address-text">
                <ul>
                    <li>Sitoluama, <br />Laguboti, 23580</li>
                    <li>+852 7889 0978 <br />contact@tanamansehat.com</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="reserved"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>