<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Transaksi.xls");
?>

<html>
    <body>
    <table border="1">
    <thead >
                  <tr>
                  <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Kasir</th>
                      <th class="text-center" scope="col">Nama Pembeli</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Harga Awal</th>
                      <th class="text-center" scope="col">Jumlah</th>
                      <th class="text-center" scope="col">Total Harga</th>
                      <th class="text-center" scope="col">Tanggal</th>
                      <!-- <th class="text-center" scope="col">Bayar</th>
                      <th class="text-center" scope="col">Kembalian</th> -->
                     
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($transaksi as $u) :
            ?>
                 <tr class="text-center" >
                 <td><?php echo $no++; ?></td>
                      <td><?php echo $u->kasir ?></td>
                      <td><?php echo $u->nama_pembeli ?></td>
                      <td><?php echo $u->nama_produk ?></td>
                      <td><?php echo $u->harga_awal ?></td>
                      <td><?php echo $u->jumlah ?></td>
                      <td><?php echo $u->total_harga ?></td>
                      <td><?php echo $u->created_at ?></td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>