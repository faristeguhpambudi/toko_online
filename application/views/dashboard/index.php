        <!-- Begin Page Content -->
        <div class="container-fluid">
					<div class="row">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?= base_url("assets/img/"); ?>slider1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?= base_url("assets/img/"); ?>slider2.jpg" alt="Second slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					</div>
					<div class="row text-center">

					<?php foreach($barang as $b) : ?>
						<div class="card text-gray-900 mt-3 ml-2" style="width: 16rem;">
							<img class="card-img-top" src="<?= base_url("assets/uploads/") . $b["gambar"]; ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?= $b["nama_barang"]; ?></h5>
								<small><?= $b["keterangan"]; ?></small> <br>
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

