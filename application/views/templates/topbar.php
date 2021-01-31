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

	<div class="nav-bar">
		<ul class="nav navbar-nav navbar-right">
			<li>
				<?php $itemKeranjang = $this->cart->total_items(); ?>
				<a href="<?= base_url() . "dashboard/detailKeranjang/" . $itemKeranjang; ?>" class="btn btn-success"><i class="fas fa-fw fa-shopping-cart mr-2"></i><b>Keranjang Belanja Anda : <?= $itemKeranjang; ?> Item</b></a>
			</li>
		</ul>
	</div>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

	  <div class="topbar-divider d-none d-sm-block"></div>

	  <ul class="nav navbar-nav navbar-right text-gray-900">
		  <?php if($this->session->userdata('username')): ?>
			<li class="text-primary"><div><b>Selamat datang <?= $this->session->userdata('username'); ?></b></div></li>
			<li class="ml-3">
			<a href="<?= base_url("auth/logout"); ?>" class="btn btn-danger" onclick="return confirm('yakin ingin Logout?');"><i class="fas fa-fw fa-sign-out-alt"></i><b>Logout</b></a>
			</li>
			<?php else: ?>
				<li>
				<a href="<?= base_url("auth/login"); ?>" class="btn btn-success"><i class="fas fa-fw fa-sign-in-alt mr-2"></i><b>Login</b></a>
			</li>
			<?php endif; ?>
	  </ul>
	</ul>

  </nav>
  <!-- End of Topbar -->
