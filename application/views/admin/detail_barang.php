
<div class="container-fluid">
	<div class="row text-gray-900">
	<div class="card">
		<div class="card-header">
			Detail Produk
		</div>
		<div class="card-body">
			<?php foreach($barang as $b): ?>
			<div class="row">
				<div class="col-md-4">
					<img src="<?= base_url(); ?>assets/uploads/<?= $b["gambar"]; ?>" class="card-img-top">
				</div>
				<div class="col-md-8">
					<p>Nama Barang : <?= $b["nama_barang"]; ?></p>
					<p>Keterangan : <?= $b["keterangan"]; ?></p>
					<p>Kategori : <?= $b["kategori"]; ?></p>
					<p>Stok : <?= $b["stok"]; ?></p>
					<h1 class="badge badge-success">Rp <?= $b["harga"]; ?></h1>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		</div>
	</div>
</div>
</div>
