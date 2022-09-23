<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Aktual.xls");
?>

<html>
    <body>
    <table border="1">
              <thead style="background: #f6f6fe;">
                  <tr>
                  <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Produk</th>
                      <th class="text-center" scope="col">Januari</th>
                      <th class="text-center" scope="col">Febuari</th>
                      <th class="text-center" scope="col">Maret</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($aktual as $u) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['nama_barang']; ?></td>
                      <td><?php echo $u[1]; ?></td>
                      <td><?php echo $u[2]; ?></td>
                      <td><?php echo $u[3]; ?></td>
                      
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>