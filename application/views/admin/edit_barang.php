<div class="container fluid">
<div class="row text-gray-900 ml-3">
	<h1>Form Edit Data Barang</h1>
</div>
<div class="row text-gray-900 ml-3">
<div class="col-lg">
	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_barang" id="id_barang" value="<?= $barang["id_barang"]; ?>">
	<div class="form-group row">
		<label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang["nama_barang"]; ?>">
			<?= form_error('nama_barang','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-10">
		<textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="masukkan keterangan/deskripsi barang.."><?= $barang["keterangan"]; ?></textarea>
			<?= form_error('keterangan','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
		<div class="col-sm-10">
		<select class="form-control" id="kategori" name="kategori">
            <option value="Pakaian Pria" <?php if($barang["kategori"] == "Pakaian Pria"){echo "selected";} ?>>Pakaian Pria</option>
            <option value="Pakaian Wanita" <?php if($barang["kategori"] == "Pakaian Wanita"){echo "selected";} ?>>Pakaian Wanita</option>
			<option value="Pakaian Anak Anak" <?php if($barang["kategori"] == "Pakaian Anak Anak"){echo "selected";} ?>>Pakaian Anak Anak</option>
			<option value="Elektronik" <?php if($barang["kategori"] == "Elektronik"){echo "selected";} ?>>Elektronik</option>
			<option value="Peralatan Olahraga" <?php if($barang["kategori"] == "Peralatan Olahraga"){echo "selected";} ?>>Peralatan Olahraga</option>
        </select>	
		</div>
		
	</div>
	<div class="form-group row">
		<label for="harga" class="col-sm-2 col-form-label">Harga</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="harga" name="harga" value="<?= $barang["harga"]; ?>">
			<?= form_error('harga','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="stok" class="col-sm-2 col-form-label">Stok</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="stok" name="stok" value="<?= $barang["stok"]; ?>">
			<?= form_error('stok','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	
	  <div class="form-group row">
		  <button type="submit" class="btn btn-primary">Update Data Barang</button>
	  </div>
	</form>
</div>
</div>
<br><br><br>

</div>
