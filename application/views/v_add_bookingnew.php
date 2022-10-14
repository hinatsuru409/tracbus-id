<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD Booking New </title>
  <link href="../../assets/AdminLTE/dist/img/tracnew.png" rel="icon" type="images">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet"
    href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="<?php echo base_url('assets/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet"
    href="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet"
    href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Jquery UI -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery-ui/jquery-ui.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/dropzone/min/dropzone.min.css">
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
            <a href="<?php echo base_url() . "index.php/control_admin/view_sales"; ?>" class="btn btn-primary">
              Kembali</a>

            <!-- Date and Time Zone -->
            <?php 
                            $this->load->helper('date'); 
                            date_default_timezone_set('Asia/jakarta');
 ?>
            <!-- /.navbar -->
            <?php
                            $datestring = '%D: %d-%M-%Y';
                            $timestring = '%h:%i %A';
                            $time = time();
 ?>
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
              <div class="col-sm-6">
                <img src="../../assets/AdminLTE/dist/img/tracnew.png" alt="AdminTrac" class="#" style="opacity: .8">
                <h6><b>UNITED AUTOMOBIL SEMBILANPULUH UTAMA. </b></h6>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Keluar</a></li>
                  <li class="breadcrumb-item active">Sales</li>
                  <li class="breadcrumb-item">Tambah Data</li>
                </ol>
              </div>
            </div>
          </div>
          <!--- Main Content -->
          <section class="content">
            <div class="container-fluid">

              <form role="form" action="<?php echo base_url() . 'index.php/control_admin/getAddSales'; ?>"
                method="POST">
                <div class="card card-default">
                  <div class="card-header">
                    <center><i class="fas fa-share-square"> FORM BILLING RENT BUS</center></i>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nomor Reservasi</label>
                          <input type="text" class="form-control" name="rsv" placeholder="Masukkan Nomor Reservasi">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Booking Order</label>
                          <input type="text" class="form-control" name="bko" placeholder="Masukkan kode Booking Order">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Profit Center</label>
                          <select class="form-control" name="profit">
                            <option>-- Pilih Profit Utama --</option>
                            <option>UB01</option>
                            <option>UB02</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Person In Charge (PIC) Sales</label>
                          <input type="text" class="form-control" name="pic" placeholder="Masukkan PIC Sales">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nama Customer Master Data (CMD)</label>
                          <input type="text" class="form-control" name="nama_cmd"
                            placeholder="Masukkan nama Customer Master Data">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nama Instansi/Perusahaan</label>
                          <input type="text" class="form-control" name="ins"
                            placeholder="Masukkan nama Instansi Perusahaan, Sekolah, Tour & Travel, dll">
                        </div>
                      </div>
                    </div>

                    <div class="col border-bottom mb-3 mt-2"></div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Order Type</label>
                          <input type="text" class="form-control" name="ord" placeholder="Masukkan tipe order">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                          <label>Jenis Pembayaran</label>
                          <select class="form-control" name="jpm">
                            <option>PO</option>
                            <option>IN Advanced</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <label>INVOICE</label>
                          <select class="form-control" name="invo">
                            <option>Ya</option>
                            <option>Tidak</option>
                          </select>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Spesifikasi</label>
                          <select class="form-control" name="sp">
                            <option>----- Pilih Spesifikasi----</option>
                            <?php foreach($spesifikasi as $sp) : ?>
                            <option value="<?php echo $sp->id_spek; ?>">
                              <?php echo $sp->jenis_spek; ?>
                            </option>
                            <?php endforeach; ?>
                            </selecct>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Type Customer</label>
                            <select class="form-control" name="tycus">
                              <option>New</option>
                              <option>Existing</option>
                            </select>
                          </div>
                        </div>
                      <div class="col">
                        <div class="form--group">
                          <label>Source Data</label>
                          <select class="form-control" name="sd">
                            <option>-------Pilih Source Data -----</option>
                            <?php foreach($source_data as $sd) : ?>
                            <option value="<?php echo $sd->id_source; ?>">
                              <?php echo $sd->jenis_source; ?>
                            </option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Group</label>
                          <select class="form-control" name="grp">
                            <option>Non-AFFCO</option>
                            <option>AFFCO</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col border-bottom mb-3 mt-2"></div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Customer Master Data</label>
                          <input type="text" class="form-control" name="cmd" placeholder="Masukkan tipe CMD">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>PIC Customer</label>
                        <input type="text" class="form-control" name="pcus" placeholder="Masukkan nama customer">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label>PIC Contact</label>
                        <input type="text" class="form-control" name="picc" placeholder="Masukkan Kontak PIC">
                      </div>
                    </div>
                  </div>
                  <div class="col border-bottom mb-3 mt-2"></div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>No. Polisi</label>
                        <input type="text" class="form-control" name="npl" id="drop-npl">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label>Type Unit</label>
                        <input type="text" class="form-control" name="tyunit">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label>Kategori Unit</label>
                        <input type="text" class="form-control" name="kg">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Jumlah Bangku</label>
                        <input type="text" class="form-control" name="seat">
                      </div>
                    </div>
                  </div>
                  <!--- / .col -->
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label>Driver</label>
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-user"></i></div>
                          <input type="text" class="form-control" name="drv" placeholder="Masukkan Nama Driver">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label>Maksud Sewa</label>
                        <select class="sewa-select" style="width: 100%;" name="sw">
                          <option></option>
                          <?php foreach ($maksud_sewa as $sw) : ?>
                          <option value="<?php echo $sw->id_sewa; ?>">
                            <?php echo $sw->jenis_sewa; ?>
                          </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Rute Tujuan</label>
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                          <input type="text" class="form-control" name="rt"
                            placeholder="Masukkan Tempat tujuan yang dipilih">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Provinsi</label>
                        <div class="input-group-append">
                          <div class="input-group-text"></i class="fa fa-map"></i></div>
                          <input type="text" class="form-control" name="pr" placeholder="Masukkan nama Daerah/Provinsi">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Alamat Tujuan</label>
                        <textarea class="form-control" name="ket_addc" rows="4" placeholder="Enter...."></textarea>
                      </div>
                    </div>
                  </div>


</body>

</html>