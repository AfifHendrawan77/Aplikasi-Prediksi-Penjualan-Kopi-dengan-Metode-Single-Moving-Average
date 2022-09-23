<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Transaksi</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan'); ?>"><i class="bi bi-house-door"></i></a></li>
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

            
          <!-- Button Tambah -->
          <a href="" onclick="window.print()" type="button" class="btn btn-primary form_per"><i class="bi bi-printer-fill"></i> Print</a>
          <a href="/karyawan/Transaksi_Penjualan/excel_transaksi" type="button" class="btn btn-primary form_per"><i class="bi bi-file-earmark-pdf-fill"></i> Export Excel</a>
          <!-- Button Tambah -->
          

          
          <!-- Tabel -->
          <table class="table tablee datatable table-striped">
              <thead >
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Kasir</th>
                      <th class="text-center" scope="col">Nama Pembeli</th>
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
                  $terjual[] = $u->total_harga ;  $total = array_sum($terjual);
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u->kasir ?></td>
                      <td><?php echo $u->nama_pembeli ?></td>
                      <td><?php echo $u->nama_produk ?></td>
                      <td>Rp.<?php echo number_format($u->harga_awal) ?></td>
                      <td><?php echo $u->jumlah ?></td>
                      <td>Rp.<?php echo number_format($u->total_harga) ?></td>
                      <td><?php echo $u->created_at ?></td>
                      <td class="text-center form_per">
                      <a href="Transaksi_Penjualan/cetak_transaksi/<?= $u->id; ?>" type="button" class="btn btn-success"><i class="bi bi-printer-fill"></i></a>
                      <a href="Transaksi_Penjualan/hapus_transaksi/<?= $u->id; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                      </td>
                     
                </tr>
            <?php
              endforeach;
            ?>
          </table>

          
          <p><?php echo $total ?></p>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>