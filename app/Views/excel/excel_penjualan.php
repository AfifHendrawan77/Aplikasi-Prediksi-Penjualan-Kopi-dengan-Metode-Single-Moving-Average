<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Penjualan.xls");
?>

<html>
    <body>
    <table border="1">
              <thead style="background: #f6f6fe;">
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Pembeli</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Harga</th>
                      <th class="text-center" scope="col">Kuantiti</th>
                      <th class="text-center" scope="col">Jumlah</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($penjualan as $u) :
                  $jumlah = $u['harga'] * $u['Kuantiti'];
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['nama_pembeli']; ?></td>
                      <td><?php echo $u['nama_produk']; ?></td>
                      <td><?php echo $u['harga']; ?></td>
                      <td><?php echo $u['Kuantiti']; ?></td>
                      <td><?php echo $jumlah;?></td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>