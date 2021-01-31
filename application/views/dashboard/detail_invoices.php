
<div class="container-fluid">
	<div class="row text-gray-900">
		<h2>ID INVOICES = <?= $invoices["id_invoices"]; ?> | DETAIL INVOICES</h2>
	</div>
	<div class="row text-gray-900">
	
	<div class="col-lg">
	<div class="text-center">
		<?= $this->session->flashdata("pesan"); ?>
	</div>
	<div class="card">
		<div class="card-header">
			Informasi Detail Pesanan
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-4">
					<img src="<?= base_url(); ?>assets/uploads/buktibayar/<?= $invoices["bukti_bayar"]; ?>" class="card-img-top">
				</div>
				<div class="col-md-8">
					<p>Nama Pemesan : <?= $invoices["nama"]; ?></p>
					<p>Alamat : <?= $invoices["alamat"]; ?></p>
					<p>Telp : <?= $invoices["telp"]; ?></p>
					<p>Pengiriman : <?= $invoices["pengiriman"]; ?></p>
					<p>Pembayaran : <?= $invoices["bank"]; ?></p>
					<p>Tanggal Pembelian : <?= $invoices["tgl_pesan"]; ?></p>
					<p>No Resi : <?= $invoices["resi"]; ?></p>
					<p>Status Pengiriman : <?= $invoices["status"]; ?></p>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	</div>
	<div class="row text-gray-900 text-center">
	<div class="col-lg">
	<table class="table table-bordered text-gray-900">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Harga Subtotal</th>
		</tr>
		<?php $i = 1; $total=0;
		foreach($pesanan as $p): ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $p["nama_barang"]; ?></td>
				<td><?= $p["qty"]; ?></td>
				<td>Rp <?= $p["harga"]; ?></td>
				<td>Rp <?php echo $hargaqty = $p["harga"] * $p["qty"]; ?></td>
			</tr>
			<?php $i++; 
			$total += $hargaqty;?>
		<?php endforeach; ?>
			<tr>
				<td colspan="4" class="bg-danger text-white text-center">
					<b>TOTAL</b>
				</td>
				<td class="bg-danger text-white text-center"><b>Rp <?= $total; ?></b></td>
				</td>
			</tr>
	</table>
	</div>
</div>
</div>
</div>
