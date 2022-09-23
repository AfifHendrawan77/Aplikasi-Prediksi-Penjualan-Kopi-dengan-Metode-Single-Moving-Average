<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamyusi Kafetaria</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/landingpage/css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

<a href="" class="logo"> <img src="<?= base_url(''); ?>/assets/users/logokamyusi.png" width="52px" height="25px" alt=""></i> Kamyusi</a>
    
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#banner">Menu</a>
        <a href="#info">Informasi</a>
        <a href="#order">Pesan Sekarang</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
     
        <a href="https://wa.me/6281904703516"><div id="login-btn" class="fas fa-phone"></div></a>
    </div>
    
</header>

<!-- header section ends  -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span>Selamat Datang di Kamyusi Kafetaria</span>
        <h3>Jadikan Harimu Hebat Dengan Kopi Kami! 😋</h3>
        
        <a href="#order" class="btn">Pesan Sekarang</a>
    </div>

    <div class="image">
        <img src="<?= base_url(''); ?>/landingpage/image/kamyusi_kedai.jpg" alt="" class="home-img">
        <img src="<?= base_url(''); ?>/landingpage/image/home-parallax-img.png" alt="" class="home-parallax-img">
    </div>

</section>

<!-- home section ends  -->


<BR></BR>

<!-- category section starts  -->

<section class="category">

    <?php
        foreach($kategori as $kategori) :?>
    <a href="#" class="box">
        <img src="<?=base_url('assets/kategori/'.$kategori['berkas']);?>" alt="">
        <h3><?php echo $kategori['nama_kategori']; ?></h3>
    </a>
    <?php endforeach; ?>


</section>

<!-- category section ends -->


<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="<?= base_url(''); ?>/landingpage/image/kamyusi.jpg" alt="">
    </div>

    <div class="content">
        <span>Tentang Kami?</span>
        <h3 class="title">Kenapa Memilih Kami?</h3>
        <p>Kedai Kamyusi merupakan kedai yang menyediakan berbagai jenis kopi dengan kualitas terbaik. Selain itu, kedai kamyusi menyediakan tempat yang nyaman.</p>
        <span></span>
        <p>Kedai ini cocok untuk menjadi tempat nongkrong, berkumpul, ngobrol, bersantai, diskusi, bahkan kerja kelompok atau tugas karna tersedia fasilitas internet dan wifi bagi pelanggan. Pas untuk menjadi tempat pilihan untuk nongkrong hingga larut malam.</p>
        <!-- <a href="#" class="btn">read more</a> -->
        <!-- <div class="icons-container">
            <div class="icons">
                <img src="<?= base_url(''); ?>/landingpage/image/serv-1.png" alt="">
                <h3>fast delivery</h3>
            </div>  
            <div class="icons">
                <img src="<?= base_url(''); ?>/landingpage/image/serv-2.png" alt="">
                <h3>fresh food</h3>
            </div>   
            <div class="icons">
                <img src="<?= base_url(''); ?>/landingpage/image/serv-3.png" alt="">
                <h3>best quality</h3>
            </div>  
            <div class="icons">
                <img src="<?= base_url(''); ?>/landingpage/image/serv-4.png" alt="">
                <h3>24/7 support</h3>
            </div>           
        </div> -->
    </div>

</section>

<!-- about section ends -->

<!-- banner section starts  -->

    <section class="banner" id="banner">
    <div class="heading">
        <span>Menu</span>
        <h3>Kedai Kamyusi</h3>
    </div>

        <div class="grid-banner">
        <?php
             $no = 1;
            foreach($gambar as $row) :?>
            <div class="grid">
                <img src="<?=base_url('assets/images/'.$row['berkas']);?>" alt="">
                <div class="content center">
                    <span style="color:white"><?php echo $row['nama_produk']; ?></span>
                    <h3 style="color:white">Rp.<?php echo $row['harga']; ?></h3>
                    <a href="/Home/detail_produk/<?= $row['id']; ?>" class="btn" style="">Details Produk</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </section>

<!-- banner section ends -->

<!-- banner section starts  -->

<section class="banner" id="info">
    <div class="heading">
        <span>Informasi</span>
        <h3>Kedai Kamyusi</h3>
    </div>

        <div class="grid-banner">
        <?php
             $no = 1;
            foreach($promosi as $row) :?>
            <div class="grid">
                <img src="<?=base_url('assets/promosi/'.$row['berkas']);?>" alt="">
                <div class="content center">
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </section>

<!-- banner section ends -->

<!--Google map-->
<section class="bannerr">
<div class="heading">
        <span>Lokasi</span>
        <h3>Kedai Kamyusi</h3>
    </div>

<div class="container">
<div id="map-container-google-3" class="z-depth-1-half map-container-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.470093278225!2d108.31608311434174!3d-6.3330927637281125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb9b5edd7023b%3A0x663004ee71dc825e!2sKedai%20Kamyusi.!5e0!3m2!1sid!2sid!4v1648350908310!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</section>

<!-- order section starts  -->

<section class="order" id="order">

    <div class="heading">
        <span>Pesan Sekarang</span>
        <h3>di Kedai Kamyusi</h3>
    </div>

    <div class="icons-container">

        <div class="icons">
        <img src="<?= base_url(''); ?>/landingpage/image/icon1.png" alt="">
            <h3>7:00am to 10:30pm</h3>
        </div>

        <div class="icons">
            <img src="<?= base_url(''); ?>/landingpage/image/icon-2.png" alt="">
            <h3>0819-0470-3516</h3>
        </div>

        <div class="icons">
            <img src="<?= base_url(''); ?>/landingpage/image/icon-3.png" alt="">
            <h3>Jl. MT Haryono No.46/A, Depan, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45222</h3>
        </div>

    </div>

</section>

<!-- order section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Pilihan Menu</h3>
            <a href="#banner"><i class="fas fa-arrow-right"></i> Kopi Espresso</a>
            <a href="#banner"><i class="fas fa-arrow-right"></i> Moctails</a>
            <a href="#banner"><i class="fas fa-arrow-right"></i> Non-Coffe</a>
            <a href="#banner"><i class="fas fa-arrow-right"></i> Makanan</a>
            <a href="#banner"><i class="fas fa-arrow-right"></i> dan lain-lain...</a>
        </div>

        <div class="box">
            <h3>Link</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Home</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> Tentang Kami</a>
            <a href="#banner"> <i class="fas fa-arrow-right"></i> Menu</a>
            <a href="#menu"> <i class="fas fa-arrow-right"></i> Promo</a>
            <a href="#order"> <i class="fas fa-arrow-right"></i> Pesan Sekarang</a>
        </div>

        <!-- <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my order</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my favorite</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> terms of use</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privary policy</a>
        </div> -->

        <div class="box">
            <h3>Jam Buka</h3>
            <p>Senin  : 10:00am Sampai 24:00pm</p>
            <p>Selasa : 10:00am Sampai 24:00pm</p>
            <p>Rabu   : 10:00am Sampai 24:00pm</p>
            <p>Kamis  : 10:00am Sampai 24:00pm</p>
            <p>Jumat  : 10:00am Sampai 24:00pm</p>
            <p>Sabtu  : 10:00am Sampai 24:00pm</p>
            <p>Minggu : 10:00am Sampai 24:00pm</p>
        </div>

    </div>

    <div class="bottom">

        <div class="share">
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/kaf_kamyusi/" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UC_4oz2c31Iicm-R_bgoGPmw/videos" class="fab fa-youtube"></a>
        </div>

        <div class="credit"> Copyright 2022 © <span>Kedai Kamyusi</span> | all rights reserved! </div>
        
    </div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="<?= base_url(''); ?>/landingpage/js/script.js"></script>

</body>
</html>


