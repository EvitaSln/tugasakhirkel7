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
                                <li><a href="pilihtanaman.php">Pilih Tanaman</a></li>
                                <li><a href="pilihfitur.php">Monitoring</a></li>
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

    <div class="hero-section set-bg" data-setbg="img/tanaman6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text">
                        <h1>Classes</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->
    <section class="about-team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="section-title">
                        <h2>Tentang Kami!</h2>
                        <p>Kami dari kelompok 07 Tugas Akhir yang terdiri dari 3 orang. satu laki-laki dan dua perempuan. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-team-member">
                        <div class="team-member-pic">
                            <img src="img/team/member-4.jpg" alt="">
                        </div>
                        <div class="team-member-desc">
                            <h3>Project Manager</h3>
                        </div>
                        <div class="team-member-data pribadi">
                            <h5>Data Pribadi</h5>
                            <ul>
                                <li>Nama    : Pijor Tobing</li>
                                <li>NIM     : 13319029</li>
                                <li>Kelas   : D3 Teknologi Komputer </li>
                                <li>ig      : joytobing_</li>
                                <li>wa      : 0813-8520-0914</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-4">
                    <div class="single-team-member">
                        <div class="team-member-pic">
                            <img src="img/team/member-2.jpeg" alt="" >
                        </div>
                        <div class="team-member-desc">
                            <h3>Anggota</h3>
                        </div>
                        <div class="team-member-data pribadi">
                            <h5>Data Pribadi</h5>
                            <ul>
                                <li>Nama    : Evita Silaen</li>
                                <li>NIM     : 13319027</li>
                                <li>Kelas   : D3 Teknologi Komputer </li>
                                <li>ig      : evitasln_</li>
                                <li>wa      : 0821-6484-6763</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-4">
                    <div class="single-team-member">
                        <div class="team-member-pic">
                            <img src="img/team/member-3.jpeg" alt="">
                        </div>
                        <div class="team-member-desc">
                            <h3>Anggota</h3>
                        </div>
                        <div class="team-member-data pribadi">
                            <h5>Data Pribadi</h5>
                            <ul>
                                <li>Nama    : Tiarma Gurning</li>
                                <li>NIM     : 13319003</li>
                                <li>Kelas   : D3 Teknologi Komputer</li>
                                <li>ig      : tiarma_el</li>
                                <li>wa      : 0812-6424-7167</li>
                            </ul>
                        </div>
                    </div>
                </div>

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