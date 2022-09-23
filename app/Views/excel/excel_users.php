<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Users.xls");
?>

<html>
    <body>
    <table border="1">
              <thead >
                  <tr>
                      <th class="text-center" scope="col">No</th>
                      <th class="text-center" scope="col">Nama</th>
                      <th class="text-center" scope="col">Email</th>
                      <th class="text-center" scope="col">No Telp</th>
                      <th class="text-center" scope="col">Role</th>
                      <th class="text-center" scope="col">Tanggal Dibuat</th>
                  </tr>
              </thead>
            <!-- Tabel Hasil -->
            <?php
                $no = 1;
                foreach($users as $u) :
            ?>
                 <tr class="text-center" >
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u['name']; ?></td>
                      <td><?php echo $u['email']; ?></td>
                      <td><?php echo $u['phone_no']; ?></td>
                      <td><?php echo $u['role']; ?></td>
                      <td><?php echo $u['created_at']; ?></td>
                </tr>
            <?php
              endforeach;
            ?>
          </table>
    </body>
</html>