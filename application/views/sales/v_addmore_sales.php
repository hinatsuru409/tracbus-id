<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data | Sales</title>
  <link href="../../assets/AdminLTE/dist/img/traclogo.png" rel="icon" type="images">

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
            <a href="<?php echo base_url() . "index.php/control_sales/view_sales"; ?>" class="btn btn-info">
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
              <div class="col-sm-6 mt-2 mb-2">
                <h1>Tambah Data Sales</h1>
              </div>

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active">Sales</li>
                  <li class="breadcrumb-item">Tambah data</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
            <?php foreach ($fetch_data as $row) : ?>
              <form role="form" action="<?php echo base_url() . 'index.php/control_sales/getAddSales'; ?>" method="POST">
                <div class="card card-default">
                  <div class="card-header align-self-center">
                    <h6 class="card-title"><i class="fas fa-share-square"></i> FORM BILLING RENT BUS</h6>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                    <input type="hidden" name="id" value="<?= $row->id ?>">
                      <!-- /.col -->
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Nomor Reservasi</label>
                              <input type="text" class="form-control <?= form_error('rsv') ? 'is-invalid' : '' ?>" name="rsv" placeholder="Masukkan Nomor Reservasi" value="<?= $row->no_reservasi ?>" readonly>
                              <div class="invalid-feedback"><?= form_error('rsv')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Booking Order</label>
                              <input type="text" class="form-control  <?= form_error('bko') ? 'is-invalid' : '' ?>" name="bko" placeholder="Masukkan kode Booking Order">
                              <div class="invalid-feedback"><?= form_error('bko')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Profit Center</label>
                              <select class="form-control <?= form_error('profit') ? 'is-invalid' : '' ?>" name="profit">
                                <option disabled selected>-- Pilih Profit Utama --</option>
                                <option value="UB01">UB01</option>
                                <option value="UB02">UB02</option>
                              </select>
                              <div class="invalid-feedback"><?= form_error('profit')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Person In Charge (PIC) Sales</label>
                              <input type="text" class="form-control <?= form_error('pic') ? 'is-invalid' : '' ?>" name="pic" placeholder="Masukkan PIC Sales">
                              <div class="invalid-feedback"><?= form_error('pic')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Nama Customer Master Data (CMD)</label>
                              <input type="text" class="form-control <?= form_error('nama_cmd') ? 'is-invalid' : '' ?>" name="nama_cmd" placeholder="Masukkan nama Customer Master Data">
                              <div class="invalid-feedback"><?= form_error('nama_cmd')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Nama Instansi/Perusahaan</label>
                              <input type="text" class="form-control <?= form_error('ins') ? 'is-invalid' : '' ?>" name="ins" placeholder="Masukkan nama Instansi Perusahaan, Sekolah, Tour & Travel, dll">
                              <div class="invalid-feedback"><?= form_error('ins')  ?></div>
                            </div>
                          </div>
                        </div>

                        <div class="col border-bottom mb-3 mt-2"></div>

                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Tipe Order</label>
                              <select class="form-control <?= form_error('ord') ? 'is-invalid' : '' ?>" name="ord">
                                <option disabled selected>-- Pilih Tipe Order --</option>
                                <option value="B2C">B2C</option>
                                <option value="B2B">B2B</option>
                              </select>
                              <div class="invalid-feedback"><?= form_error('ord')  ?></div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select class="form-control <?= form_error('jpm') ? 'is-invalid' : '' ?>" name="jpm">
                                  <option disabled selected>-- Pilih Jenis Pembayaran --</option>
                                  <option value="PO">PO</option>
                                  <option value="IN Advanced">IN Advanced</option>
                                </select>
                                <div class="invalid-feedback"><?= form_error('jpm')  ?></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label>Invoice</label>
                              <select class="form-control <?= form_error('invo') ? 'is-invalid' : '' ?>" name="invo">
                                <option disabled selected>-- Pilih Keterangan Faktur --</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                              </select>
                              <div class="invalid-feedback"><?= form_error('invo')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Spesifikasi</label>
                              <select class="spek-select form-control <?= form_error('sp') ? 'is-invalid' : '' ?>" name="sp">
                                <option></option>
                                <?php foreach ($spesifikasi as $sp) : ?>
                                  <option value="<?php echo $sp->id_spek; ?>"><?php echo $sp->jenis_spek; ?></option>
                                <?php endforeach; ?>
                              </select>
                              <div class="invalid-feedback"><?= form_error('sp')  ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Tipe Customer</label>
                              <select class="form-control <?= form_error('tycus') ? 'is-invalid' : '' ?>" name="tycus">
                                <option disabled selected>-- Pilih Tipe Customer/Pelanggan</option>
                                <option value="New">New</option>
                                <option value="Existing">Existing</option>
                              </select>
                              <div class="invalid-feedback"><?= form_error('tycus')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Source Data</label>
                              <select class="source-select form-control <?= form_error('sd') ? 'is-invalid' : '' ?>" name="sd">
                                <option></option>
                                <?php foreach ($source_data as $sd) : ?>
                                  <option value="<?php echo $sd->id_source; ?>"><?php echo $sd->jenis_source; ?></option>
                                <?php endforeach; ?>
                              </select>
                              <div class="invalid-feedback"><?= form_error('sd')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Group</label>
                              <select class="form-control <?= form_error('grp') ? 'is-invalid' : '' ?>" name="grp">
                                <option disabled selected>-- Pilih Group --</option>
                                <option value="NON-AFFCO">NON-AFFCO</option>
                                <option value="AFFCO">AFFCO</option>
                              </select>
                              <div class="invalid-feedback"><?= form_error('grp')  ?></div>
                            </div>
                          </div>
                        </div>

                        <div class="col border-bottom mb-3 mt-2"></div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Customer Master Data</label>
                              <input type="text" class="form-control <?= form_error('cmd') ? 'is-invalid' : '' ?>" name="cmd" placeholder="Masukkan tipe CMD">
                              <div class="invalid-feedback"><?= form_error('cmd')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>PIC Customer</label>
                              <input type="text" class="form-control <?= form_error('pcus') ? 'is-invalid' : '' ?>" name="pcus" placeholder="Masukkan nama customer">
                              <div class="invalid-feedback"><?= form_error('pcus')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>PIC Contact</label>
                              <input type="text" class="form-control <?= form_error('picc') ? 'is-invalid' : '' ?>" name="picc" placeholder="Masukkan kontak Person In Charge">
                              <div class="invalid-feedback"><?= form_error('picc')  ?></div>
                            </div>
                          </div>
                        </div>

                        <div class="col border-bottom mb-3 mt-2"></div>

                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>No. Polisi</label>
                              <input type="text" class="form-control <?= form_error('npl') ? 'is-invalid' : '' ?>" name="npl" id="drop-npl">
                              <div class="invalid-feedback"><?= form_error('npl')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Type Unit</label>
                              <input type="text" class="form-control <?= form_error('tyunit') ? 'is-invalid' : '' ?>" name="tyunit">
                              <div class="invalid-feedback"><?= form_error('tyunit')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kategori Unit</label>
                              <input type="text" class="form-control <?= form_error('kg') ? 'is-invalid' : '' ?>" name="kg">
                              <div class="invalid-feedback"><?= form_error('kg')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label>Jumlah Bangku</label>
                              <input type="text" class="form-control <?= form_error('seat') ? 'is-invalid' : '' ?>" name="seat">
                              <div class="invalid-feedback"><?= form_error('seat')  ?></div>
                            </div>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Driver</label>
                              <input type="text" class="form-control <?= form_error('drv') ? 'is-invalid' : '' ?>" name="drv" placeholder="Masukkan nama Driver">
                              <div class="invalid-feedback"><?= form_error('drv')  ?></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Maksud Sewa</label>
                              <select class="sewa-select <?= form_error('sw') ? 'is-invalid' : '' ?>" style="width: 100%;" name="sw">
                                <option></option>
                                <?php foreach ($maksud_sewa as $sw) : ?>
                                  <option value="<?php echo $sw->id_sewa; ?>"><?php echo $sw->jenis_sewa; ?></option>
                                <?php endforeach; ?>
                              </select>
                              <div class="invalid-feedback"><?= form_error('sw')  ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rute Tujuan</label>
                              <input type="text" class="form-control <?= form_error('rt') ? 'is-invalid' : '' ?>" name="rt" placeholder="Masukkan tempat tujuan yang dipilih">
                              <div class="invalid-feedback"><?= form_error('rt')  ?></div>
                            </div>
                            <div class="form-group">
                              <label>Provinsi</label>
                              <input type="text" class="form-control <?= form_error('pr') ? 'is-invalid' : '' ?>" name="pr" placeholder="Masukkan nama Daerah/Provinsi">
                              <div class="invalid-feedback"><?= form_error('pr')  ?></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Alamat Tujuan</label>
                              <textarea class="form-control <?= form_error('address') ? 'is-invalid' : '' ?>" name="address" rows="4" placeholder="Enter ..."></textarea>
                              <div class="invalid-feedback"><?= form_error('address')  ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal mulai Pemesanan</label>
                              <div class="input-group date">
                                <input type="text" class="form-control <?= form_error('tgl_mulai_p') ? 'is-invalid' : '' ?>" id="reservationdate" autocomplete="off" name="tgl_mulai_p" placeholder="Masukkan Tanggal mulai pemesanan" />
                                <div class="input-group-append">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <div class="invalid-feedback"><?= form_error('tgl_mulai_p')  ?></div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal akhir Pemesanan</label>
                              <div class="input-group date">
                                <input type="text" class="form-control <?= form_error('tgl_akhir_p') ? 'is-invalid' : '' ?>" id="reservationdate2" autocomplete="off" name="tgl_akhir_p" placeholder="Masukkan Tanggal akhir pemesanan" />
                                <div class="input-group-append">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <div class="invalid-feedback"><?= form_error('tgl_akhir_p')  ?></div>
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
                                <input type="number" class="form-control <?= form_error('wkts') ? 'is-invalid' : '' ?>" autocomplete="off" id="countFromDate" min="0" name="wkts" placeholder="Masukkan durasi waktu sewa">
                                <span>
                                  <h6 class="col mt-2">Hari</h6>
                                </span>
                                <div class="invalid-feedback"><?= form_error('wkts')  ?></div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Toll Parkir</label>
                              <select class="form-control" name="toll">
                                <option disabled selected>-- Pilih Salah Satu --</option>
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
                              <label>Revenue Unit (1)</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <h7>Rp. </h7>
                                  </span>
                                </div>
                                <input type="number" class="form-control" name="rvnu" id="revenueunit" onkeyup="updateSummary()">
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
                                <input type="number" class="form-control" name="addc" id="addcharge" onkeyup="updateSummary()">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Ket. Additional Charge</label>
                          <textarea class="form-control" name="ket_addc" rows="2" placeholder="Enter ..."></textarea>
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
                                <input type="text" class="form-control" name="dsk" placeholder="Masukkan besaran diskon" id="diskon">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col border-bottom mb-3 mt-4"></div>

                        <!-- Payment Form -->
                        <!-- Payment 1-->
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Pembayaran 1</label>
                              <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal Pembayaran 1</label>
                              <div class="input-group">
                                <input type="text" class="form-control payment-date" id="paymentdate" autocomplete="off" name="tgl_py1" placeholder="Masukkan Tanggal mulai pemesanan" />
                                <div class="input-group-append">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Nominal Pembayaran 1</label>
                              <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py1">
                            </div>
                          </div>
                          <div class="col-sm-2 align-self-end">
                            <div class="form-group">
                              <button class="btn btn-primary form-control payment-form-add-more" type="button">
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
                                <input type="text" class="form-control" name="py2" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 2</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate2" autocomplete="off" name="tgl_py2" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 2</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py2">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-1" type="button">
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
                                <input type="text" class="form-control" name="py3" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 3</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate3" autocomplete="off" name="tgl_py3" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 3</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py3">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-2" type="button">
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
                                <input type="text" class="form-control" name="py4" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 4</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate4" autocomplete="off" name="tgl_py4" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 4</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py4">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-3" type="button">
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
                                <input type="text" class="form-control" name="py5" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 5</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate5" autocomplete="off" name="tgl_py5" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 5</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py5">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-4" type="button">
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
                                <input type="text" class="form-control" name="py6" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 6</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate6" autocomplete="off" name="tgl_py6" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 6</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py6">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-5" type="button">
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
                                <input type="text" class="form-control" name="py7" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 7</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate7" autocomplete="off" name="tgl_py7" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 7</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py7">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-6" type="button">
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
                                <input type="text" class="form-control" name="py8" placeholder="Masukkan jenis akun bank">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Tanggal Payment 8</label>
                                <div class="input-group">
                                  <input type="text" class="form-control payment-date" id="paymentdate8" autocomplete="off" name="tgl_py8" placeholder="Masukkan Tanggal mulai pemesanan" />
                                  <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Nominal Payment 8</label>
                                <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py8">
                              </div>
                            </div>
                            <div class="col-sm-2 align-self-end">
                              <div class="form-group">
                                <button class="btn btn-danger payment-form-remove-7" type="button">
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
                                <input type="number" class="form-control" name="total_py" id="totalpayment" placeholder="Masukkan jumlah total pembayaran" onkeyup="subtracPayment()">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label>Collect PPh 23</label>
                              <select class="form-control" name="colpph23" id="collectpph23" onchange="summaryPajak()">
                                <option disabled selected>-- Pilih Salah Satu --</option>
                                <option>YA</option>
                                <option>TIDAK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <label>PPh 23</label>
                              <input type="number" min="0" class="form-control" name="pph" id="pph23" placeholder="Masukkan hasil PPH">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Selisih Pembayaran (Payment-Revenue)</label>
                              <input type="text" class="form-control" name="slpy" id="selisih-py" placeholder="Masukkan selisih pembayaran (Payment - Revenue)">
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
                        <div class="form-group">
                          <label>Upload Tahap 1</label>
                          <div class="input-group">
                            <input type="date" name="upl-1" class="form-control" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-primary upload-form-add-more" type="button">
                                <i class="fa fa-plus"></i> Add More
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="form-upload-copy"></div> -->
                        <div class="form-group upload-form-block-1" style="display:none !important;">
                          <label>Upload Tahap 2</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-2" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-1" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-2" style="display:none !important;">
                          <label>Upload Tahap 3</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-3" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-2" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-3" style="display:none !important;">
                          <label>Upload Tahap 4</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-4" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-3" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-4" style="display:none !important;">
                          <label>Upload Tahap 5</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-5" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-4" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-5" style="display:none !important;">
                          <label>Upload Tahap 6</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-6" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-5" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-6" style="display:none !important;">
                          <label>Upload Tahap 7</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-7" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-6" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-7" style="display:none !important;">
                          <label>Upload Tahap 8</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-8" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-7" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-8" style="display:none !important;">
                          <label>Upload Tahap 9</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-9" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-8" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-group upload-form-block-9" style="display:none !important;">
                          <label>Upload Tahap 10</label>
                          <div class="input-group">
                            <input type="date" class="form-control" name="upl-10" placeholder="Masukkan kode upload" width="100%">
                            <div class="col-sm-2 col-form-group">
                              <button class="btn btn-danger upload-form-remove-9" type="button">
                                <i class="fa fa-times"></i> Remove
                              </button>
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
              <?php endforeach; ?>
            </div>
            <!-- /.container-fluid -->
          </section>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
      <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/tracnobg2.png">
         &copy; <?php echo date('Y'); ?>. UNITED AUTOMOBIL SEMBILAN PULUH UTAMA.
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
  <!-- BS-Stepper -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/dropzone/min/dropzone.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(document).ready(function() {
      $("#drop-npl").autocomplete({
        source: "<?php echo site_url('control_sales/jsonUnitAutocomplete') ?>",

        select: function(event, ui) {
          $('[name="npl"]').val(ui.item.nopol);
          $('[name="tyunit"]').val(ui.item.type);
          $('[name="kg"]').val(ui.item.kategori);
          $('[name="seat"]').val(ui.item.seat);
        },
        response: function(event, ui) {
          if (ui.content.length === 0) {
            console.log('No results loaded!');
          } else {
            console.log('success!');
          }
        },
      });
    });

    $(document).ready(function() {
      $(".upload-form-add-more").click(function() {
        count++;
        if (count === 1) {
          $(".upload-form-block-1").show();
          $(".upload-form-remove-1").click(function() {
            $(".upload-form-block-1").hide();
            count = 0;
          })
        } else if (count === 2) {
          $(".upload-form-remove-1").hide();
          $(".upload-form-block-2").show();
          $(".upload-form-remove-2").click(function() {
            $(".upload-form-block-2").hide();
            $(".upload-form-remove-1").show();
            count--;
          })
        } else if (count === 3) {
          $(".upload-form-remove-2").hide();
          $(".upload-form-block-3").show();
          $(".upload-form-remove-3").click(function() {
            $(".upload-form-block-3").hide();
            $(".upload-form-remove-2").show();
            count--;
          })
        } else if (count === 4) {
          $(".upload-form-remove-3").hide();
          $(".upload-form-block-4").show();
          $(".upload-form-remove-4").click(function() {
            $(".upload-form-block-4").hide();
            $(".upload-form-remove-3").show();
            count--;
          })
        } else if (count === 5) {
          $(".upload-form-remove-4").hide();
          $(".upload-form-block-5").show();
          $(".upload-form-remove-5").click(function() {
            $(".upload-form-block-5").hide();
            $(".upload-form-remove-4").show();
            count--;
          })
        } else if (count === 6) {
          $(".upload-form-remove-5").hide();
          $(".upload-form-block-6").show();
          $(".upload-form-remove-6").click(function() {
            $(".upload-form-block-6").hide();
            $(".upload-form-remove-5").show();
            count--;
          })
        } else if (count === 7) {
          $(".upload-form-remove-6").hide();
          $(".upload-form-block-7").show();
          $(".upload-form-remove-7").click(function() {
            $(".upload-form-block-7").hide();
            $(".upload-form-remove-6").show();
            count--;
          })
        } else if (count === 8) {
          $(".upload-form-remove-7").hide();
          $(".upload-form-block-8").show();
          $(".upload-form-remove-8").click(function() {
            $(".upload-form-block-8").hide();
            $(".upload-form-remove-7").show();
            count--;
          })
        } else if (count === 9) {
          $(".upload-form-remove-8").hide();
          $(".upload-form-block-9").show();
          $(".upload-form-remove-9").click(function() {
            $(".upload-form-block-9").hide();
            $(".upload-form-remove-8").show();
            count--;
          })
        }
      })
    })

    $(function() {
      // Initialize Select2 Elements for Maksud Sewa
      $('.sewa-select').select2({
        placeholder: "-- Pilih kebutuhan sewa --"
      });

      $('[name="sw"]').on('change', function() {
        $(".source-select option:selected").text();
      });

      // Initialize Select2 Elements for Source Data
      $('.source-select').select2({
        placeholder: "-- Pilih Source Data --"
      });

      $('[name="sd"]').on('change', function() {
        $(".source-select option:selected").text();
      });

      // Initialize Select2 Elements for Spesifikasi
      $('.spek-select').select2({
        placeholder: " -- Pilih Spesifikasi -- "
      });

      $('[name="sp"]').on('change', function() {
        $(".spek-select option:selected").text();
      })


      //Date picker
      $("#reservationdate").datepicker({
        minDate: 0,
        maxDate: '+1Y+6M',
        onSelect: function(dateStr) {
          var min = $(this).datepicker('getDate'); // Get selected date
          $("#reservationdate2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
        }
      });

      $("#reservationdate2").datepicker({
        minDate: '0',
        maxDate: '+1Y+6M',
        onSelect: function(dateStr) {
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

      $('.payment-date').datepicker({
        dateFormat: 'yy-mm-dd'
      });
    });

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

    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    var count = 0;
    $(document).ready(function() {
      $(".payment-form-add-more").click(function() {
        count++;
        if (count === 1) {
          $(".payment-form-block-1").show();
          $(".payment-form-remove-1").click(function() {
            $(".payment-form-block-1").hide();
            count = 0;
          })
        } else if (count === 2) {
          $(".payment-form-remove-1").hide();
          $(".payment-form-block-2").show();
          $(".payment-form-remove-2").click(function() {
            $(".payment-form-block-2").hide();
            $(".payment-form-remove-1").show();
            count--;
          })
        } else if (count === 3) {
          $(".payment-form-remove-2").hide();
          $(".payment-form-block-3").show();
          $(".payment-form-remove-3").click(function() {
            $(".payment-form-block-3").hide();
            $(".payment-form-remove-2").show();
            count--;
          })
        } else if (count === 3) {
          $(".payment-form-remove-2").hide();
          $(".payment-form-block-3").show();
          $(".payment-form-remove-3").click(function() {
            $(".payment-form-block-3").hide();
            $(".payment-form-remove-2").show();
            count--;
          })
        } else if (count === 4) {
          $(".payment-form-remove-3").hide();
          $(".payment-form-block-4").show();
          $(".payment-form-remove-4").click(function() {
            $(".payment-form-block-4").hide();
            $(".payment-form-remove-3").show();
            count--;
          })
        } else if (count === 5) {
          $(".payment-form-remove-4").hide();
          $(".payment-form-block-5").show();
          $(".payment-form-remove-5").click(function() {
            $(".payment-form-block-5").hide();
            $(".payment-form-remove-4").show();
            count--;
          })
        } else if (count === 6) {
          $(".payment-form-remove-5").hide();
          $(".payment-form-block-6").show();
          $(".payment-form-remove-6").click(function() {
            $(".payment-form-block-6").hide();
            $(".payment-form-remove-5").show();
            count--;
          })
        } else if (count === 7) {
          $(".payment-form-remove-6").hide();
          $(".payment-form-block-7").show();
          $(".payment-form-remove-7").click(function() {
            $(".payment-form-block-7").hide();
            $(".payment-form-remove-6").show();
            count--;
          })
        }
      })

    });
  </script>
</body>

</html>