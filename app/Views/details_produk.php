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

<a href="<?= base_url(''); ?>" class="logo"> <i class="fas fa-angle-double-left"></i>Kamyusi</a>

<nav class="navbar">
        <a href="<?= base_url(''); ?>/#home">Home</a>
        <a href="<?= base_url(''); ?>/#about">Tentang Kami</a>
        <a href="<?= base_url(''); ?>/#banner">Menu</a>
        <a href="<?= base_url(''); ?>/#info">Informasi</a>
        <a href="<?= base_url(''); ?>/#order">Pesan Sekarang</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#order"><div id="login-btn" class="fas fa-phone"></div></a>
    </div>
</header>

<!-- header section ends  -->

   


<!-- about section starts  -->

<section class="about" id="about">


    <div class="grid">
        <img src="<?=base_url('assets/images/'.$gambar['berkas']);?>" width="500" alt="">
    </div>

        

    <div class="content">
    <div class="mb-3">
    
    <h3 class="title" value=""><?php echo $gambar['nama_produk']; ?></h3>
        <p><?php echo $gambar['deskripsi_produk']; ?></p>

         <div class="icons-container">
            <div class="icons">
                <img src="<?= base_url(''); ?>/landingpage/image/indonesian-rupiah.png" style="width: 30px;" alt="">
                <h3><?php echo $gambar['harga']; ?></h3>
            </div> 
    </div>
</section>

<!-- about section ends -->

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

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

    <div class="bottom">

        <div class="share">
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/kaf_kamyusi/" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UC_4oz2c31Iicm-R_bgoGPmw/videos" class="fab fa-youtube"></a>
        </div>

        <div class="credit"> Copyright 2021© <span>Kedai Kamyusi</span> | all rights reserved! </div>
        
    </div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="<?= base_url(''); ?>/landingpage/js/script.js"></script>

</body>
</html>


