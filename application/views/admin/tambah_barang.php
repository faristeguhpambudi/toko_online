<div class="container fluid">
<div class="row text-gray-900 ml-3">
	<h1>Form Tambah Data Barang</h1>
</div>
<div class="row text-gray-900 ml-3">
<div class="col-lg">
	<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group row">
		<label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="masukkan nama barang..">
			<?= form_error('nama_barang','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-10">
		<textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="masukkan keterangan/deskripsi barang.."></textarea>
			<?= form_error('keterangan','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
		<div class="col-sm-10">
			<select class="form-control" id="kategori" name="kategori">
				<option>Pakaian Pria</option>
				<option>Pakaian Wanita</option>
				<option>Pakaian Anak Anak</option>
				<option>Elektronik</option>
				<option>Peralatan Olahraga</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="harga" class="col-sm-2 col-form-label">Harga</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="harga" name="harga" placeholder="masukkan harga barang..">
			<?= form_error('harga','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="stok" class="col-sm-2 col-form-label">Stok</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="stok" name="stok" placeholder="masukkan stok barang..">
			<?= form_error('stok','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="nama_barang" class="col-sm-2 col-form-label">Gambar</label>
		<div class="col-sm-10">
			<input type="file" class="form-control" id="gambar" name="gambar">
		</div>
	  </div>
	  <div class="form-group">
		  <button type="submit" class="btn btn-primary">Tambah barang</button>
	  </div>
	</form>
	<br>
</div>
</div>

</div>
