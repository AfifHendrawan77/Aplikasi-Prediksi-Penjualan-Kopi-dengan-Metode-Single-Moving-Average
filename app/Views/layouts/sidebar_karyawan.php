  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <!-- Dashboard Sidebar -->
    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('/karyawan'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    <!-- Dashboard Sidebar -->

<!-- Data Penunjang Sidebar -->
<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-master" data-bs-toggle="collapse" href="#">
          <i class="bi bi-newspaper"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-master" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('karyawan/Data_Kategori'); ?>">
              <i class="bi bi-circle"></i><span>Kategori</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('karyawan/data_promosi'); ?>">
              <i class="bi bi-circle"></i><span>Promosi</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('karyawan/data_produk'); ?>">
              <i class="bi bi-circle"></i><span>Produk</span>
            </a>
          </li>
        </ul>
      </li>

       <!-- Data Penunjang Sidebar -->
       <li class="nav-heading">Penjualan</li>


      <!-- Data Penjualan Sidebar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('karyawan/produk'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Produk</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->
    <!-- Data Penjualan Sidebar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('karyawan/transaksi_penjualan/tambah_transaksi/1'); ?>">
          <i class="bi bi-basket"></i>
          <span>Transaksi</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->
    <!-- Data Penjualan Sidebar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('karyawan/Transaksi_Penjualan'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Transaksi</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->
    <!-- Data Penunjang Sidebar -->
    <li class="nav-heading">Penunjang</li>

    <!-- Data Penjualan Sidebar -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('karyawan/data_supplier'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Supplier</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->
    
     <!-- Data Penjualan Sidebar -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('logout');?>">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->

    </ul>

  </aside><!-- End Sidebar-->