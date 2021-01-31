
		<!-- Begin Page Content -->
        <div class="container-fluid">
					<div class="row text-gray-900">
						<h1>Pakaian Anak - Anak</h1>
					</div>
					<div class="row text-center">

					<?php foreach($barang as $b) : ?>
						<div class="card text-gray-900 mt-3 ml-2" style="width: 16rem;">
							<img class="card-img-top" src="<?= base_url("assets/uploads/") . $b["gambar"]; ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?= $b["nama_barang"]; ?></h5>
								<span class="badge badge-success mb-2">Rp <?= $b["harga"]; ?></span> <br>
								<a href="<?= base_url("dashboard/tambahKeKeranjang/") . $b["id_barang"]; ?>" class="btn btn-sm btn-primary">Tambah Ke keranjang</a>
								<a href="<?= base_url("dashboard/detailBarang/") . $b["id_barang"]; ?>" class="btn btn-sm btn-success">Detail</a>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
				</div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

