<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Transaksi</h1>
  <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/karyawan'); ?>"><i class="bi bi-house-door"></i></a></li>
      <li class="breadcrumb-item active">Tambah Transaksi</li>
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
            <form name="autoSumForm" action="<?= base_url('karyawan/Transaksi_Penjualan/simpan_transaksi'); ?>" method="POST">
                      <div div class="mb-3">
                          <label for="kasir1" class="form-label">Kasir</label>
                          <input type="text" class="form-control" name="kasir" value="<?= session()->get('name') ?>" readonly>
                      </div>
                      <div div class="mb-3">
                          <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                          <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli">
                      </div>
                      <p></p>
                      <?php for($i=0; $i<$total_row; $i++): ?>
                      <div class="row g-3">
                      <div class="col-md-3">
                          <label for="id_produk" class="form-label">Nama Produk</label>
                          <select class="form-select" id="floatingSelect" aria-label="State" name="id_produk[]">
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
                      <div class="col-md-3">
                          <label for="harga_awal" class="form-label">Harga</label>
                          <input type="text" class="form-control" placeholder="Harga" name='harga_awal[]' id="txt11"  onkeyup="sum1();" />
                      </div>
                      <div class="col-md-3">
                          <label for="jumlah" class="form-label">Jumlah</label>
                          <input type="text" class="form-control" placeholder="Jumlah" name='jumlah[]' id="txt22"  onkeyup="sum1();" />
                      </div>
                      <div class="col-md-3">
                          <label for="total_harga" class="form-label">Total Harga</label>
                          <input type="text" class="form-control" name="total_harga[]" placeholder="Total Harga" id="txt33"  onkeyup="sum1();" readonly/>
                      </div>
                      </div>
                      <?php endfor; ?>
                      <p></p>
                      <div class="row g-3">
                      <div class="col-md-4">
                          <label for="bayar" class="form-label">Total Keseluruhan</label>
                          <input type="text" class="form-control number-format" placeholder="Total Keseluruhan" name=""id="txt2"  onkeyup="sum();" />
                      </div>
                      <div class="col-md-4">
                          <label for="bayar" class="form-label">Bayar</label>
                          <input type="text" class="form-control" placeholder="Bayar" name="bayar1" id="txt1"  onkeyup="sum();" />
                      </div>
                      <div class="col-md-4">
                          <label for="bayar" class="form-label">Kembalian</label>
                          <input type="text" class="form-control" placeholder="Kembalian" name="" id="txt3" readonly/>
                      </div>
                      </div>
                      
                      <p></p>
                      <button type="submit"  name="simpan_supplier"  class="btn btn-primary">Simpan</button>
                      </div>
                      <p></p>
            </form>
        </div>
      </div>

    </div>
  </div>
</section>



</main><!-- End #main -->

<?= $this->endsection() ?>