<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(''); ?>/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url(''); ?>/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/login/css/style.css">

    <title>Login | Kedai Kamyusi</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url(''); ?>/login/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Selamat Datang</strong></h3>
            <p class="mb-4">Silahkan Login Terlebih dahulu untuk melanjutkan</p>
            
            <?php if (isset($validation)) : ?>
            <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
            </div>
            <?php endif; ?>

            <form action="<?= base_url('UserController/login') ?>" method="post">
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Masukan email yang valid." name="email" id="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
              </div>
              
              <input type="submit" value="Log In" class="btn btn-block btn-success">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?= base_url(''); ?>/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url(''); ?>/login/js/popper.min.js"></script>
    <script src="<?= base_url(''); ?>/login/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>/login/js/main.js"></script>
  </body>
</html>