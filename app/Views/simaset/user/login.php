<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=  base_url();?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=  base_url();?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=  base_url();?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SIMASET</b>KOMINFO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert-alert-denger"> <?= session()->getFlashdata('msg')?></div>
                <?php endif;?>
      <form action="<?= base_url();?>/Login/codelogin" method="post">
        <div class="input-group mb-3">
          <input class="form-control" placeholder="Email" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <p>
            <a href="#">forgot password?</a>
          </p>
          </div>
          <!-- /.col -->
        </div>
        <div class="col-14">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <br>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=  base_url();?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=  base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=  base_url();?>/dist/js/adminlte.min.js"></script>
</body>
</html>
