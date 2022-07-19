<?php
session_start(); 
//mendapatkan id tanaman dari url
$id_tanaman = $_GET['id'];


if(isset($_SESSION['keranjang'][$id_tanaman]))
{
	$_SESSION['keranjang'][$id_tanaman]+= 1;
}

else
{
	$_SESSION['keranjang'][$id_tanaman] = 1;
}

 ?>
<script>
            if (confirm('Tanaman dipilih, lanjut pemilihan Fitur')) {
                window.location.assign('pilihfitur.php?idTanaman=<?php echo $id_tanaman ?>');
            } else {
                window.history.back();
              }
</script>
