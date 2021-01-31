<div class="container-fluid">
 
	<div class="row text-gray-900">
		<h4>PEMBELIAN SAYA</h4>
	</div>
	<div class="row text-gray-900 text-center">
	<?php if($pembelian == null) : ?>
		<div class="text-center">
		<div class="alert alert-danger alert-dismissible fade show mr-2" role="alert">
		<strong>Anda belum memesan apapun! Lanjutkan belanja!</strong> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
		</div>
	<?php endif; ?>
	<div class="text-center">
		<?= $this->session->flashdata("pesan"); ?>
	</div>
	<table class="table table-bordered text-gray-900">
		<tr>
			<th>ID invoices</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Tanggal Pemesanan</th>
			<th>Status Barang</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php foreach($pembelian as $pembelian): ?>
			<tr>
				<td><?= $pembelian["id_invoices"]; ?></td>
				<td><?= $pembelian["nama"]; ?></td>
				<td><?= $pembelian["alamat"]; ?></td>
				<td><?= $pembelian["tgl_pesan"]; ?></td>
				<td><?= $pembelian["status"]; ?></td>
				<td>
					<a href="<?= base_url("pembelian/detail/") . $pembelian["id_invoices"]; ?>" class="btn btn-primary">Detail</a>
					<a href="<?= base_url("pembelian/terima_pesanan/") . $pembelian["id_invoices"]; ?>" class="btn btn-success" onclick="return confirm('yakin pesanan telah diterima?');">Pesanan Diterima</a>
					<a href="<?= base_url("pembelian/batal_pesan/") . $pembelian["id_invoices"]; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin batalkan pesanan ini?');">Batalkan Pesanan</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>
</div>
