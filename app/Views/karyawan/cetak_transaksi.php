
<?= $this->extend('layouts/index_karyawan') ?>
<?= $this->section('content') ?>
<main id="main" class="main">

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body" style="overflow-x: auto;">
       <p></p>
<p></p>
        <h4 class="text-center font-weight-bold" >Kedai Kamyusi</h4>
        <h6 class="text-center" >Jl. MT Haryono No.46/A, Depan, Kec. Sindang,<br> Kabupaten Indramayu, Jawa Barat 45222</h6>
        <h6 class="text-center" >Telp.081904703516</h6>
        <h6 class="text-center"><?php echo $transaksi[0]->created_at; ?></h6>
        <h6 class="text-center" >============================================</h6>
        <p></p>
        <h6 class="text-center" >Kasir : <?php echo $transaksi[0]->kasir; ?></h6>
        <h6 class="text-center" >Tanggal : <?php echo $transaksi[0]->created_at; ?></h6>
        <h6 class="text-center" >============================================</h6>
        <p></p>	

        <h6 class="text-center font-weight-bold" >Transaksi</h6>
        
        <h6 class="text-center font-weight-bold" >Nama Produk : <?php echo $transaksi[0]->nama_produk; ?></h6>
        <h6 class="text-center font-weight-bold" value="">Jumlah : <?php echo $transaksi[0]->jumlah; ?></h6>
        <h6 class="text-center font-weight-bold" >Total Harga : Rp.<?php echo $transaksi[0]->total_harga; ?></h6>
        <h6 class="text-center" >============================================</h6>
        <p></p>
        <h6 class="text-center" >Terima Kasih Atas Kepercayaan Anda</h6>
        <h6 class="text-center" >Struk ini merupakan</h6>
        <h6 class="text-center" >Bukti pembayaran yang sah</h6>
        
        <p></p>
        <a href="" onclick="window.print()" type="button" class="btn btn-primary form_per justify-content-center"><i class="bi bi-printer-fill"></i> Print</a>
        
        <p></p>
        <p></p>
<!-- 
        <p></p>
        <hr>
        <div class="d-grid gap-2">
          <a href="<?= base_url('karyawan/Transaksi_Penjualan'); ?>" class="btn btn-secondary form_per" type="button">Kembali</a>
          <a onclick="window.print()" class="btn btn-primary form_per" type="button">Cetak Bukti Pembayaran</a>
        </div>
        <p></p> -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?= $this->endsection() ?>