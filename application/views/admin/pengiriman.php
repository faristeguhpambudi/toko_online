<div class="container fluid">
<div class="row text-gray-900 ml-3">
	<h1>Form Edit Pengiriman</h1>
</div>
<div class="row text-gray-900 ml-3">
<div class="col-lg">
	<form action="" method="post">
	<input type="hidden" name="id" id="id" value="<?= $invoices["id"]; ?>">
	<input type="hidden" name="id_invoices" id="id_invoices" value="<?= $invoices["id_invoices"]; ?>">
	<div class="form-group row">
		<label for="resi" class="col-sm-2 col-form-label">No. Resi</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="resi" name="resi" value="<?= $invoices["resi"]; ?>">
			<?= form_error('resi','<div class="small text-danger">','</div>'); ?>
		</div>
	</div>
	<div class="form-group row">
		<label for="status" class="col-sm-2 col-form-label">Status Pengiriman</label>
		<div class="col-sm-10">
		<select class="form-control" id="status" name="status">
            <option value="Dikemas" <?php if($invoices["status"] == "Dikemas"){echo "selected";} ?>>Dikemas</option>
            <option value="Dikirim" <?php if($invoices["status"] == "Dikirim"){echo "selected";} ?>>Dikirim</option>
			<option value="Diterima" <?php if($invoices["status"] == "Diterima"){echo "selected";} ?>>Diterima</option>
        </select>	
		</div>
	</div>
	<div class="form-group row">
		<button type="submit" class="btn btn-primary">Update Data Pengiriman</button>
	</div>
	</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

</div>
