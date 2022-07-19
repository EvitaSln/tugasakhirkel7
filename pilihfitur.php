

<?php


session_start();
    //koneksi ke database 
$id_tanaman = $_GET['idTanaman'];
include 'koneksi.php';

if(empty($_SESSION["keranjang"]) OR  !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('tanaman kosong,silahkan pilih tanaman terlebih dahulu');</script>";
	echo "<script>location='pilihtanaman.php';</script>";
}
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
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>
<style>
		body{
			font-family: 'Roboto';
		}
		table {
			border-collapse: collapse;
            align: center;
		}
 
		table, th, td {
			border: 1px solid black;
			padding: 10px;
            align: center;

		}

        div.col-md-25{
	        text-align: center;
	        padding: 30px 20px;	
        }
	</style>

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
        <!-- Hero Section Begin -->
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
    <!-- Hero Section End -->
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <section class="konten">
    	
    <div class="container">
    <div class="container" style="margin-top: 20px; color:white;">
</div> 

            <h1><b>Pilih Fitur<b></h1>

            <div class="col-md-25">
           
            <a href="manual.php"><img src="img/pakcoy.jpg" width='30%' height='30%' alt=""></a>
            
    </table>

    
            <br><br>
        <a href="otomatis.php" class="btn btn-success">Otomatis</a>
        <a href="manual.php?idTanaman=<?php echo $id_tanaman ?>" class="btn btn-success ">Manual</a>
        </div>
        
            
        
    </div>
    <br><br><br><br>
</section>
  
    
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