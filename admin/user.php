<h2>Data User</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>email</th>
			<th>nama</th>
			<th>telepon</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['email_user']; ?></td>
			<td><?php echo $pecah['nama_user']; ?></td>
			<td><?php echo $pecah['telepon_user']; ?></td>
			<td>
				<a href="index.php?halaman=hapususer&id=<?php echo $pecah['id_user']; ?>"  class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=ubahuser&id=<?php echo $pecah['id_user']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
</table>
<a href="index.php?halaman=tambahuser" class="btn btn-primary">Tambah User</a>
