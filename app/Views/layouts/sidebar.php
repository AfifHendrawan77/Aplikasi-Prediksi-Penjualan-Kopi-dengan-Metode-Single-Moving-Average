  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <!-- Dashboard Sidebar -->
    <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('/owner'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    <!-- Dashboard Sidebar -->

    <!-- Data Admin Sidebar -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('owner/data_users'); ?>">
          <i class="bi bi-people-fill"></i>
          <span>Data Users</span>
        </a>
      </li>
    <!-- Data Admin Sidebar -->

     <!-- Data Penunjang Sidebar -->
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-master" data-bs-toggle="collapse" href="#">
          <i class="ri-shopping-basket-fill"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-master" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('owner/data_kategori'); ?>">
              <i class="bi bi-circle"></i><span>Kategori</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('owner/data_promosi'); ?>">
              <i class="bi bi-circle"></i><span>Promosi</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('owner/data_produk'); ?>">
              <i class="bi bi-circle"></i><span>Produk</span>
            </a>
          </li>
        </ul>
      </li>
       <!-- Data Penunjang Sidebar -->
      
    <li class="nav-heading">Penjualan</li>

    <!-- Data Penjualan Sidebar -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('owner/produk'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Produk</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->

    <!-- Data Penjualan Sidebar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('owner/transaksi_penjualan'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Transaksi</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->

    <!-- Data Penunjang Sidebar -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-navv" data-bs-toggle="collapse" href="#">
          <i class="bi bi-newspaper"></i><span>Peramalan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-navv" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('owner/data_peramalan'); ?>">
              <i class="bi bi-circle"></i><span>Data Peramalan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('owner/mulai_peramalan'); ?>">
              <i class="bi bi-circle"></i><span>Mulai Peramalan</span>
            </a>
          </li>
        </ul>
      </li>
       <!-- Data Penunjang Sidebar -->


       <li class="nav-heading">Penunjang</li>

       <!-- Data Penjualan Sidebar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('owner/data_supplier'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Supplier</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->

    <!-- Data Penjualan Sidebar -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('owner/data_investor'); ?>">
          <i class="bi bi-basket"></i>
          <span>Data Investor</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->
      

    <!-- Data Penjualan Sidebar -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= site_url('logout') ?>">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li>
    <!-- Data Penjualan Sidebar -->

    </ul>

  </aside><!-- End Sidebar-->