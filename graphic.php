<?php
session_start();
 //koneksi ke database 
 include 'koneksi.php';

 //jika tidak ada sessio user (belum Login)
 if (!isset($_SESSION["user"]) OR empty($_SESSION["user"]))
  {
 	echo "<script>alert('silahkan Login terlebih dahulu');</script>";
 	echo "<script>location='login.php';</script>";
 	exit();
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

    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>
    <style type="text/css">      
      #container { 
         margin-left: auto; margin-right: auto; width: 70%; height: 70%; margin: 0; padding: 0; 
      } 
    </style>
    
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
    <!-- Header End -->
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
    <section class="riwayat">
	<div class="container">
		<center><h1>Grafik Sistem Monitoring</h1></center><br>	
	</div>
</section>
<div id="container"></div>
    <script>
      function getData() {
          return [
            ['01-04',900],
            ['02-04',910],
            ['03-04',920],
            ['04-04',930],
            ['05-04',950],
            ['06-04',970],
            ['07-04',990],
            ['08-04',1010],
            ['09-04',1050],
            ['10-04',1100],
            ['11-04',1180],
            ['12-04',1200],
            ['13-04',1250],
            ['14-04',1300],
            ['15-04',1320],
            ['16-04',1350]
        ];
    }
            // create a data set on our data
            var dataSet = anychart.data.set(getData());

            // map data for the line chart,
            // take x from the zero column and value from the first column
            var seriesData = dataSet.mapAs({ x: 0, value: 1 });

            // create a line chart
            var chart = anychart.line();
            // configure the chart title text settings
            chart.title(' (PPM)');

            // set the y axis title
            chart.yAxis().title('Dosis Nutrisi Tanaman Hidroponik = (PPM)');
            // create a line series with the mapped data
            var lineChart = chart.line(seriesData);

            // set the container id for the line chart
            chart.container('container');

            // draw the line chart
            chart.draw();


            

    </script>
<hr>
<br>



        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
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

    <section class="riwayat">
	<div class="container">
		<center><h1>Grafik Sistem Monitoring</h1></center><br>	
	</div>
</section>
<br>
<div id="container"></div>
    <script>
      function getData() {
          return [
            ['01-04',15],
            ['02-04',16],
            ['03-04',17],
            ['04-04',18],
            ['05-04',19],
            ['06-04',19],
            ['07-04',20],
            ['08-04',21],
            ['09-04',22],
            ['10-04',28],
            ['11-04',30],
            ['12-04',31],
            ['13-04',32],
            ['14-04',32],
            ['15-04',33],
            ['16-04',35]
        ];
    }
            // create a data set on our data
            var dataSet = anychart.data.set(getData());

            // map data for the line chart,
            // take x from the zero column and value from the first column
            var seriesData = dataSet.mapAs({ x: 0, value: 1 });

            // create a line chart
            var chart = anychart.line();
            // configure the chart title text settings
            chart.title(' (Ketinggian Air)');

            // set the y axis title
            chart.yAxis().title('Ketinggian Air = (cm)');
            // create a line series with the mapped data
            var lineChart = chart.line(seriesData);

            // set the container id for the line chart
            chart.container('container');

            // draw the line chart
            chart.draw();


            

    </script>
<hr>
<br>



        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
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