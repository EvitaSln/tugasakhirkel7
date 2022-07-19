<?php

include 'koneksi.php';
session_start(); 
//mendapatkan id tanaman dari url
$id_tanaman = $_GET['id'];



$QUERY_TANAMAN = "SELECT * FROM tugasakhir7 ORDER BY tugasakhir7.id DESC LIMIT 1";
$QUERY_WAKTU = "SELECT * FROM rentangminggu ORDER BY rentangminggu.id ASC LIMIT 1";
$result = $koneksi->query($QUERY_TANAMAN);
$result1 = $koneksi->query($QUERY_WAKTU);
$row = $result->fetch_assoc();
$row1 = $result1->fetch_assoc();

$data = $row['data'];
$data1 = $row1['rentangppm'];
$id = $row1['id']

 ?>
<script>
            if (confirm('Nutrisi tanaman pakcoy sekarang adalah <?php echo $data ?> PPM!, Disarankan untuk memberikan nutrisi agar memenuhi standard rentang <?php echo $data1 ?> ')) {
                window.location.assign('manual2.php');
            } else {
                window.history.back();
            }</script>"
