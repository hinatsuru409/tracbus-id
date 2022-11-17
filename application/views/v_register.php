<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRAC BUS | Register</title>
  <link href="../../assets/AdminLTE/dist/img/traclogo.png" rel="icon" type="images">
  <link href="../../assets/AdminLTE/dist/img/image001.png" rel="icon" type="images/x-icon">         
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>dist/css/adminlte.min.css">
  <style>body {
      background-image: url("../../assets/AdminLTE/dist/img/finance_0bdk.svg");
      background-position: right;
      background-repeat: no-repeat;
      background-size: 25%;
      
    }</style>
<html>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
  </div>
    <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <center><h5 class="text-center">Form Register</h5></center>  
            <hr>
            <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
	        <head>
		<title>Form Register</title>
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>assets/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
		<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
          <form action="<?php echo base_url() . 'index.php/control_admin/prosess'; ?>" method="post">
          <div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
					</div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>                                            
          </div>      
          <!-- /.col -->
        </div>
        <div class="text-center mt-4">
                <a class="small" href="<?php echo base_url() . 'index.php/control_admin/view_login'; ?>">Sudah Buat Akun!</a>
        </div>     
        <hr>
            <center><h7 class="text-center">Copyright &copy; 2021-2025</h7>&nbsp;<a><b>UAS TRAC BUS</b></a></center>
      </form>
    
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#"></a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center"></a>
      </p>
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
