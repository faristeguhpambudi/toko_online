<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-6 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
				  </div>
				  <?= $this->session->flashdata('pesan'); ?>
                  <form class="user" action="<?= base_url("auth/login"); ?>" method="post">
                    <div class="form-group">
					  <input type="text" class="form-control form-control-user" id="username" name="username">
					  <?= form_error('username','<div class="small text-danger">','</div>'); ?>
                    </div>
                    <div class="form-group">
					  <input type="password" class="form-control form-control-user" id="passowrd" name="password">
					  <?= form_error('password','<div class="small text-danger">','</div>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    </div>
  </div>
  </div>
