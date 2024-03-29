﻿<?php
session_start();
    //koneksi ke database 
    $koneksi =  new mysqli("localhost","root","","test");

    if(!isset($_SESSION['admin']))
    {
        echo "<script>alert('anda harus login');</script>";
        echo "<script>location='login.php';</script>";
        header('location:login.php');
        exit();
    }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Akhir Kelompok 7</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h4><strong>Tampilan Admin</strong></h4></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> VegShop &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">keluar</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/logo1.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-home fa-2x"></i>Home</a></li>
                    <li><a href="index.php?halaman=user "><i class="glyphicon glyphicon-user fa-2x"></i>User</a></li>
                    <li><a href="index.php?halaman=tanaman"><i class="fa fa-archive fa-2x"></i>Tanaman yang dipilih</a></li>                    
                    <li><a href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i>Logout</a></li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="tanaman")
                    {
                        include 'tanaman.php';
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                     elseif ($_GET['halaman']=="user")
                    {
                        include 'user.php';
                    }  
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif($_GET['halaman']=="tambahtanaman")
                    {
                        include 'tambahtanaman.php';
                    }
                     elseif($_GET['halaman']=="tambahuser")
                    {
                        include 'tambahuser.php';
                    }
                     elseif($_GET['halaman']=="hapustanaman")
                    {
                        include 'hapustanaman.php';
                    }
                     elseif($_GET['halaman']=="hapususer")
                    {
                        include 'hapususer.php';
                    }
                    elseif($_GET['halaman']=="ubahtanaman")
                    {
                        include 'ubahtanaman.php';
                    }
                     elseif($_GET['halaman']=="ubahuser")
                    {
                        include 'ubahuser.php';
                    }
                     elseif($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif($_GET['halaman']=="pembayaran")
                    {
                        include 'pembayaran.php';
                    }
                    elseif($_GET['halaman']=="ongkir")
                    {
                        include 'ongkir.php';
                    }
                    elseif($_GET['halaman']=="hapusongkir")
                    {
                        include 'hapusongkir.php';
                    }
                    elseif($_GET['halaman']=="tambahongkir")
                    {
                        include 'tambahongkir.php';
                    }
                     elseif($_GET['halaman']=="packing")
                    {
                        include 'packing.php';
                    }
                     elseif($_GET['halaman']=="hapuspacking")
                    {
                        include 'hapuspacking.php';
                    }
                     elseif($_GET['halaman']=="updateongkir")
                    {
                        include 'updateongkir.php';
                    }
                     elseif($_GET['halaman']=="tambahpacking")
                    {
                        include 'tambahpacking.php';
                    }
                     elseif($_GET['halaman']=="updatepacking")
                    {
                        include 'updatepacking.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
