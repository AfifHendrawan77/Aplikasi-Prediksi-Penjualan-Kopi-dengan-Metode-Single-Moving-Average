<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Users</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item active">Data Users</li>
      </ol>
  </nav>
</div><!-- End Page Title -->


<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body" style="overflow-x: auto;">
          <p><p></p></p>

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

          <!-- BUTTON -->
          <a href="<?= base_url(''); ?>/owner/tambah_users" type="button" class="btn btn-success form_per"><i class="ri-user-add-fill"></i> Tambah Data</a>
          <a href="/owner/Data_Users/excel_users" type="button" class="btn btn-secondary form_per"><i class="bi bi-file-earmark-pdf-fill"></i> Export Excel</a>
          <!-- BUTTON -->
          <P> </P>
          
          <!-- Tabel -->
          <table class="table datatable">
              <thead >
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama</th>
                      <th class="text-center" scope="col">Email</th>
                      <th class="text-center" scope="col">No.Telp</th>
                      <th class="text-center" scope="col">Role</th>
                      <th class="text-center" scope="col">Tanggal Dibuat</th>
                      <th class="text-center" scope="col">Aksi</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($users as $u) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['name']; ?></td>
                      <td><?php echo $u['email']; ?></td>
                      <td><?php echo $u['phone_no']; ?></td>
                      <td><?php echo $u['role']; ?></td>
                      <td><?php echo $u['created_at']; ?></td>
                      <td class="text-center">
                            <!-- Button -->
                            <a href="/owner/Data_Users/edit_users/<?= $u['id']; ?>" type="button" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                            <a href="/owner/Data_Users/hapus_users/<?= $u['id']; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
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