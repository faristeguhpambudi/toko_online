<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div>
      <br>
    </div>
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b>Form Registrasi Toko Online</b></h1>
				  </div>
				  <?= $this->session->flashdata('pesan'); ?>
                  <form class="user" action="<?= base_url("registrasi"); ?>" method="post">
				  	<div class="form-group">
					  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="masukkan nama anda anda..">
					  <?= form_error('nama','<div class="small text-danger">','</div>'); ?>
                    </div>
                    <div class="form-group">
					  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="masukkan username anda..">
					  <?= form_error('username','<div class="small text-danger">','</div>'); ?>
                    </div>
                    <div class="form-group">
					  <input type="password" class="form-control form-control-user" id="passowrd" name="password" placeholder="masukkan password anda..">
					  <?= form_error('password','<div class="small text-danger">','</div>'); ?>
                    </div>
					<div class="form-group">
					  <input type="password" class="form-control form-control-user" id="passowrd2" name="password2" placeholder="ketik ulang password anda..">
					  <?= form_error('password2','<div class="small text-danger">','</div>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <b>Buat Akun</b>
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url("auth/login"); ?>"><b>Sudah Punya Akun? Login Sekarang!</b></a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>"><b>Liat Semua Produk Toko Ini!</b></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    </div>
  </div>
  </div>
