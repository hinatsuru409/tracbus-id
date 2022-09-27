<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data | Sales</title>

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
            <a href="<?php echo base_url() . " index.php/control_admin/view_sales"; ?>" class="nav-link">
              < Kembali</a>
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
                <h1>Tambah Data Sales</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item">Sales</li>
                  <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

            <form role="form" action="<?php echo base_url() . 'index.php/control_admin/getAddSales'; ?>" method="POST">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Lorem ipsum dolor sit amet</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">

                    <!-- /.col -->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Booking Order</label>
                            <input type="text" class="form-control" name="bko"
                              placeholder="Masukkan kode Booking Order">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Profit Center</label>
                            <select class="form-control" name="tyunit">
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
                            <label>Nomor Reservasi</label>
                            <input type="text" class="form-control" name="rsv" placeholder="Masukkan Reservasi ID">
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
                        <div class="col-sm-2">
                          <div class="form-group">
                            <div class="form-group">
                              <label>Jenis Pembayaran</label>
                              <select class="form-control" name="jpm">
                                <option>PO</option>
                                <option>GL</option>
                                <option>IN Advanced</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <label>Invoice</label>
                            <select class="form-control" name="invo">
                              <option>YA</option>
                              <option>TIDAK</option>
                            </select>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Spesifikasi</label>
                            <select class="form-control" name="sp">
                              <option> -- Pilih Spesifikasi -- </option>
                              <?php foreach ($spesifikasi as $sp) : ?>
                              <option value="<?php echo $sp->id_spek; ?>">
                                <?php echo $sp->jenis_spek; ?>
                              </option>
                              <?php endforeach; ?>
                            </select>
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
                          <div class="form-group">
                            <label>Source Data</label>
                            <select class="form-control" name="sd">
                              <option>-- Pilih Source Data --</option>
                              <?php foreach ($source_data as $sd) : ?>
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
                              <option>NON-AFFCO</option>
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
                        <div class="col">
                          <div class="form-group">
                            <label>PIC Customer</label>
                            <input type="text" class="form-control" name="pcus" placeholder="Masukkan nama customer">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>PIC Contact</label>
                            <input type="text" class="form-control" name="picc"
                              placeholder="Masukkan kontak Person In Charge">
                          </div>
                        </div>
                      </div>

                      <div class="col border-bottom mb-3 mt-2"></div>

                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Type Unit</label>
                            <select class="form-control" name="tyunit" id="drop-ty">
                              <option>-- Pilih Tipe Unit BUS --</option>
                              <?php foreach ($type_unit as $row) {
                                echo "<option value='" . $row['id_unit'] . "'>" . $row['nama_unit'] . "</option>";
                              } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Kategori Unit</label>
                            <select class="select2" style="width: 100%;" name="kg" id="drop-kg">
                              <option> -- Pilih Kategori Bus -- </option>
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label>Jumlah Bangku</label>
                            <select class="form-control" name="seat" id="drop-seat">
                              <option>-- Pilih Jumlah Seat/Bangku --</option>
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>No. Polisi</label>
                            <select class="select2" style="width: 100%;" name="npl" id="drop-npl">
                              <option>-- Masukkan Nomor Plat Polisi --</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Driver</label>
                            <div class="input-group-append">
                              <div class="input-group-text"><i class="fa fa-user"></i></div>
                              <input type="text" class="form-control" name="drv" placeholder="Masukkan nama Driver">
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Maksud Sewa</label>
                            <select class="select2" style="width: 100%;" name="sw">
                              <option>-- Pilih kebutuhan sewa --</option>
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
                                placeholder="Masukkan tempat tujuan yang dipilih">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Provinsi</label>
                            <div class="input-group-append">
                              <div class="input-group-text"><i class="fa fa-map"></i></div>
                              <input type="text" class="form-control" name="pr"
                                placeholder="Masukkan nama Daerah/Provinsi">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Alamat Tujuan</label>
                            <textarea class="form-control" name="ket_addc" rows="4" placeholder="Enter ..."></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal mulai Pemesanan</label>
                            <div class="input-group date">
                              <input type="text" class="form-control" id="reservationdate" autocomplete="off"
                                name="tgl_mulai_p" placeholder="Masukkan Tanggal mulai pemesanan" />
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal akhir Pemesanan</label>
                            <div class="input-group date">
                              <input type="text" class="form-control" id="reservationdate2" autocomplete="off"
                                name="tgl_akhir_p" placeholder="Masukkan Tanggal akhir pemesanan" />
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Waktu Sewa</label>
                            <div class="input-group">
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-clock"></i></div>
                              </div>
                              <input type="number" class="form-control" autocomplete="off" id="countFromDate" min="0"
                                name="wkts" placeholder="Masukkan durasi waktu sewa">
                              <span>
                                <h6 class="col mt-2">Hari</h6>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Toll Parkir</label>
                            <select class="form-control" name="toll">
                              <option>Exclude</option>
                              <option>Include</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col border-bottom mb-4 mt-3"></div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Revenue per Unit (1)</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <h7>Rp. </h7>
                                </span>
                              </div>
                              <input type="number" class="form-control" name="rvnu" id="revenueunit"
                                onkeyup="updateSummary()">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Additional Charge (2)</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <h7>Rp. </h7>
                                </span>
                              </div>
                              <input type="number" class="form-control" name="addc" id="addcharge"
                                onkeyup="updateSummary()">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Keterangan Additional Charge</label>
                        <textarea class="form-control" name="ket_addc" rows="2" placeholder="Enter ..."></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Price List</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <h7>Rp. </h7>
                                </span>
                              </div>
                              <input type="number" class="form-control" name="prcl" id="pricelist">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Diskon</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-percent"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" name="dsk" placeholder="Masukkan besaran diskon"
                                id="diskon">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Total Revenue (1+2)</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <h7>Rp. </h7>
                            </span>
                          </div>
                          <input type="number" class="form-control" name="total_rvnu" id="totalrevenue">
                        </div>
                      </div>

                      <div class="col border-bottom mb-3 mt-4"></div>

                      <!-- Payment Form -->
                      <!-- Payment 1-->
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 1</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 1</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 1</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-success form-control payment-form-add-more" type="button">
                              <i class="fa fa-plus"></i> Add More
                            </button>
                          </div>
                        </div>
                      </div>
                      <!-- Payment 1 End -->
                      <!-- Payment 2 -->
                      <div class="payment-form-block-1" style="display : none !important">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Payment 2</label>
                              <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal Payment 2</label>
                              <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                  data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                <div class="input-group-append" data-target="#paymentdate1"
                                  data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Nominal Payment 2</label>
                              <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                                name="nom_py1">
                            </div>
                          </div>
                          <div class="col-sm-2 align-self-end">
                            <div class="form-group">
                              <button class="btn btn-danger payment-form-remove" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Payment 2 End -->
                      <!-- Payment 3 -->
                      <div class="payment-form-block-2" style="display : none !important">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 3</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 3</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 3</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-danger payment-form-remove" type="button">
                              <i class="fa fa-times"></i> Remove
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                      <!-- Payment 3 End -->
                      <!-- Payment 4 -->
                      <div class="payment-form-block-3" style="display : none !important">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 4</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 4</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 4</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-danger payment-form-remove" type="button">
                              <i class="fa fa-times"></i> Remove
                            </button>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- Payment 4 End -->
                      <!-- Payment 5 -->
                      <div class="payment-form-block-4" style="display : none !important">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 5</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 5</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 5</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-danger payment-form-remove" type="button">
                              <i class="fa fa-times"></i> Remove
                            </button>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- Payment 5 End -->
                      <!-- Payment 6 -->
                      <div class="payment-form-block-5" style="display : none !important">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 6</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 6</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 6</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-danger payment-form-remove" type="button">
                              <i class="fa fa-times"></i> Remove
                            </button>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- Payment 6 End -->
                      <!-- Payment 7 -->
                      <div class="payment-form-block-6" style="display : none !important">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 7</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 7</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 7</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-danger payment-form-remove" type="button">
                              <i class="fa fa-times"></i> Remove
                            </button>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- Payment 7 End -->
                      <!-- Payment 8 -->
                      <div class="payment-form-block-7" style="display : none !important">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>Payment 8</label>
                            <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Tanggal Payment 8</label>
                            <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label>Nominal Payment 8</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
                          </div>
                        </div>
                        <div class="col-sm-2 align-self-end">
                          <div class="form-group">
                            <button class="btn btn-danger payment-form-remove" type="button">
                              <i class="fa fa-times"></i> Remove
                            </button>
                          </div>
                        </div>
                      </div>
                      </div>
                      <!-- Payment 8 End -->
                      <!-- Payment Form Ends -->
                      <div class="col border-bottom mb-4 mt-3"></div>

                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Total Payment</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <h7>Rp. </h7>
                                </span>
                              </div>
                              <input type="number" class="form-control" name="total_py" id="totalpayment"
                                placeholder="Masukkan jumlah total pembayaran" onkeyup="subtracPayment()">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label>Collect PPh 23</label>
                            <select class="form-control" name="colpph23" id="collectpph23" onchange="summaryPajak()">
                              <option></option>
                              <option>YA</option>
                              <option>TIDAK</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-group">
                            <label>PPh 23</label>
                            <input type="number" min="0" class="form-control" name="pph" id="pph23"
                              placeholder="Masukkan hasil PPH">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Selisih Pembayaran (Payment-Revenue)</label>
                            <input type="text" class="form-control" name="slpy" id="selisih-py"
                              placeholder="Masukkan selisih pembayaran (Payment - Revenue)">
                          </div>
                          <div class="form-group">
                            <label>Catatan Lainnya</label>
                            <textarea class="form-control" name="note" rows="2" placeholder="Enter ..."></textarea>
                          </div>
                        </div>
                        <div class="col-md-4 align-self-center">
                          <div class="col-sm d-flex justify-content-center align-items-center border">
                            <p class="flex-column text-right">
                            <p class="text-muted mr-2 h5">STATUS :</p>
                            <p class="font-weight-bold" style="padding-top: 10px;">
                              <!-- <i class="fa fa-times text-danger"></i> KURANG BAYAR -->
                            </p>
                            </p>
                            <!-- <h5 class="mr-2">STATUS :</h5><i class="fa fa-times mr-2"></i><p> KURANG BAYAR</p> -->
                          </div>
                        </div>
                      </div>

                      <div class="col border-bottom mb-4 mt-3"></div>

                      <!-- Upload Form -->
                      <div class="after-add-more form-group">
                        <label>Upload Tahap</label>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Masukkan kode upload" width="100%">
                          <div class="col-sm-2 col-form-group">
                            <button class="btn btn-success add-more" type="button">
                              <i class="fa fa-plus"></i> Add More
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="copy" style="display:none !important;">
                        <div class="form-group">
                          <label>Upload Tahap</label>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger remove" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>



                    </div>
                    <!-- /.col -->
                  </div>

                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
          </div>
          </form>
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
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
  <script
    src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- bootstrap color picker -->
  <script
    src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/dropzone/min/dropzone.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Date picker
      $("#reservationdate").datepicker({
        minDate: 0,
        maxDate: '+1Y+6M',
        onSelect: function (dateStr) {
          var min = $(this).datepicker('getDate'); // Get selected date
          $("#reservationdate2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
        }
      });

      $("#reservationdate2").datepicker({
        minDate: '0',
        maxDate: '+1Y+6M',
        onSelect: function (dateStr) {
          var max = $(this).datepicker('getDate'); // Get selected date
          $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
          totalDate();
        }
      });

      function totalDate(dateStr) {
        var start = $("#reservationdate").datepicker("getDate");
        var end = $("#reservationdate2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24) + (1);
        $("#countFromDate").val(days);
      }

      $('#paymentdate1').datetimepicker({
        format: 'L'
      });

      $('#paymentdate2').datetimepicker({
        format: 'L'
      });

      $('#paymentdate3').datetimepicker({
        format: 'L'
      });

      $('#paymentdate4').datetimepicker({
        format: 'L'
      });

    })

    var r = document.getElementById("revenueunit");
    var a = document.getElementById("addcharge");
    var tr = document.getElementById("totalrevenue");
    var p23 = document.getElementById("pph23");
    var tp = document.getElementById("totalpayment");
    var spy = document.getElementById('selisih-py');

    function updateSummary() {
      var revenueResult = parseInt(r.value) + parseInt(a.value);
      if (!isNaN(revenueResult)) {
        tr.value = revenueResult;
      } else {
        tr.value = 0;
      }
    }

    function summaryPajak() {
      var select = document.getElementById('collectpph23').value;
      if (select === "YA") {
        var pphResult = parseInt(tr.value) * 0.02;
        p23.value = pphResult;

      } else if (select === "TIDAK") {
        p23.value = 0;
      } else {
        p23.value = "";
      }
    }

    function subtracPayment() {
      var selisihResult = parseInt(tr.value) - parseInt(tp.value);
      if (!isNaN(selisihResult)) {
        spy.value = selisihResult;
      } else {
        spy.value = 0;
      }
    }

    // Dependent Dropdown //
    // Fetching Type Unit
    var baseURL = "<?php echo base_url(); ?>";
    $(document).ready(function () {
      $('#drop-ty').change(function () {
        var unit = $(this).val();

        // AJAX request
        $.ajax({
          url: '<?= base_url() ?>index.php/control_admin/jsonKategori',
          method: 'post',
          data: {
            id_unit: unit
          },
          dataType: 'json',
          success: function (response) {

            // Remove options 
            $('#drop-kg').find('option').not(':first').remove();
            $('#drop-seat').find('option').not(':first').remove();
            $('#drop-npl').find('option').not(':first').remove();

            // Add options
            $.each(response, function (index, data) {
              $('#drop-kg').append('<option value="' + data['id_kategori'] + '">' + data['jenis_kategori'] + '</option>');
            });
          }
        });
      });

      // Kategori Unit change
      $('#drop-kg').change(function () {
        var kategori = $(this).val();

        // AJAX request
        $.ajax({
          url: '<?= base_url() ?>index.php/control_admin/jsonSeat',
          method: 'post',
          data: {
            id_kategori: kategori
          },
          dataType: 'json',
          success: function (response) {

            // Remove options
            $('#drop-seat').find('option').not(':first').remove();
            $('#drop-npl').find('option').not(':first').remove();

            // Add options
            $.each(response, function (index, data) {
              $('#drop-seat').append('<option value="' + data['id_seat'] + '">' + data['jmlh_seat'] + '</option>');
            });
          }
        });
      });

      // Seat Unit change
      $('#drop-seat').change(function () {
        var seat = $(this).val();

        // AJAX request
        $.ajax({
          url: '<?= base_url() ?>index.php/control_admin/jsonPlat',
          method: 'post',
          data: {
            id_seat: seat
          },
          dataType: 'json',
          success: function (response) {

            // Remove options
            $('#drop-npl').find('option').not(':first').remove();

            // Add options
            $.each(response, function (index, data) {
              $('#drop-npl').append('<option value="' + data['id_nopol'] + '">' + data['nomor_plat'] + '</option>');
            });
          }
        });
      });
    });
    // End //

    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    $(document).ready(function () {
      $(".payment-form-add-more").click(function () {
        $(".payment-form-block-1").show();
      })
    });

    /*var maxField = 5;
    var x = 1;
    $(document).ready(function () {
      $(".payment-form-add-more").click(function () {
        if (x < maxField) {
          x++;
          var html = $(".payment-form-copy").html();
          $(".after-add-more").after(html);
        }
      });
      $("body").on("click", ".payment-form-remove", function () {
        $(this).parents(".form-on").remove();
        x--;
      });
    });*/
  </script>
</body>

</html>