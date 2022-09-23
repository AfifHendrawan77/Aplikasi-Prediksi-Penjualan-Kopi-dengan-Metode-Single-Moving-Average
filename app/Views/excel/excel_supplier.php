<?php
header("Content-type: application/vnd-ms-exc");
header("Content-Disposition: attachment; filename=Data Supplier.xls");
?>
el
<html>
    <body>
    <table border="1">
              <thead >
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama Supplier</th>
                      <th class="text-center" scope="col">No.Telp</th>
                      <th class="text-center" scope="col">Alamat</th>
                      <th class="text-center" scope="col">Deskripsi</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($supplier as $row) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_supplier']; ?></td>
                      <td><?php echo $row['nohp_supplier']; ?></td>
                      <td><?php echo $row['alamat_supplier']; ?></td>
                      <td><?php echo $row['deskripsi_supplier']; ?></td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>