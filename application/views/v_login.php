<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRAC BUS | Login</title>
  <link href="<?php echo base_url('assets/AdminLTE/') ?>dist/img/traclogo.png" rel="icon" type="images">
  <link href="<?php echo base_url('assets/AdminLTE/') ?>dist/img/image001.png" rel="icon" type="images/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>dist/css/adminlte.min.css">
  <style>
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <center><img src="<?php echo base_url('assets/AdminLTE/') ?>/dist/img/traclogo.png" width="200" height="150"></center>
        <p class="text-center">PT. United Automobil SembilanPuluh Utama</p>
        <hr>
        <form action="<?php echo base_url() . 'index.php/control_admin/authValidation'; ?>" method="post">
          <?= $this->session->flashdata('msg'); ?>
          <div class="input-group mb-3">
            <input type="text" name="post-user" id="username" class="form-control <?= form_error('post-user') ? 'is-invalid' : '' ?>" placeholder="Username" autocomplete="off">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <div class="invalid-feedback"><?= form_error('post-user')  ?></div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="post-pass" id="password" class="form-control <?= form_error('post-pass') ? 'is-invalid' : '' ?>" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="invalid-feedback"><?= form_error('post-pass')  ?></div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <hr>
              <center>
                <h7 class="text-center">Copyright &copy; 2021-2025</h7>&nbsp;<a><b>UAS TRAC BUS</b></a>
              </center>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>

      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
</body>

</html>