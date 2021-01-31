<div class="container-fluid">
<div class="row">
	<a href="<?= base_url("data_barang/tambah"); ?>" class="btn btn-primary mb-2"><i class="fas fa-fw fa-plus-circle mr-2"></i>Tambah data barang</a>
</div>
<div class="text-center">
	<?= $this->session->flashdata("pesan"); ?>
</div>
<div class="row text-gray-900 text-center">
	<table class="table table-bordered text-gray-900">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
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
				<td><?= $b["kategori"]; ?></td>
				<td><?= $b["harga"]; ?></td>
				<td><?= $b["stok"]; ?></td>
				<td><a href="<?= base_url("data_barang/edit/") . $b["id_barang"]; ?>" class="btn btn-warning"><i class="fas fa-fw fa-edit"></i></a></td>
				<td><a href="<?= base_url("data_barang/detailBarang/") . $b["id_barang"]; ?>" class="btn btn-primary"><i class="fas fa-fw fa-info-circle"></i></a></td>
				<td><a href="<?= base_url("data_barang/hapus/") . $b["id_barang"]; ?>" class="btn btn-danger" onclick="return confirm('yakin hapus data barang ini?');"><i class="fas fa-fw fa-trash-alt"></i></a></td>
			</tr>
		<?php $i++ ?>
		<?php endforeach; ?>
	</table>
</div>
</div>

</div>
