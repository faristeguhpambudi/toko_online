<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
	<i class="fas fa-store"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Toko Online</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.html">
	<i class="fas fa-fw fa-tachometer-alt"></i>
	<span>Dashboard</span></a>
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
	<i class="fas fa-fw fa-table"></i>
	<span>Elektronik</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/pakaianPria"); ?>">
	<i class="fas fa-fw fa-table"></i>
	<span>Pakaian Pria</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url("kategori/pakaianWanita"); ?>">
	<i class="fas fa-fw fa-table"></i>
	<span>Pakaian Wanita</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/pakaianAnak"); ?>">
	<i class="fas fa-fw fa-table"></i>
	<span>Pakaian Anak Anak</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url("kategori/peralatanOlahraga"); ?>">
	<i class="fas fa-fw fa-table"></i>
	<span>Peralatan Olahraga</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Heading -->
<div class="sidebar-heading">
  Logout
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="tables.html">
	<i class="fas fa-fw fa-table"></i>
	<span>Logout</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
