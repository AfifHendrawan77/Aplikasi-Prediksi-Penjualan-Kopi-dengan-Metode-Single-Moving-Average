<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tambah Transaksi</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Peralaman</a></li>
      <li class="breadcrumb-item">Data Peralaman</li>
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
                    <div class="mb-3">
                      <label for="tgl_transaksi" class="col-sm-2 col-form-label">Date</label>
                      <div class="col-lg-12">
                        <input type="date" class="form-control" name="tgl_transaksi" readonly>
                      </div>
                    </div>
                    <p></p>
                    <?php for($i=0; $i<$total_row; $i++): ?>
                    <div class="row g-3">
                    <div class="col-md-3">
                        <label for="nama_pembeli" class="form-label">Nama Produk</label>
                        <select class="form-select" id="floatingSelect" aria-label="State" name="nama_produk[]">
                          <option selected>Pilih Produk</option>
                          <option value="Americano">Americano</option>
                          <option value="Espresso">Espresso</option>
                          <option value="Moctails">Moctails</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="harga_awal" class="form-label">Harga</label>
                        <input type="text" class="form-control" placeholder="Harga" name='harga_awal[]'>
                    </div>
                    <div class="col-md-3">
                        <label for="qty" class="form-label">Qty</label>
                        <input type="text" class="form-control" placeholder="qty" name='qty[]'>
                    </div>
                    <div class="col-md-3">
                        <label for="total_harga" class="form-label">Total</label>
                        <input type="text" class="form-control" name="total_harga[]">
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