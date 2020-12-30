<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	  <i class="fa fa-bars"></i>
	</button>

	<!-- Topbar Search -->
	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
	  <div class="input-group">
		<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
		<div class="input-group-append">
		  <button class="btn btn-primary" type="button">
			<i class="fas fa-search fa-sm"></i>
		  </button>
		</div>
	  </div>
	</form>

	<div class="nav-bar">
		<ul class="nav navbar-nav navbar-right">
			<li>
				<?php $itemKeranjang = $this->cart->total_items(); ?>
				<a href="<?= base_url() . "dashboard/detailKeranjang/" . $itemKeranjang; ?>" class="btn btn-success">Keranjang Belanja Anda : <?= $itemKeranjang; ?> Item</a>
			</li>
		</ul>
	</div>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

	  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
	  <li class="nav-item dropdown no-arrow d-sm-none">
		<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <i class="fas fa-search fa-fw"></i>
		</a>
		<!-- Dropdown - Messages -->
		<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
		  <form class="form-inline mr-auto w-100 navbar-search">
			<div class="input-group">
			  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
			  <div class="input-group-append">
				<button class="btn btn-primary" type="button">
				  <i class="fas fa-search fa-sm"></i>
				</button>
			  </div>
			</div>
		  </form>
		</div>
	  </li>

	  <div class="topbar-divider d-none d-sm-block"></div>

	  <ul class="nav navbar-nav navbar-right">
		  <?php if($this->session->userdata('username')): ?>
			<li><div>Selamat datang <?= $this->session->userdata('username'); ?></div></li>
			<li>
				<a href="<?= base_url("auth/logout"); ?>" class="btn btn-danger">Logout</a>
			</li>
			<?php else: ?>
				<li>
				<a href="<?= base_url("auth/login"); ?>" class="btn btn-success">Login</a>
			</li>
			<?php endif; ?>
	  </ul>
	</ul>

  </nav>
  <!-- End of Topbar -->
