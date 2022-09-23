<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Transaksi</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item active">Data Transaksi</li>
      </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body" style="overflow-x: auto;">
        <p></p>
          
          <!-- Validation -->
          <?php if(session()->get('message')) : ?>
            <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message'); ?>
          </div>
          <?php endif; ?>
          <?php if(session()->get('message_update')) : ?>
            <div class="alert alert-warning" role="alert">
            <?= session()->getFlashdata('message_update'); ?>
          </div>
          <?php endif; ?>
          <?php if(session()->get('message_delete')) : ?>
            <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('message_delete'); ?>
          </div>
          <?php endif; ?>
          
          <form action="<?= base_url('owner/Transaksi_Penjualan/search'); ?>" method="POST">
            <div class="row">
              <div class="col">
                        <select class="form-select" aria-label="Default select example" id="periode" name="namaperiode">
                        <option selected>Pilih Produk</option>
                          <option value="Signature (Light)">Signature (Light)</option>
                          <option value="Signature (Bold)">Signature (Bold)</option>
                          <option value="Signature (Mint)">Signature (Mint)</option>
                          <option value="Signature (Sobad)">Signature (Sobad)</option>
                          <option value="Chocolate Latte">Chocolate Latte</option>
                          <option value="Greentea Latte">Greentea Latte</option>
                          <option value="Redvelvet Latte">Redvelvet Latte</option>
                          <option value="Random">Random</option>
                          <option value="Americano">Americano</option>
                          <option value="Longblack">Longblack</option>
                          <option value="Coffe Latte">Coffe Latte</option>
                          <option value="Cappucino">Cappucino</option>
                          <option value="V60 / Japanese">V60 / Japanese</option>
                          <option value="Vietnam Drip">Vietnam Drip</option>
                          <option value="American Mix Meals">American Mix Meals</option>
                        </select>
              </div>
              <div class="col">
                  <input type="date" class="form-control" name="keywordawal">
                  
                  </div>
              <div class="col">
              <input type="date" class="form-control" name="keywordakhir">
              </div>
              <div class="col">
              <div class="d-grid gap-2">
              <button  type="submit" name="search_submit" value="Cari" class="btn btn-primary">Cari Transaksi</button>
              </div>
              </div>
            </div>
            </form>
<!-- 

            <form action="<?= base_url('owner/Transaksi_Penjualan/search'); ?>" method="POST">
            <input type="date" name="keywordawal">
            <input type="date" name="keywordakhir">
            <input type="text" name="namaperiode">
            <input type="submit" name="search_submit" value="Cari">
            </form> 
           -->

          <p></p>
          <!-- Tabel -->
          <table class="table tablee datatable table-striped">
              <thead >
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Kasir</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Harga Awal</th>
                      <th class="text-center" scope="col">Jumlah</th>
                      <th class="text-center" scope="col">Total Harga</th>
                      <th class="text-center" scope="col">Tanggal</th>
                      <!-- <th class="text-center" scope="col">Bayar</th>
                      <th class="text-center" scope="col">Kembalian</th> -->
                      <th class="text-center form_per" scope="col">Aksi</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($transaksi as $u) :
                  
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u->kasir ?></td>
                      <td><?php echo $u->nama_produk ?></td>
                      <td>Rp.<?php echo number_format($u->harga_awal) ?></td>
                      <td><?php echo $u->jumlah ?></td>
                      <td>Rp.<?php echo number_format($u->total_harga) ?></td>
                      <td><?php echo $u->created_at ?></td>
                      <td class="text-center form_per">
                      <a href="Transaksi_Penjualan/hapus_transaksi/<?= $u->id; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                      </td>
                     
                </tr>
            <?php
              endforeach;
            ?>
      
            
          </table>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>