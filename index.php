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
     <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(2.37515, 99.14232),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
                                <li><a href="pilihtanaman.php">Pilih Tanaman</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="daftar.php">Daftar</a></li>
                              <?php if (isset($_SESSION["user"])): ?>
                                <li><a href="logout.php">logout</a></li>
                                
                               <?php else: ?> 
                                <li><a href="login.php">login</a></li>
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
    <!-- Hero Section Begin -->
    
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <div class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="img/tanaman6.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-text">
                                <h1>Automated Nutrition Doser For Hidroponic Based on IOT</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/tanaman2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-text">
                                <h1>Apa Kelebihan Tanaman Hidroponik?</h1>
                                <p>1. Tidak membutuhkan tanah <br>
                                2. Pertumbuhan tanaman akan lebih cepat <br>
                                3. Tidak perlu melakukan penyiraman tanaman seperti bercodok tanam pada umumnya <br>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/tanaman2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-text">
                                <h1>Apa kekurangan Tanaman Hidroponik?</h1>
                                <p>1. Metode ini cenderung membutuhkan modal yang besar <br>
                                2. perangkat pemeliharaan metode hidroponik juga masih terbilang langka<br>
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
>            


    <!-- Class Booking Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto text-center">
                    <div class="section-title">
                        <h1>Dengan Hidroponik Berjuang Membenahi Desa </h1>
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
                            3. Istirahat Yang Banyak<br> 
                            4. Bacot</p>
                           
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
                        <a href="login.php" class="primary-btn callto-btn">Join Now</a>
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