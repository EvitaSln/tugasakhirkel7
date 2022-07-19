<h2>Ubah tanaman</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM tanaman WHERE id_tanaman='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<br></br>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama tanaman</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_tanaman']; ?>">
	</div>
	<div class="form-group">
		<label>Harga Rp</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_tanaman']; ?>">
	</div>
	<div class="form-group">
		<label>Berat Gr</label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['berat']; ?>">
	</div>
	<div class="form-group">
		<img src="../foto_tanaman/<?php echo $pecah['foto_tanaman'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok_tanaman']; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Porduk</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			<?php echo $pecah['deskripsi_tanaman']; ?>
		</textarea>
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>	
</form>

<?php
	if (isset($_POST['ubah']))
	{
		$namafoto= $_FILES['foto']['name'];
		$lokasifoto= $_FILES['foto']['tmp_name'];
		// jika foto dirubah
		if(!empty($lokasifoto))
		{
			move_uploaded_file($lokasifoto, "../foto_tanaman/$namafoto");
			$koneksi->query("UPDATE tanaman SET nama_tanaman= '$_POST[nama]',
				harga_tanaman='$_POST[harga]', berat='$_POST[berat]', foto_tanaman= '$namafoto', deskripsi_tanaman = '$_POST[deskripsi]', stok_tanaman='$_POST[stok]' WHERE id_tanaman = '$_GET[id]'");
		}
		else
		{
			$koneksi->query("UPDATE tanaman SET nama_tanaman= '$_POST[nama]',
				harga_tanaman='$_POST[harga]', berat='$_POST[berat]', deskripsi_tanaman = '$_POST[deskripsi]', stok_tanaman='$_POST[stok]' WHERE id_tanaman = '$_GET[id]'");
		}
		echo "<script>alert('data tanaman telah diubah');</script>";
		echo "<script>location='index.php?halaman=tanaman'</script>";
	}
?>