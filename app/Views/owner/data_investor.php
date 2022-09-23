<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Investor</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item active">Data Investor</li>
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
          <a href="/owner/data_investor/tambah_investor" type="button" class="btn btn-success form_per"><i class="bi bi-plus-lg"></i> Tambah Data Investor</a>
          <a href="" onclick="window.print()" type="button" class="btn btn-primary form_per"><i class="bi bi-printer-fill"></i> Print</a>
          <a href="/owner/Data_investor/excel_investor" type="button" class="btn btn-primary form_per"><i class="bi bi-file-earmark-pdf-fill"></i> Export Excel</a>
          <!-- Button Tambah -->
          

          <!-- Tabel -->
          <table class="table tablee datatable table-striped">
              <thead style="background: #f6f6fe;">
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Investor</th>
                      <th class="text-center" scope="col">No.Telp</th>
                      <th class="text-center" scope="col">Alamat</th>
                      <th class="text-center form_per" scope="col">Aksi</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($investor as $u) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['nama_investor']; ?></td>
                      <td><?php echo $u['nohp_investor']; ?></td>
                      <td><?php echo $u['alamat_investor']; ?></td>
                      <td class="text-center form_per">
                            <!-- Button -->
                            <a href="/owner/data_investor/edit_investor/<?= $u['id']; ?>" type="button" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                            <a href="/owner/data_investor/hapus_investor/<?= $u['id']; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            <!-- Button -->
                      </td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
          <!-- Tabel -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>