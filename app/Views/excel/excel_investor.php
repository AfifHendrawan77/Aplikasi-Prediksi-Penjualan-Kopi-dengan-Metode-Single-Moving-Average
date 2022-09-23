<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Investor.xls");
?>

<html>
    <body>
    <table border="1">
              <thead style="background: #f6f6fe;">
                  <tr>
                      <th class="text-center" scope="col">#</th>
                      <th class="text-center" scope="col">Nama Investor</th>
                      <th class="text-center" scope="col">No.Telp</th>
                      <th class="text-center" scope="col">Alamat</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($investor as $u) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['nama_investor']; ?></td>
                      <td><?php echo $u['nohp_investor']; ?></td>
                      <td><?php echo $u['alamat_investor']; ?></td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>