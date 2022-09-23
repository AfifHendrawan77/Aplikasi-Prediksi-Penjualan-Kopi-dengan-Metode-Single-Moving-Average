<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Produk</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item active">Produk</li>
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
          <!-- Validation -->


          <!-- Button Tambah -->
          <a href="/owner/produk/tambah_produk" type="button" class="btn btn-success form_per"><i class="bi bi-plus-lg"></i> Tambah Data Produk</a>
          <a href="" onclick="window.print()" type="button" class="btn btn-primary form_per"><i class="bi bi-printer-fill"></i> Print</a>
          <a href="/owner/Produk/excel_produk" type="button" class="btn btn-primary form_per"><i class="bi bi-file-earmark-pdf-fill"></i> Export Excel</a>
          <!-- Button Tambah -->

          
          <!-- Tabel -->
          <table class="table tablee datatable table-striped">
              <thead >
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Stok</th>
                      <th class="text-center" scope="col">Harga</th>
                      <th class="text-center" scope="col">Aksi</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($produk as $row) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_produk']; ?></td>
                      <td><?php echo $row['stok']; ?></td>
                      <td>Rp. <?php echo number_format($row['harga']); ?></td>
                      <td class="text-center">
                            <!-- Button -->
                            <a href="/owner/Produk/hapus/<?= $row['id_produk'];; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            <!-- Button -->
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