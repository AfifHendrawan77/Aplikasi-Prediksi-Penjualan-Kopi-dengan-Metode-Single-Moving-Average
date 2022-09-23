<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Mulai Peralaman</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/owner'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item"><a href="#">Peramalan</a></li>
      <li class="breadcrumb-item active">Data Mulai Peramalan</li>
      </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body" style="overflow-x: auto;">
         <p></p>
          
         <p></p>
                <div class="alert alert-info" role="alert">
                Metode single moving average adalah metode peramalan yang menggunakan sejumlah data aktual permintaan yang baru untuk membangkitkan nilai ramalan untuk permintaan dimasa yang akan datang.
                </div>
           <!-- Form -->
            <form action="<?= base_url('owner/Data_Peramalan/hasil_peramalan'); ?>" method="POST">
           <div class="mb-3 form_per">
                        <label for="bulan" class="form-label">Pilih Produk yang akan diprediksi</label>
                        <select id="inputState" class="form-select" id="bulan" name="namaperiode">
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
            <button type="submit" class="btn btn-primary form_per">Mulai Peramalan</button>
           </form>

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>