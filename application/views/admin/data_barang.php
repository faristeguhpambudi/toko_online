<div class="container-fluid">
<div class="row">
	<a href="<?= base_url("data_barang/tambah"); ?>" class="btn btn-primary mb-2">Tambah data barang</a>
</div>
<div class="row text-gray-900 text-center">
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php $i =1; ?>
		<?php foreach($barang as $b): ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $b["nama_barang"]; ?></td>
				<td><?= $b["keterangan"]; ?></td>
				<td><?= $b["kategori"]; ?></td>
				<td><?= $b["harga"]; ?></td>
				<td><?= $b["stok"]; ?></td>
				<td><a href="<?= base_url("data_barang/edit/") . $b["id_barang"]; ?>" class="btn btn-warning">Edit</a></td>
				<td><a href="" class="btn btn-info">Detail</a></td>
				<td><a href="<?= base_url("data_barang/hapus/") . $b["id_barang"]; ?>" class="btn btn-danger">Delete</a></td>
			</tr>
		<?php $i++ ?>
		<?php endforeach; ?>
	</table>
</div>
</div>

</div>
