<h2>Ubah user</h2>


<?php 

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "<pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $pecah['email_user']; ?>">
	</div>
	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_user']; ?>">
	</div>
	<div class="form-group">
		<label>No.Telp</label>
		<input type="number" class="form-control" name="no" value="<?php echo $pecah['telepon_user']; ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>	
</form>

 <!-- <?php
	if (isset($_POST['ubah']))
	{
		
			$koneksi->query("UPDATE user SET email_user= '$_POST[email]',
				nama_user='$_POST[nama]', telepon_user='$_POST[no]' WHERE id_user = '$_GET[id]'");
		}
		echo "<script>alert('data user telah diubah');</script>";
		echo "<script>location='index.php?halaman=user;'</script>";
?> -->