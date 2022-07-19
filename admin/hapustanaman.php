<?php 

$ambil = $koneksi->query("SELECT * FROM tanaman WHERE id_tanaman='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_produk = $pecah['foto_tanaman'];
if (file_exists("../foto_tanaman/$fototanaman"))
{
	unlink("../foto_tanaman/$fototanaman");
}

$koneksi->query("DELETE FROM tanaman WHERE id_tanaman='$_GET[id]'");

echo "<script>alert('tanaman sudah dihapus');</script>";
echo "<script>location='index.php?halaman=tanaman';</script>";

?>
