<div class="container-fluid">
	<div class="row text-gray-900">
		<h4>Keranjang Beanja</h4>
	</div>
	<div class="row text-gray-900 text-center">
		<table class="table table-bordered table-hover">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Qty</th>
				<th>Harga</th>
				<th>Sub Total</th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach($this->cart->contents() as $item) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $item["name"]; ?></td>
					<td><?= $item["qty"]; ?></td>
					<td><?= $item["price"]; ?></td>
					<td>Rp <?= $item["subtotal"]; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
			<tr>
				<td colspan="4">Total</td>
				<td>Rp <?= $this->cart->total(); ?></td>
			</tr>
		</table>
		<div class="float-right">
			<a href="<?= base_url("dashboard/hapusKeranjang"); ?>" class="btn btn-md btn-danger">Hapus Keranjang</a>
			<a href="<?= base_url("dashboard"); ?>" class="btn btn-md btn-primary">Lanjut Belanja</a>
			<a href="<?= base_url("dashboard/pembayaran"); ?>" class="btn btn-md btn-danger">Chekout/Bayar</a>
		</div>
	</div>
</div>
</div>
