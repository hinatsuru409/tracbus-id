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
                      <div class="form-group">
                        <label>Profit Center</label>
                        <input type="text" class="form-control" name="prfc" placeholder="Masukkan Profit Center">
                      </div>
                      <div class="form-group">
                        <label>Person In Charge (PIC) Sales</label>
                        <input type="text" class="form-control" name="pic" placeholder="Masukkan PIC Sales">
                      </div>
                      <div class="form-group">
                        <label>Nomor Reservasi</label>
                        <input type="text" class="form-control" name="rsv" placeholder="Masukkan Reservasi ID">
                      </div>
                      <div class="form-group">
                        <label>Nama Customer Master Data (CMD)</label>
                        <input type="text" class="form-control" name="nama_cmd"
                          placeholder="Masukkan nama Customer Master Data">
                      </div>
                      <div class="form-group">
                        <label>Nama Instansi/Perusahaan</label>
                        <input type="text" class="form-control" name="ins"
                          placeholder="Masukkan nama Instansi Perusahaan, Sekolah, Tour & Travel, dll">
                      </div>
                      <div class="form-group">
                        <label>Booking Order</label>
                        <input type="text" class="form-control" name="bko" placeholder="Masukkan kode Booking Order">
                      </div>

                      <div class="col border-bottom mb-4 mt-4"></div>

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
                        <input type="text" class="form-control" name="picc"
                          placeholder="Masukkan kontak Person In Charge">
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
                              <option value="<?php echo $kg->id_kategori; ?>">
                                <?php echo $kg->kategori_bus; ?>
                              </option>
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
                              <option value="<?php echo $st->id_seat; ?>">
                                <?php echo $st->jumlah_seat; ?>
                              </option>
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
                              <option value="<?php echo $npl->id_pol; ?>">
                                <?php echo $npl->nomor_plat; ?>
                              </option>
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Waktu Sewa</label>
                            <div class="input-group">
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-clock"></i></div>
                              </div>
                              <input type="number" class="form-control" autocomplete="off" id="countFromDate" min="0"
                                name="wkts" placeholder="Masukkan durasi waktu sewa">
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
                              <input type="number" class="form-control" name="rvnu" id="revenueunit">
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
                              <input type="number" class="form-control" name="addc" id="addcharge">
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
                              <input type="text" class="form-control" name="dsk" placeholder="Masukkan besaran diskon"
                                id="diskon">
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
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py1"
                                data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nominal Payment 1</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py1">
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
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py2"
                                data-target="#paymentdate2" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nominal Payment 2</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py2">
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
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py3"
                                data-target="#paymentdate3" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate3" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nominal Payment 3</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py3">
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
                              <input type="text" class="form-control datetimepicker-input" name="tgl_py4"
                                data-target="#paymentdate4" placeholder="Masukkan tanggal pembayaran" />
                              <div class="input-group-append" data-target="#paymentdate4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nominal Payment 4</label>
                            <input type="number" class="form-control" placeholder="Masukkan nominal uang"
                              name="nom_py4">
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
                              <input type="number" class="form-control" name="total_py"
                                placeholder="Masukkan jumlah total pembayaran">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label>Collect PPh 23</label>
                            <select class="form-control" name="colpph23">
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
                            <input type="text" class="form-control" name="slpy"
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
                              <i class="fa fa-times text-danger"></i> KURANG BAYAR
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
                            <button class="btn btn-success add-more" type="button" onclick="startCount()">
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

    // Calculate Total Revenue from Revenue per Unit & Additional Charge
    /*$(document).ready(function () {
      function compute() {
      var r = parseInt($("#revenueunit").val());
      var a = parseInt($("#addcharge").val());
      var total = r + a
      $('#totalrevenue').val(total);
      }
      $('#revenueunit, #addcharge').change(compute);
    });*/

    $(document).ready(function () {
      $("#revenueunit, #addcharge").keyup(function () {
        var total = 0;
        var r = parseInt($("#revenueunit").val());
        var a = parseInt($("#addcharge").val());
        var total = r + a;
        $("#totalrevenue").val(total);
      })
      $("#revenueunit, #pricelist").keyup(function () {
        var r = parseInt($("#revenueunit").val());
        var p = parseInt($("#pricelist").val());
        var total = isNaN(r / p) ? 0 : (r / p);
        $("#diskon").val(total);
      })
      let tr = $('#totalrevenue');
      let updateTotal = () => $('#pph23').val(tr.val() * (0.02));

      updateTotal(); // on page load
      $('form input').on('input', updateTotal);
    });

    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })



    var clicks = 1;
    $(document).ready(function () {
      $(".add-more").click(function () {
        var html = $(".copy").html();
        $(".after-add-more").after(html);
      });
      $("body").on("click", ".remove", function () {
        $(this).parents(".form-group").remove();
      });
    });
  </script>
</body>

</html>