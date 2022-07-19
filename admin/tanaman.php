<h2>Data Tanaman yang telah dipilih</h2>

<table class="table table-bordered">
	<thead>
		<th>No</th>
		<th>Nama Tanaman</th>
		<th>Mode Fitur</th>
		<th>foto</th>
		<th>Keterangan</th>
		<th>aksi</th>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tanaman"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_tanaman']; ?></td>
			<td><?php echo $pecah['mode']; ?></td>
		
			<td>
				<img src="../foto_tanaman/<?php echo $pecah['foto_tanaman']; ?>" width="100">
			</td>
			<td><?php echo $pecah['keterangan']; ?></td>
			<td>
				<a href="index.php?halaman=hapustanaman&id=<?php echo $pecah['id_tanaman']; ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=ubahtanaman&id=<?php echo $pecah['id_tanaman']; ?>" class="btn btn-warning">edit</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahtanaman" class="btn btn-primary">Tambah tanaman</a>