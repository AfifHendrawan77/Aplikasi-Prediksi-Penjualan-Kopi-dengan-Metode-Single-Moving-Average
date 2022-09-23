<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Produk</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan/data_supplier'); ?>">Data Supplier</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan/produk_masuk'); ?>">Produk Masuk</a></li>
      <li class="breadcrumb-item active">Tambah Produk</li>
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
          <form action="<?= base_url('karyawan/Produk_Masuk/simpan_produk_masuk'); ?>" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 form_per">
                        <label for="id_produk" class="form-label">Pilih Produk yang akan ditambahkan</label>
                        <select id="inputState" class="form-select" id="id_produk" name="id_produk">
                          <option selected>Pilih Produk</option>
                          <option value="1">Signature (Light)</option>
                          <option value="2">Signature (Bold)</option>
                          <option value="3">Signature (Mint)</option>
                          <option value="4">Signature (Sobad)</option>
                          <option value="5">Chocolate Latte</option>
                          <option value="6">Greentea Latte</option>
                          <option value="7">Redvelvet Latte</option>
                          <option value="8">Random</option>
                          <option value="9">Americano</option>
                          <option value="10">Longblack</option>
                          <option value="11">Coffe Latte</option>
                          <option value="12">Cappucino</option>
                          <option value="13">V60 / Japanese</option>
                          <option value="14">Vietnam Drip</option>
                          <option value="15">American Mix Meals</option>
                        </select>
                    </div>                           
                    <div class="mb-3">
                        <label for="stok_masuk" class="form-label">Stok</label>
                        <input type="text" class="form-control" name="stok_masuk">
                    </div>
      
                    
                    <button type="submit"  name="simpan_produk"  class="btn btn-primary">Simpan</button>
          </form>
          <!-- Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>