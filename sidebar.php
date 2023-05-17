<!DOCTYPE HTML>
<html>

<head>
  <style>
    .bg-info {
      background-color: #4a6163 !important;
    }
  </style>
</head>

<!-- Page Wrapper -->
  <div id="wrapper"> 
    <!-- berfungsi untuk mengatur elemen elemen di dalam sidebar agar sesuai atau tidak keluar dari ukuran yg sudah ditentukan -->

    <!-- Sidebar -->
    <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Divider dashboard -->
      <hr class="sidebar-divider my-0">

      <!-- Komponen sidebar u/ dashboard-->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Transaksi
      </div>

      <!-- Komponen Sidebar u/ 3 Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pendapatan.php">
          <i class="fas fa-fw fa-check-square"></i>
          <span>Pemasukkan</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pengeluaran.php" >
          <i class="fas fa-fw fa-times"></i>
          <span>Pengeluaran</span>
        </a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
</html>  