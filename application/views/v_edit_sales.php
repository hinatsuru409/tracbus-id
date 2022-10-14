<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ubah Data Sales</title>
  <link href="../../assets/AdminLTE/dist/img/tracnobg.png" rel="icon" type="images">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
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
            <a href="<?php echo base_url() . "index.php/control_admin/view_sales"; ?>"  class="btn btn-primary">
               Kembali</a>
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
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">

            <form role="form" action="<?php echo base_url() . 'index.php/control_admin/getAddSales'; ?>" method="POST">
              <div class="card card-default">
                <div class="card-header">
                  <center><i class="fas fa-share-square"> FORM BILLING RENTAL BUS</center></i>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">

                    <!-- /.col -->
                    <section class="content">
          <div class="container-fluid">
            <?php foreach ($sales as $row) : ?>
              <!-- Call a tables name into form -->
              <form role="form" action="<?php echo base_url() . 'index.php/control_admin/updateSales'; ?>" method="POST">
                <div class="card card-default">
                  <div class="card-header">
                  </div>
                  <!-- /.card-header -->
                  <div class="form-group">
                          <label>Nomor Reservasi</label>
                          <input type="text" class="form-control" name="rsv" placeholder="Masukkan Reservasi ID" value="<?php echo $row->no_reservasi ?>">
                        </div>
                        <div class="form-group">
                          <label>Booking Order</label>
                          <input type="text" class="form-control" name="bko" placeholder="Masukkan kode Booking Order" value="<?php echo $row->booking_order ?>>
                        </div>
                        <div class="form-group">
                          <label>Profit Center</label>
                          <input type="text" class="form-control" name="prfc" placeholder="Masukkan Profit Center" value="<?php echo $row->profit_center ?>">
                        </div>
                        <div class="form-group">
                            <label>PIC Sales</label>
                            <input type="text" class="form-control" name="pic" placeholder="Masukkan PIC Sales" value="<?php echo $row->pic_sales ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Customer Master Data (CMD)</label>
                            <input type="text" class="form-control" name="nama_cmd" placeholder="Masukkan nama Customer Master Data" value="<?php echo $row->$nama_cmd ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Instansi/Perusahaan</label>
                            <input type="text" class="form-control" name="ins" placeholder="Masukkan nama Instansi Perusahaan, Sekolah, Tour & Travel, dll" value="<?php echo $row->nama_instansi ?>>
                        </div>

                        <div class="col border-bottom mb-4 mt-4"></div>

                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Order Type</label>
                              <input type="text" class="form-control" name="ord" placeholder="Masukkan tipe order" value="<?php echo $row->order_type ?>>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select class="form-control" name="jpm">
                                  <option value="<?php echo ($row->jenis_bayar ); ?>">PO</option>
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
                                  <option value="<?php echo $sp->id_spek; ?>"><?php echo $sp->jenis_spek; ?></option>
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
                                  <option value="<?php echo $sd->id_source; ?>"><?php echo $sd->jenis_source; ?></option>
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

                        <div class="col border-bottom mb-4 mt-3"></div>

                        <div class="form-group">
                          <label>Customer Master Data</label>
                          <input type="text" class="form-control" name="cmd" placeholder="Masukkan tipe CMD">
                        </div>
                        <div class="form-group">
                          <label>PIC Customer</label>
                          <input type="text" class="form-control" name="pcus" placeholder="Masukkan nama customer">
                        </div>
                        <div class="form-group">
                          <label>PIC Contact</label>
                          <input type="text" class="form-control" name="picc" placeholder="Masukkan kontak Person In Charge">
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Type Unit</label>
                              <select class="form-control" name="tyunit">
                                <option>-- Pilih Tipe Unit BUS --</option>
                                <option>Small Bus</option>
                                <option>Medium Bus</option>
                                <option>Big Bus</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Kategori Unit</label>
                              <select class="select2" style="width: 100%;" name="kg">
                                <option> -- Pilih Kategori Bus -- </option>
                                <?php foreach ($kategori as $kg) : ?>
                                  <option value="<?php echo $kg->id_kategori; ?>"><?php echo $kg->kategori_bus; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Jumlah Seat/Bangku</label>
                              <select class="form-control" name="seat">
                                <option>-- Pilih Jumlah Seat/Bangku --</option>
                                <?php foreach ($seat as $st) : ?>
                                  <option value="<?php echo $st->id_seat; ?>"><?php echo $st->jumlah_seat; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- /.col -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>No. Polisi</label>
                              <select class="select2" style="width: 100%;" name="npl">
                                <option>-- Masukkan Nomor Plat Polisi --</option>
                                <?php foreach ($nomor_polisi as $npl) : ?>
                                  <option value="<?php echo $npl->id_pol; ?>"><?php echo $npl->nomor_plat; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Driver</label>
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                                <input type="text" class="form-control" name="drv" placeholder="Masukkan nama Driver">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Maksud Sewa</label>
                              <select class="select2" style="width: 100%;" name="sw">
                                <option>-- Pilih kebutuhan sewa --</option>
                                <?php foreach ($maksud_sewa as $sw) : ?>
                                  <option value="<?php echo $sw->id_sewa; ?>"><?php echo $sw->jenis_sewa; ?></option>
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
                                <select class="select2" style="width: 100%;" name="rt">
                                  <option> -- Pilih lokasi tujuan -- </option>
                                  <?php foreach ($rute_tujuan as $rt) : ?>
                                    <option value="<?php echo $rt->id_tujuan; ?>"><?php echo $rt->rute_daerah; ?></option>
                                  <?php endforeach; ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Provinsi</label>
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-map"></i></div>
                                <select class="select2" style="width: 100%;" name="pr">
                                  <option> -- Pilih provinsi -- </option>
                                  <?php foreach ($provinsi as $pr) : ?>
                                    <option value="<?php echo $pr->id_provinsi; ?>"><?php echo $pr->nama_provinsi; ?></option>
                                  <?php endforeach; ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Tanggal mulai Pemesanan</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_mulai_p" data-target="#reservationdate" placeholder="Masukkan Tanggal mulai pemesanan" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Tanggal akhir Pemesanan</label>
                              <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_akhir_p" data-target="#reservationdate2" placeholder="Masukkan Tanggal akhir pemesanan" />
                                <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Waktu Sewa</label>
                              <div class="input-group">
                                <div class="input-group-append">
                                  <div class="input-group-text"><i class="fa fa-clock"></i></div>
                                </div>
                                <input type="number" class="form-control" min="0" name="wkts" placeholder="Masukkan Durasi/Waktu sewa">
                                <h6 class="col-sm-2 mt-2">Hari</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Toll Parkir</label>
                          <select class="form-control" name="toll">
                            <option>Exclude</option>
                            <option>Include</option>
                          </select>
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
                                <input type="number" class="form-control" name="rvnu">
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
                                <input type="number" class="form-control" name="addc">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Keterangan Additional Charge</label>
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
                            <input type="number" class="form-control" name="total_rvnu">
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
                                <input type="number" class="form-control" name="prcl">
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
                                <input type="text" class="form-control" name="dsk" placeholder="Masukkan besaran diskon">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Payment Form -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Payment 1</label>
                              <input type="text" class="form-control" name="py1" placeholder="Masukkan jenis akun bank">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Tanggal Payment 1</label>
                              <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_py1" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Nominal Payment 1</label>
                              <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py1">
                            </div>
                          </div>
                        </div>
                        <!-- Payment Form Ends -->
                        <!-- Payment Form -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Payment 2</label>
                              <input type="text" class="form-control" placeholder="Masukkan jenis akun bank" name="py2">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Tanggal Payment 2</label>
                              <div class="input-group date" id="paymentdate2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_py2" data-target="#paymentdate2" placeholder="Masukkan tanggal pembayaran" />
                                <div class="input-group-append" data-target="#paymentdate2" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Nominal Payment 2</label>
                              <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py2">
                            </div>
                          </div>
                        </div>
                        <!-- Payment Form Ends -->
                        <!-- Payment Form -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Payment 3</label>
                              <input type="text" class="form-control" placeholder="Masukkan jenis akun bank" name="py3">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Tanggal Payment 3</label>
                              <div class="input-group date" id="paymentdate3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_py3" data-target="#paymentdate3" placeholder="Masukkan tanggal pembayaran" />
                                <div class="input-group-append" data-target="#paymentdate3" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Nominal Payment 3</label>
                              <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py3">
                            </div>
                          </div>
                        </div>
                        <!-- Payment Form Ends -->
                        <!-- Payment Form -->
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Payment 4</label>
                              <input type="text" class="form-control" placeholder="Masukkan jenis akun bank" name="py4">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Tanggal Payment 4</label>
                              <div class="input-group date" id="paymentdate4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="tgl_py4" data-target="#paymentdate4" placeholder="Masukkan tanggal pembayaran" />
                                <div class="input-group-append" data-target="#paymentdate4" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Nominal Payment 4</label>
                              <input type="number" class="form-control" placeholder="Masukkan nominal uang" name="nom_py4">
                            </div>
                          </div>
                        </div>
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
                                <input type="number" class="form-control" name="total_py" placeholder="Masukkan jumlah total pembayaran">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label>Collect PPh 23</label>
                              <input type="text" class="form-control" name="col_pph">
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <label>PPh 23</label>
                              <input type="text" class="form-control" name="pph">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Selisih Pembayaran (Payment-Revenue)</label>
                              <input type="text" class="form-control" name="slpy" placeholder="Masukkan selisih pembayaran (Payment - Revenue)">
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
                                <i class="fa fa-times text-danger"></i> KURANG BAYAR
                              </p>
                              </p>
                              <!-- <h5 class="mr-2">STATUS :</h5><i class="fa fa-times mr-2"></i><p> KURANG BAYAR</p> -->
                            </div>
                          </div>
                        </div>

                        <div class="col border-bottom mb-4 mt-3"></div>
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
        </div>
        <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/tracnobg2.png">
         &copy; <?php echo date('Y'); ?>. UNITED AUTOMOBIL SEMBILANPULUH UTAMA.
      </div>
    </footer>


  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/dropzone/min/dropzone.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function() {
        myDropzone.enqueueFile(file)
      }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>
</body>

</html>