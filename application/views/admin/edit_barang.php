<div class="container fluid">
<div class="row text-gray-900">
	<h1>Form Edit Data Barang</h1>
</div>
<div class="row text-gray-900">
	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_barang" id="id_barang" value="<?= $barang["id_barang"]; ?>">
	<div class="form-group">
		<label for="nama_barang">Nama Barang</label>
		<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang["nama_barang"]; ?>">
	</div>
	<div class="form-group">
		<label for="keterangan">Keterangan</label>
		<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $barang["keterangan"]; ?>">
	</div>
	<div class="form-group">
		<label for="kategori">Kategori</label>
		<input type="text" class="form-control" id="kategori" name="kategori" value="<?= $barang["kategori"]; ?>">
	</div>
	<div class="form-group">
		<label for="harga">Harga</label>
		<input type="text" class="form-control" id="harga" name="harga" value="<?= $barang["harga"]; ?>">
	</div>
	<div class="form-group">
		<label for="stok">Stok</label>
		<input type="text" class="form-control" id="stok" name="stok" value="<?= $barang["stok"]; ?>">
	</div>
	
	  <div class="form-group">
		  <button type="submit" class="btn btn-primary">Edit</button>
	  </div>
	</form>
</div>

</div>
