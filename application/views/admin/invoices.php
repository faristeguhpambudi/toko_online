<div class="container-fluid">

	<div class="row text-gray-900">
		<h4>INVOICES PEMESANAN PRODUK</h4>
	</div>
	<div class="row text-gray-900 text-center">
	<table class="table table-bordered">
		<tr>
			<th>ID invoices</th>
			<th>Nama Pemesan</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php foreach($invoices as $inv): ?>
			<tr>
				<td><?= $inv["id_invoices"]; ?></td>
				<td><?= $inv["nama"]; ?></td>
				<td><?= $inv["alamat"]; ?></td>
				<td><?= $inv["tgl_pesan"]; ?></td>
				<td><?= $inv["batas_bayar"]; ?></td>
				<td><a href="<?= base_url("invoices/detail/") . $inv["id_invoices"]; ?>" class="btn btn-warning">Detail</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>
</div>
