<div class="container-fluid">
	<div class="row text-gray-900">
		<div class="col-md-2">

		</div>
		<div class="col-md-8">
		<button class="btn btn-danger">
				<?php 
					$grand_total = 0;
					if($keranjang = $this->cart->contents()){
						foreach($keranjang as $item){
							$grand_total = $grand_total + $item["subtotal"];
						}
						echo "<h2>Totall Belanja Anda Rp " . $grand_total . "</h2>";
					
				
				?>
			</button>
			<br><br>
			<h3>input alamat pengiriman dan pembayaran</h3>
			<form action="<?= base_url("dashboard/pembayaran"); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="alamat">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama anda..">
				<?= form_error('nama','<div class="small text-danger">','</div>'); ?>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat Lengkap</label>
				<input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat pengiriman..">
				<?= form_error('alamat','<div class="small text-danger">','</div>'); ?>
			</div>
			<div class="form-group">
				<label for="telp">No. Telepon</label>
				<input type="text" class="form-control" id="telp" name="telp" placeholder="masukkan nomor telpon anda..">
				<?= form_error('telp','<div class="small text-danger">','</div>'); ?>
			</div>
			<div class="form-group">
				<label for="pengiriman">Jasa Pengiriman</label>
				<select class="form-control" id="pengiriman" name="pengiriman">
					<option>JNE</option>
					<option>TIKI</option>
					<option>POS</option>
					<option>GOJEK</option>
					<option>GRAB</option>
				</select>
			</div>
			<div class="form-group">
				<label for="nak">Bank</label>
				<select class="form-control" id="bank" name="bank">
					<option>MANDIRI - XXXXXXXXXXXXX</option>
					<option>BCA - XXXXXXXXXXXXXXXX</option>
					<option>BRI - XXXXXXXXXXXXXXX</option>
					<option>BNI - XXXXXXXXXXXXXXXXX</option>
				</select>
			</div>
			<div class="form-group">
				<label for="bukti_bayar">Bukti Bayar/Bukti Transfer</label>
				<input type="file" class="form-control" id="bukti_bayar" name="bukti_bayar">
			</div>
			<button type="submit" class="btn btn-primary">Checkout</button>
			</form>
			<?php }
				else {
					echo "<h1>KERANJANG BELANJA ANDA MASIH KOSONG!</h1>";
				}
				?>
		</div>
		<div class="col-md-2">
			
		</div>

	</div>
</div>
</div>
