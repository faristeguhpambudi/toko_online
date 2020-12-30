
<div class="container-fluid">
	<div class="row text-gray-900">
		<h2>ID INVOICES = <?= $invoices["id_invoices"]; ?> | DETAIL INVOICES</h2>
	</div>
	<div class="row text-gray-900 text-center">
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Harga Subtotal</th>
		</tr>
		<?php $i = 1;
		foreach($pesanan as $p): ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $p["nama_barang"]; ?></td>
				<td><?= $p["qty"]; ?></td>
				<td>Rp <?= $p["harga"]; ?></td>
				<td>Rp <?= $p["harga"] * $p["qty"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</div>
</div>
</div>
