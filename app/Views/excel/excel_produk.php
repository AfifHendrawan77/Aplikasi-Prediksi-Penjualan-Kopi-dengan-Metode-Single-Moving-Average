<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Produk.xls");
?>

<html>
    <body>
    <table border="1">
              <thead >
                  <tr>
                  <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Stok</th>
                      <th class="text-center" scope="col">Harga</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($produk as $row) :
            ?>
                 <tr class="text-center" >
                 <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_produk']; ?></td>
                      <td><?php echo $row['stok']; ?></td>
                      <td><?php echo $row['harga']; ?></td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>