<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Transaksi</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/owner/transaksi_penjualan'); ?>">Data Transaksi</a></li>
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
                foreach($periode as $u) :
                  $jumlah[] = $u->jumlah;  $total = array_sum($jumlah);
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u->kasir ?></td>
                      <td><?php echo $u->nama_produk ?></td>
                      <td><?php echo $u->harga_awal ?></td>
                      <td><?php echo $u->jumlah ?></td>
                      <td><?php echo $u->total_harga ?></td>
                      <td><?php echo $u->created_at ?></td>
                      <td class="text-center form_per">
                      <a href=" " type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                      </td>
                </tr>
                <tr class="text-center" >
                      <td></td>
                      <td colspan="3"><strong>Total Penjualan</strong></td>
                      <td><?php if ($total < "0") {
                      echo "0";
                    } elseif ($total > "0") {
                      echo $total;
                    };?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                </tr>
            <?php
              endforeach;
            ?>
            
          </table>
          <p></p>
       
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>