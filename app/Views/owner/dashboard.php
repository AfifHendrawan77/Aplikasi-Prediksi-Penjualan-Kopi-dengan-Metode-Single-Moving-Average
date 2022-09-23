<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
</div><!-- End Page Title -->

<!-- <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Selamat Datang <?= session()->get('name') ?> !</h4>
  <p>Aplikasi Prediksi Penjualan adalah aplikasi yang digunakan untuk memprediksi penjualan dimasa yang akan datang dengan menggunakan metode single moving average.</p>
</div> -->
<!-- Alert -->
<?php if(session()->get('message')) : ?>
            <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message'); ?>
          </div>
      <?php endif; ?>
<!-- Alert -->  

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-2 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Total Pendapatan</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-handbag-fill"></i>
                </div>
                <div class="ps-3">
               
                <?php foreach($data['transaksi'] as $row) : 
                 $terjual[] = $row->total_harga ;  $total = array_sum($terjual);
                  ?>
                   <?php endforeach; ?>
                <h6>Rp. <?php echo number_format($total); ?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Users</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $data['total_users'];?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Supplier</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bx bxs-coffee"></i>
                </div>
                <div class="ps-3">
                <h6><?= $data['total_supplier'];?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


         <!-- Sales Card -->
         <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Kategori</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="ri-find-replace-fill"></i>
                </div>
                <div class="ps-3">
                <h6><?= $data['total_kategori'];?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


         <!-- Sales Card -->
         <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Promosi</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="ri-draft-fill"></i>
                </div>
                <div class="ps-3">
                <h6><?= $data['total_promosi'];?></h6>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

         <!-- Sales Card -->
         <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Produk</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bx bxs-gift"></i>
                </div>
                <div class="ps-3">
                <h6><?= $data['total_dataproduk'];?></h6>
              

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


        
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Investor</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="ri-team-fill"></i>
                </div>
                <div class="ps-3">
                <h6><?= $data['total_investor'];?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

           



      </div>
    </div><!-- End Left side columns -->


  </div>
</section>

</main><!-- End #main -->
<?= $this->endsection() ?>