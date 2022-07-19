<?php
session_start();
    //koneksi ke database 
include 'koneksi.php';

//jika tidak memiliki akun
if (!isset($_SESSION["user"]))
{
    echo "<script>alert('silahkan login');</script>";
    echo "<script>location='login.php';</script>";

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
    <meta http-equiv="refresh" content="60" > 
    <title>Tugas Akhir Kelompok 7</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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

        /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

            body{
                background: white;
                
            }
            
            #my-chart{
                background: green;
                padding: 20px;
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
    <!-- Hero Section End -->
    <!-- Classes Section Begin -->
    <!-- Header End -->
      <section class="kontent">
            <div class="container">
                <h1>Fitur Otomatis</h1>
                <hr>
                

                <div class="col-md-25">
            <a href="manual.php"><img src="img/pakcoy.jpg" width='30%' height='30%' alt=""></a>
            <h2 class="center"><b>Pakcoy<b></h2>
            <br>
            <hr/>
            <h5 class="center">Tabel Pengujian Pakcoy (PPM)</h5>
            <br>
            
            <table class="table table-bordered">
	<thead>
		<th bgcolor=#green>Hari</th>
		<th bgcolor=#D3D3D3>Minggu 2</th>
		<th bgcolor=#D3D3D3>Minggu 3</th>
		<th bgcolor=#D3D3D3>Minggu 4</th>
		<th bgcolor=#D3D3D3>Minggu 5</th>
		<th bgcolor=#D3D3D3>Minggu 6</th>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM `tugasakhir7` WHERE id in (1,2,3,4,5,6,7)"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td bgcolor=#green><?php echo $nomor; ?></td>
			<td bgcolor=#D3D3D3><?php echo $pecah['data']; ?></td>
			<td bgcolor=#D3D3D3></td>
			<td bgcolor=#D3D3D3></td>
			<td bgcolor=#D3D3D3></td>
			<td bgcolor=#D3D3D3></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<br>
            <hr/>
            <h5 class="center">Tabel Ketinggian Air (Cm)</h5>
            <br>
            
            <table class="table table-bordered">
	<thead>
		<th bgcolor=#green>Hari</th>
		<th bgcolor=#D3D3D3>Minggu 2</th>
		<th bgcolor=#D3D3D3>Minggu 3</th>
		<th bgcolor=#D3D3D3>Minggu 4</th>
		<th bgcolor=#D3D3D3>Minggu 5</th>
		<th bgcolor=#D3D3D3>Minggu 6</th>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM `tugasakhir6` WHERE id in (1,2,3,4,5,6,7)"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td bgcolor=#green><?php echo $nomor; ?></td>
			<td bgcolor=#D3D3D3><?php echo $pecah['data']; ?></td>
			<td bgcolor=#D3D3D3></td>
			<td bgcolor=#D3D3D3></td>
			<td bgcolor=#D3D3D3></td>
			<td bgcolor=#D3D3D3></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
           
            <!--  <label class="switch">
             <input type="checkbox">
             <a href ="pemberitahuan.php?id" class="slider round">--On</a>
        </label>

       <table border="1" align="center">
            <tr>
                <td>On/Off</td>
            </tr>
        </table> -->

        
        
        </div>
            
        <h5 class="center">Grafik Pengujian Pakcoy (PPM)</h5>


<div id="my-chart" style="width: 100%; height: 400px;"></div>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart'],
        'mapsApiKey': ''   // her eyou can put you google map key
    });
    google.charts.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
            ['ID', 'PPM',],
             <?php
             $chartQuery = "SELECT * FROM (SELECT * FROM tugasakhir7 ORDER BY id DESC LIMIT 70) tugasakhir7 ORDER BY id ASC";
             //$chartQuery = "SELECT * FROM (SELECT * FROM tugas WHERE waktu_2 > '2022-05-16 17:39:39' AND waktu_2 < '2022-05-16 17:40:08') ladang_1 ORDER BY waktu_2 ASC"; // This used to check based explicit time!
             $chartQueryRecords = mysqli_query($koneksi, $chartQuery);
                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                    echo "['".$row['timestamp']."',".$row['data'].", ],";
                }
             ?>
        ]);

        var options = {
           
        };

        var chart = new google.visualization.LineChart(document.getElementById('my-chart'));
        chart.draw(data, options);
    }

    
</script>

<div>
    
</div>

<a>Grafik Pengujian Ketinggian Air<a href="test.php"> Click Here</a>
<br>
<br><br>
<br><br>
<br>
      

  
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