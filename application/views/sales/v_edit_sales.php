<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perbarui Data | Sales</title>
  <link href="../../assets/AdminLTE/dist/img/tracnew.png" rel="icon" type="images">
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
            <a href="<?php echo base_url() . "index.php/control_sales/view_sales"; ?>" class="btn btn-info">< Kembali</a>
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
                <h6><b>UNITED AUTOMOBIL SEMBILAN PULUH UTAMA. </b></h6>
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
          <div class="container-fluid">
            <form role="form" action="<?php echo base_url() . 'index.php/control_admin/getAddSales'; ?>" method="POST">
              <div class="card card-default">
                <div class="card-header align-self-center">
                  <h6 class="card-title"><i class="fas fa-share-square"></i> FORM EDIT BILLING RENT BUS</h6>
                </div>
                <!-- Main content -->
                <div class="container-fluid">
                  <?php foreach ($sales as $row) : ?>
                    <!-- Call a tables name into form -->
                    <form role="form" action="<?php echo base_url() . 'index.php/control_admin/updateSales'; ?>" method="POST">
                      <div class="card card-default">
                        <div class="card-header">
                          <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <input type="hidden" name="id" value="<?php echo $row->id ?>">
                            <!-- /.col -->
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nomor Reservasi</label>
                                    <input type="text" class="form-control" name="rsv" placeholder="Masukkan Reservasi ID" value="<?php echo $row->no_reservasi ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Booking Order</label>
                                    <input type="text" class="form-control" name="bko" placeholder="Masukkan kode Booking Order" value="<?php echo $row->booking_order ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Profit Center</label>
                                    <input type="text" class="form-control" name="prfc" placeholder="Masukkan Profit Center" value="<?php echo $row->profit_center ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>PIC Sales</label>
                                    <input type="text" class="form-control" name="pic" placeholder="Masukkan PIC Sales" value="<?php echo $row->pic_sales ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nama Customer Master Data (CMD)</label>
                                    <input type="text" class="form-control" name="nama_cmd" placeholder="Masukkan nama Customer Master Data" value="<?php echo $row->nama_cmd ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Nama Instansi/Perusahaan</label>
                                    <input type="text" class="form-control" name="ins" placeholder="Masukkan nama Instansi Perusahaan, Sekolah, Tour & Travel, dll" value="<?php echo $row->nama_instansi ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col border-bottom mb-4 mt-4"></div>

                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label>Tipe Order</label>
                                    <select class="form-control <?= form_error('ord') ? 'is-invalid' : '' ?>" name="ord" value="<?php echo $row->order_type ?>">
                                      <option value="<?php echo $row->order_type ?>"><?php echo $row->order_type ?></option>
                                      <option value="B2C">B2C</option>
                                      <option value="B2B">B2B</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <div class="form-group">
                                      <label>Jenis Pembayaran</label>
                                      <select class="form-control" name="jpm" value="<?php echo $row->jenis_bayar ?>">
                                        <option value="<?php echo ($row->jenis_bayar); ?>"><?php echo $row->jenis_bayar ?></option>
                                        <option>PO</option>
                                        <option>GL</option>
                                        <option>IN Advanced</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label>Invoice</label>
                                    <select class="form-control" name="invo">
                                      <option value=""><?php echo $row->invoice ?></option>
                                      <option>YA</option>
                                      <option>TIDAK</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Spesifikasi</label>
                                    <select class="form-control" name="sp">
                                      <option><?php echo $row->spesifikasi ?></option>
                                      <?php foreach ($spesifikasi as $sp) : ?>
                                        <option value="<?php echo $sp->jenis_spek; ?>"><?php echo $sp->jenis_spek; ?></option>
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
                                      <option value=""><?php echo $row->type_customer ?></option>
                                      <option>New</option>
                                      <option>Existing</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Source Data</label>
                                    <select class="form-control" name="sd">
                                      <option value=""><?php echo $row->source_data ?></option>
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
                                      <option value=""><?php echo $row->group ?></option>
                                      <option>NON-AFFCO</option>
                                      <option>AFFCO</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                              <div class="col border-bottom mb-4 mt-3"></div>

                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Customer Master Data</label>
                                    <input type="text" class="form-control" name="cmd" placeholder="Masukkan tipe CMD" value="<?php echo $row->cmd ?>">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>PIC Customer</label>
                                    <input type="text" class="form-control" name="pcus" placeholder="Masukkan nama customer" value="<?php echo $row->pic_customer ?>">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>PIC Contact</label>
                                    <input type="text" class="form-control" name="picc" placeholder="Masukkan kontak Person In Charge" value="<?php echo $row->pic_contact ?>">
                                  </div>
                                </div>
                              </div>

                              <div class="col border-bottom mb-3 mt-2"></div>

                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label>No. Polisi</label>
                                    <select class="form-control" style="width: 100%;" name="npl">
                                      <option><?php echo $row->nopol ?></option>
                                      <?php foreach ($nomor_polisi as $npl) : ?>
                                        <option value="<?php echo $npl->id_pol; ?>"><?php echo $npl->nomor_plat; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Type Unit</label>
                                    <select class="form-control" name="tyunit">
                                      <option><?php echo $row->type_unit ?></option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label>Kategori Unit</label>
                                    <select class="form-control" style="width: 100%;" name="kg">
                                      <option><?php echo $row->kategori ?></option>
                                      <?php foreach ($kategori as $kg) : ?>
                                        <option value="<?php echo $kg->id_kategori; ?>"><?php echo $kg->kategori_bus; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label>Jumlah Seat/Bangku</label>
                                    <select class="form-control" name="seat">
                                      <option><?php echo $row->seat ?></option>
                                      <?php foreach ($seat as $st) : ?>
                                        <option value="<?php echo $st->id_seat; ?>"><?php echo $st->jumlah_seat; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <!-- /.col -->
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Driver</label>
                                    <input type="text" class="form-control <?= form_error('drv') ? 'is-invalid' : '' ?>" name="drv" placeholder="Masukkan nama Driver" value="<?php echo $row->driver ?>">
                                    <div class="invalid-feedback"><?= form_error('drv')  ?></div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Maksud Sewa</label>
                                    <select class="form-control <?= form_error('sw') ? 'is-invalid' : '' ?>" style="width: 100%;" name="sw">
                                      <option><?php echo $row->maksud_sewa ?></option>
                                      <?php foreach ($maksud_sewa as $sw) : ?>
                                        <option value="<?php echo $sw->jenis_sewa; ?>"><?php echo $sw->jenis_sewa; ?></option>
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
                                    <select class="form-control <?= form_error('rt') ? 'is-invalid' : '' ?>" style="width: 100%" name="rt">
                                      <option><?php echo $row->rute ?></option>
                                      <?php foreach ($rute_tujuan as $rt) : ?>
                                        <option value="<?php echo $rt->rute_daerah; ?>"><?php echo $rt->rute_daerah; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback"><?= form_error('rt')  ?></div>
                                  </div>
                                  <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="form-control <?= form_error('pr') ? 'is-invalid' : '' ?>" style="width: 100%" name="pr">
                                      <option><?php echo $row->provinsi ?></option>
                                      <?php foreach ($provinsi as $pr) : ?>
                                        <option value="<?php echo $pr->nama_provinsi; ?>"><?php echo $pr->nama_provinsi; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback"><?= form_error('pr')  ?></div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Alamat Tujuan</label>
                                    <textarea class="form-control" name="alamat" rows="4" value="<?php echo $row->alamat ?>"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Tanggal mulai Pemesanan</label>
                                    <div class="input-group date">
                                      <input type="text" class="form-control <?= form_error('tgl_mulai_p') ? 'is-invalid' : '' ?>" id="reservationdate" autocomplete="off" name="tgl_mulai_p" placeholder="Masukkan Tanggal mulai pemesanan" value="<?php echo $row->order_start ?>" />
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
                                      <input type="text" class="form-control <?= form_error('tgl_akhir_p') ? 'is-invalid' : '' ?>" id="reservationdate2" autocomplete="off" name="tgl_akhir_p" placeholder="Masukkan Tanggal akhir pemesanan" value="<?php echo $row->order_end ?>" />
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
                                      <input type="number" class="form-control <?= form_error('wkts') ? 'is-invalid' : '' ?>" autocomplete="off" id="countFromDate" min="0" name="wkts" placeholder="Masukkan durasi waktu sewa" value="<?php echo $row->order_day ?>">
                                      <div class="invalid-feedback"><?= form_error('wkts')  ?></div>
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
                                      <option value=""><?php echo $row->toll_parkir ?></option>
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
                                      <input type="number" class="form-control" name="rvnu" id="revenueunit" onkeyup="updateSummary()" value="<?php echo $row->revenue_unit ?>">
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
                                      <input type="number" class="form-control" name="addc" id="addcharge" onkeyup="updateSummary()" value="<?php echo $row->addcharge ?>">
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
                                  <input type="number" class="form-control" name="total_rvnu" id="totalrevenue" value="<?php echo $row->revenue_total ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Ket. Additional Charge</label>
                                <textarea class="form-control" name="ket_addc" rows="2" placeholder="Enter ..." value="<?php echo $row->addcharge_ket ?>"></textarea>
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
                                      <input type="number" class="form-control" name="prcl" id="pricelist" value="<?php echo $row->price_list ?>">
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
                                      <input type="text" class="form-control" name="dsk" placeholder="Masukkan besaran diskon" id="diskon" value="<?php echo $row->diskon ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col border-bottom mb-4 mt-3"></div>

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
                                      <input type="date" class="form-control datetimepicker-input" name="tgl_py1" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                      <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Nominal Payment 1</label>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py2" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py3" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py4" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py5" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py6" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py7" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <div class="input-group date" id="paymentdate1" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="tgl_py8" data-target="#paymentdate1" placeholder="Masukkan tanggal pembayaran" />
                                        <div class="input-group-append" data-target="#paymentdate1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
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
                                      <input type="number" class="form-control" name="total_py" placeholder="Masukkan jumlah total pembayaran" value="<?php echo $row->total_payment ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label>Collect PPh 23</label>
                                    <input type="text" class="form-control" name="colpph23" id="collectpph23" onchange="summaryPajak()" value="">
                                  </div>
                                </div>
                                <div class="col-md">
                                  <div class="form-group">
                                    <label>PPh 23</label>
                                    <input type="text" class="form-control" name="pph" placeholder="Masukkan hasil PPH" value="<?php echo $row->pph_23 ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <label>Selisih Pembayaran (Payment-Revenue)</label>
                                    <input type="text" class="form-control" name="slpy" placeholder="Masukkan selisih pembayaran (Payment - Revenue)" value="<?php echo $row->sel_payment ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Catatan Lainnya</label>
                                    <textarea class="form-control" name="note" rows="2" placeholder="Enter ..." value="<?php echo $row->ket_payment ?>"></textarea>
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
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="float-right d-none d-sm-block">
        </div>
        <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/tracnobg2.png">
        &copy; <?php echo date('Y'); ?>.UNITED AUTOMOBIL SEMBILAN PULUH UTAMA.
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
        } else if (count === 8) {
          $(".payment-form-remove-7").hide();
          $(".payment-form-block-8").show();
          $(".payment-form-remove-8").click(function() {
            $(".payment-form-block-8").hide();
            $(".payment-form-remove-7").show();
            count--;
          })
        }
      })

    });
  </script>
</body>

</html>