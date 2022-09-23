<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Peralaman</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('owner/data_peramalan'); ?>">Data Peramalan</a></li>
      <li class="breadcrumb-item active">Tambah Peramalan</li>
      </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
         <p></p>

          <div class="row">
            <div class="col-md-12">
              <?php 
                  if(session()->get('err')){
                    echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Data Gagal Ditambahkan!</h4>
                    <p class='mb-0'>". session()->get('err') ."</p>
                  </div>";
                  }
              ?>
            </div>
          </div>
          
          <!-- Form -->
          <form action="<?= base_url('owner/data_peramalan/simpan_peramalan'); ?>" method="POST">
          <?= csrf_field(); ?>
                    <!-- <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" autofocus >asas
                    </div> -->

                    <div class="mb-3">
                        <label for="bulan" class="form-label">Nama Barang</label>
                        <select id="inputState nama_barang" class="form-select" name="nama_barang" autofocus>
                        <?php
                        foreach($peramalan as $row) :?>
                        <option value="<?php echo $row['nama_barang']; ?>" ><?php echo $row['nama_barang']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                   
                    <div class="mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select id="inputState" class="form-select" id="bulan" name="bulan">
                          <option selected>Pilih Bulan</option>
                          <option>Januari</option>
                          <option>Februari</option>
                          <option>Maret</option>
                          <option>April</option>
                          <option>Mei</option>
                          <option>Juni</option>
                          <option>Juli</option>
                          <option>Agustus</option>
                          <option>Sepetember</option>
                          <option>Oktober</option>
                          <option>November</option>
                          <option>Desember</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="bulan" class="form-label">Tahun</label>
                        <select id="inputState tahun" class="form-select" name="tahun">
                        <?php
                        foreach($peramalan as $row) :?>
                        <option value="<?php echo $row['tahun_peramalan']; ?>" ><?php echo $row['tahun_peramalan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="mb-3">
                        <label for="terjual" class="form-label">Terjual</label>
                        <input type="text" class="form-control" id="terjual" name="terjual" placeholder="Terjual">
                    </div>
                    <button type="submit" name="simpan_peramalan" class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>