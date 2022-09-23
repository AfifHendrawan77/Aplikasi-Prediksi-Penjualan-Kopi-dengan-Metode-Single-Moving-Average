<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Hasil Peramalan</h1>
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
                    <div class="card-body" style="overflow-x: auto;">
                        <p></p>

                        <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                            role="alert">
                            Metode single moving average adalah metode peramalan yang menggunakan sejumlah data aktual
                            permintaan yang baru untuk membangkitkan nilai ramalan untuk permintaan di masa yang akan
                            datang. <br><br>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <p></p>
                        <div class="card-body col-lg-12">
                            <canvas id="myAreaChartPrediksi" width="100%" height="30"></canvas>

                            <h5 class="text-center">Grafik Prediksi Penjualan</h5>
                            <!-- Column Chart -->
                            <canvas id="barChart" style="max-height: 400px;"></canvas>
                            <br>

                            <!-- Tabel -->
                            <table class="table tablee datatable print">
                                <thead style="background: #f6f6fe;">
                                    <tr>
                                        <th class="text-center" scope="col">No.</th>
                                        <th class="text-center" scope="col">Nama Barang</th>
                                        <th class="text-center" scope="col">Bulan</th>
                                        <th class="text-center" scope="col">Tahun</th>
                                        <th class="text-center" scope="col">Terjual</th>
                                    </tr>
                                </thead>
                                <!-- Tabel Hasil -->
                                <?php
                                  $no = 1;
                                  foreach($periode['periode_p'] as $u) :?>
                                <tr class="text-center">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->nama_barang ?></td>
                                    <td><?php echo $u->bulan ?></td>
                                    <td><?php echo $u->tahun ?></td>
                                    <td><?php echo $u->terjual ?></td>
                                </tr>

                                <?php
              endforeach;
            ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td colspan="3">Prediksi Bulan Selanjutnya
                                        (<?php echo $periode['bulan_selanjutnya'] ?>) : </td>
                                    <td><?php echo substr($periode['hasil'] / 3, 0, 5); ?></td>
                                    <td></td>
                                </tr>

                            </table>

                        </div>
                    </div>

                </div>
            </div>
    </section>

</main><!-- End #main -->


<!-- Grafik -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    new Chart(document.querySelector('#barChart'), {
        type: 'bar',
        data: {
            labels: [<?php echo '"' . $periode['bulan_selanjutnya'] . '",' ?> <?php foreach ($periode['periode_p'] as $u) :
                                                                                        echo '"' . $u->bulan . '",';
                                                                                    ?><?php endforeach; ?>],
            datasets: [{
                label: 'Prediksi Penjualan ',
                data: [<?php echo '"' . $periode['hasil'] / 3 . '",' ?><?php foreach ($periode['periode_p'] as $u) :
                                                                                echo '"' . $u->terjual . '",';
                                                                            ?><?php endforeach; ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>

<?= $this->endsection() ?>