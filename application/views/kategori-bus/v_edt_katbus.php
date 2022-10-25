<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data | Sales</title>
  <link href="../../assets/AdminLTE/dist/img/tracnew.png" rel="icon" type="images">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Jquery UI -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery-ui/jquery-ui.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url() . "index.php/control_katbus/view_katbus"; ?>" class="nav-link">
              <b>
                < Kembali</b></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="container">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6 mt-2 mb-2">
                <h1>Edit Data Kendaraan</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active">Data List BUS</li>
                  <li class="breadcrumb-item">Update</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">

            <?php foreach ($unit as $row):?>
              <form action="<?php echo base_url('index.php/control_katbus/getUpdateKatbus'); ?>" method="POST">
                <div class="card card-default">
                  <div class="card-header align-self-center">
                    <h6 class="card-title"><i class="fas fa-share-square"></i> FORM EDIT BUS</h6>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <!-- /.col -->
                      <div class="col-md-12">
                        <div class="item-group">
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>Tipe Kendaraan</label>
                                <select class="form-control" name="type[]">
                                  <option value="<?= $row->type ?>"><?= $row->type ?></option>
                                  <option value="Small">Small</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Big">Big</option>
                                </select>
                                <div class="invalid-feedback"></div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Kategori Kendaraan</label>
                                <input type="text" class="form-control" name="ktgr[]" placeholder="Masukkan Jenis Kategori Kendaraan" value="<?= $row->kategori ?>">
                                <div class="invalid-feedback"></div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Jumlah Kursi (Seat)</label>
                                <select class="form-control" name="seat[]">
                                  <option value="<?= $row->seat ?>"><?= $row->seat ?></option>
                                  <option value="11 Seat">11 Seat</option>
                                  <option value="13 Seat">13 Seat</option>
                                  <option value="15 Seat">15 Seat</option>
                                  <option value="16 Seat">16 Seat</option>
                                  <option value="23 Seat">23 Seat</option>
                                  <option value="29 Seat">29 Seat</option>
                                  <option value="31 Seat">31 Seat</option>
                                  <option value="35 Seat">35 Seat</option>
                                  <option value="40 Seat">40 Seat</option>
                                  <option value="45 Seat">45 Seat</option>
                                  <option value="48 Seat">48 Seat</option>
                                  <option value="59 Seat">59 Seat</option>
                                </select>
                                <div class="invalid-feedback"></div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nomor Polisi</label>
                                <input type="text" class="form-control" name="npl[]" placeholder="Masukkan Nomor Plat Polisi" value="<?= $row->nopol ?>">
                                <div class="invalid-feedback"></div>
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                        </div>

                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div id="show-item">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
                </div>
              </form>
              <?php endforeach; ?>
              <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
          </section>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="float-right d-none d-sm-block">
        </div>
        &copy; <?php echo date('Y'); ?> UNITED AUTOMOBIL SEMBILANPULUH UTAMA.
      </div>

    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- Page specific script -->
  <script>
  </script>
</body>

</html>