<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Produk</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="#">Data Master</a></li>
      <li class="breadcrumb-item active">Data Produk</li>
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
          <a href="<?= base_url('karyawan/Data_Produk/tambah_produk'); ?>" type="button" class="btn btn-success form_per"><i class="bi bi-plus-lg"></i> Tambah Data Produk</a>
          <!-- Button Tambah -->

          <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>
	        
	        <?php 
	            $errors = $validation->getErrors();
	            if(!empty($errors))
	            {
	                echo $validation->listErrors('list');
	            }
	        ?>


          <!-- Tabel -->
          <table class="tablee datatable">
              <thead style="background: #f6f6fe;">
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Harga</th>
                      <th class="text-center" scope="col">Deskripsi</th>
                      <th class="text-center" scope="col">Gambar</th>
                      <th class="text-center" scope="col">Aksi</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($gambar as $row) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_produk']; ?></td>
                      <td>Rp.<?php echo number_format($row['harga']); ?></td>
                      <td><?php echo $row['deskripsi_produk']; ?></td>
                      <td><img src="<?=base_url('assets/images/'.$row['berkas']);?>" width="100"></td>
                      <td class="text-center form_per">
                            <!-- Button -->
                            <a href="/karyawan/data_produk/edit_produk//<?= $row['id']; ?>" type="button" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                            <a href="/karyawan/data_produk/hapus_produk/<?= $row['id']; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
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