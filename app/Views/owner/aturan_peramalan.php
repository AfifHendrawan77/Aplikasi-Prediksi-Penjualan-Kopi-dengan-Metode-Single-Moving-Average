<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Data Aturan</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('owner/data_peramalan'); ?>">Data Peramalan</a></li>
      <li class="breadcrumb-item active">Tambah Data Aturan</li>
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
          <a href="/owner/Aturan_Peramalan/tambah_Aturan_Peramalan" type="button" class="btn btn-success form_per"><i class="bi bi-plus-lg"></i> Tambah Data Peramalan</a>
          <a href="" onclick="window.print()" type="button" class="btn btn-primary form_per"><i class="bi bi-printer-fill"></i> Print</a>
          <!-- Button Tambah -->
          <p><p></p></p>

          <table class="table table-bordered">
                <thead>
                  <tr>
                  <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Barang</th>
                      <th class="text-center" scope="col">Tahun</th>
                      <th class="text-center form_per" scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php
                $no = 1;
                foreach($peramalan as $u) :
            ?>
                 <tr class="text-center" >
                      <!-- <td></td> -->
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['nama_barang']; ?></td>
                      <td><?php echo $u['tahun_peramalan']; ?></td>
                      <td class="text-center form_per">
                            <!-- Button -->
                            <a href="/owner/Aturan_Peramalan/edit_aturan_peramalan/<?= $u['id'] ?>" type="button" class="btn btn-warning"><i class="bi bi-box-arrow-up-right"></i></a>
                            <a href="/owner/Aturan_Peramalan/hapus_aturan/<?= $u['id']; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
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