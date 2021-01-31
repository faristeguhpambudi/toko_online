<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  <div class="sidebar-brand-icon rotate-n-15">
	<i class="fas fa-store"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Toko Online</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?= base_url(); ?>">
	<i class="fas fa-fw fa-store-alt"></i>
	<span>Semua Produk</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Kategori
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/elektronik"); ?>">
	<i class="fas fa-fw fa-laptop"></i>
	<span><b>Elektronik</b></span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/pakaianPria"); ?>">
	<i class="fas fa-fw fa-tshirt"></i>
	<span><b>Pakaian Pria</b></span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url("kategori/pakaianWanita"); ?>">
	<i class="fas fa-fw fa-tshirt"></i>
	<span><b>Pakaian Wanita</b></span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/pakaianAnak"); ?>">
	<i class="fas fa-fw fa-child"></i>
	<span><b>Pakaian Anak Anak</b></span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/peralatanOlahraga"); ?>">
	<i class="fas fa-fw fa-futbol"></i>
	<span><b>Peralatan Olahraga</b></span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Heading -->
<?php if($this->session->userdata('username') !== null) : ?>
	<div class="sidebar-heading">
		Pembelian
	</div>

	<li class="nav-item">
  <a class="nav-link" href="<?= base_url("pembelian"); ?>">
	<i class="fas fa-fw fa-shopping-cart"></i>
	<span><b>Pembelian Saya</b></span></a>
</li>
<?php endif; ?>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
