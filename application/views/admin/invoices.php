<div class="container-fluid">

	<div class="row text-gray-900">
		<h4>INVOICES PEMESANAN PRODUK</h4>
	</div>
	<div class="row text-gray-900 text-center">
	<table class="table table-bordered text-gray-900">
		<tr>
			<th>ID invoices</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Tanggal Pemesanan</th>
			<th>Status Pengiriman</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php foreach($invoices as $inv): ?>
			<tr>
				<td><?= $inv["id_invoices"]; ?></td>
				<td><?= $inv["nama"]; ?></td>
				<td><?= $inv["alamat"]; ?></td>
				<td><?= $inv["tgl_pesan"]; ?></td>
				<td> <?= $inv["status"]; ?></td>
				<td><a href="<?= base_url("invoices/detail/") . $inv["id_invoices"]; ?>" class="btn btn-primary">Detail</a></td>
				<td><a href="<?= base_url("invoices/pengiriman/") . $inv["id_invoices"]; ?>" class="btn btn-danger">Ubah Status</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>
</div>
