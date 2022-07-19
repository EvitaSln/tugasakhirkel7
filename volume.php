<?php
include "koneksi.php";

?>
<html>
    <head>
		<meta http-equiv="refresh" content="60" > 
        <title>Data PPM Nutrisi Pakcoy</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <style>
            body{
                background: white;
                
            }
            
            #my-chart{
                background: green;
                padding: 20px;
            }
            
        </style>
    </head>
    <body>
        <br>
        <br>
        <br>
    <h1 class="center">Tabel Pengujian Volume Kolam (liter)</h1>


        <div id="my-chart" style="width: 100%; height: 400px;"></div>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart'],
                'mapsApiKey': ''   // her eyou can put you google map key
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                    ['ID', 'Volume Kolam',],
                     <?php
                     $chartQuery = "SELECT * FROM (SELECT * FROM tugasakhir6 ORDER BY id DESC LIMIT 70) tugasakhir6 ORDER BY id ASC";
					 //$chartQuery = "SELECT * FROM (SELECT * FROM tugas WHERE waktu_2 > '2022-05-16 17:39:39' AND waktu_2 < '2022-05-16 17:40:08')  ORDER BY waktu_2 ASC"; // This used to check based explicit time!
                     $chartQueryRecords = mysqli_query($koneksi, $chartQuery);
                        while($row = mysqli_fetch_assoc($chartQueryRecords)){
                            echo "['".$row['timestamp']."',".$row['volume(liter)'].", ],";
                        }
                     ?>
                ]);

                var options = {
                   
                };

                var chart = new google.visualization.LineChart(document.getElementById('my-chart'));
                chart.draw(data, options);
            }
        </script>
        <b><br><br>Kembali ke <a href="otomatis.php">Sistem Monitoring</a></b>
    </head>
</body>
</html>