<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Laporan Data Sales</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'index.php/control_admin/dashboard' ?>">Home</a></li>
            <li class="breadcrumb-item">Laporan</li>

          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
              <div class="card-header" style="background-color: #f3f3f3;">
                <div class="card-title">
                  <form method="post" id="form">
                    <div class="input-group">
                      <p class="input-group-text border-0">Pilih tanggal : </p>
                      <input type="text" class="form-control showRanges" name="rangetgl" id="rangetgl">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="btn-filter"><span class="icon">
                          <i class="fa fa-print"></i>
                        </span>Lihat Laporan</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-tools">

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x: auto; white-space: nowrap">
                <table id="table1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Profit Center</th>
                      <th class="text-center">PIC Sales</th>   
                      <th class="text-center">Reservasi ID</th>
                      <th class="text-center">Nama CMD</th>
                      <th class="text-center">Nama Instansi</th>
                      <th class="text-center">Booking Order</th>   
                      <th class="text-center">Check</th>            
                      <th class="text-center">Order Type</th>
                      <th class="text-center">Jenis Bayar</th>
                      <th class="text-center">Invoice</th>
                      <th class="text-center">Spesifikasi</th>
                      <th class="text-center">Type Customer</th>
                      <th class="text-center">Source Data</th>
                      <th class="text-center">Group</th>
                      <th class="text-center">Customer Master Data</th>
                      <th class="text-center">Person in Charge Customer</th>
                      <th class="text-center">Person in Charge Contact</th>
                      <th class="text-center">Tipe Unit</th>
                      <th class="text-center">Kategori Unit</th>
                      <th class="text-center">Nomor Plat Polisi</th>
                      <th class="text-center">Jumlah Bangku</th>                    
                      <th class="text-center">Driver</th>
                      <th class="text-center">Maksud Sewa</th>
                      <th class="text-center">Rute Tujuan</th>
                      <th class="text-center">Provinsi</th>
                      <th class="text-center">Alamat Tujuan</th> 
                      <th class="text-center">Tanggal Mulai Pemesanan</th>
                      <th class="text-center">Tanggal Akhir Pemesanan</th>
                      <th class="text-center">Waktu Sewa</th>                                        
                      <th class="text-center">Toll Parkir</th>
                      <th class="text-center">Revenue Per Unit</th>
                      <th class="text-center">Addtional Charge</th>
                      <th class="text-center">Keterangan Additional Charge</th>
                      <th class="text-center">Total Revenue</th>
                      <th class="text-center">Price List</th>
                      <th class="text-center">Diskon</th>                
                      <th class="text-center">Payment 1</th>
                      <th class="text-center">Tanggal Payment 1</th>
                      <th class="text-center">Nominal Payment 1</th>
                      <th class="text-center">Payment 2</th>
                      <th class="text-center">Tanggal Payment 2</th>
                      <th class="text-center">Nominal Payment 2</th>
                      <th class="text-center">Payment 3</th>
                      <th class="text-center">Tanggal Payment 3</th>
                      <th class="text-center">Nominal Payment 3</th>
                      <th class="text-center">Payment 4</th>
                      <th class="text-center">Tanggal Payment 4</th>
                      <th class="text-center">Nominal Payment 4</th>
                      <th class="text-center">Payment 5</th>
                      <th class="text-center">Tanggal Payment 5</th>
                      <th class="text-center">Nominal Payment 5</th>
                      <th class="text-center">Total Payment</th>
                      <th class="text-center">PPH 23</th>
                      <th class="text-center">Selisih Payment</th>
                      <th class="text-center">Keterangan Payment</th>
                      <th class="text-center">Upload Tahap 1</th>
                      <th class="text-center">Upload Tahap 2</th>
                      <th class="text-center">Upload Tahap 3</th>
                      <th class="text-center">Upload Tahap 4</th>
                      <th class="text-center">Upload Tahap 5</th>
                      <th class="text-center">Upload Tahap 6</th>
                      <th class="text-center">Upload Tahap 7</th>
                      <th class="text-center">Upload Tahap 8</th>
                      <th class="text-center">Upload Tahap 9</th>
                      <th class="text-center">Upload Tahap 10</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!-- /.card -->

          
          <!-- END Modal View Data -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Moment -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function() {
    $('.showRanges').daterangepicker({
      // autoApply: true,

      locale: {
        format: 'YYYY-MM-DD',
        separator: " s.d "

      },
      startDate: moment().subtract(7, 'day'),

      ranges: {
        'Hari ini': [moment(), moment()],
        'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        '7 hari yang lalu': [moment().subtract(6, 'days'), moment()],
        '30 hari yang lalu': [moment().subtract(29, 'days'), moment()],
        'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
        'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      alwaysShowCalendars: true,
    });
  });

  $(document).ready(function() {
    var dataTable = $('#table1').DataTable({
      "sDom": "<'exportOptions text-right'B><'table-responsive't><'row'<p>>",
      "scrollCollapse": true,
      "paging": true,
      // "bSort": true,
      "info": false,
      "autoWidth": false,
      "buttons": [{ 
        extend:'excelHtml5',
        text: 'Excel',
        className: 'btn btn-default',
        title: 'Laporan Data Sales',
      },
      { 
        extend:'pdfHtml5',
        text: 'PDF',
        className: 'btn btn-default',
        orientation: 'landscape',
        title: 'Laporan Data Sales',
      },
      { 
        extend:'copyHtml5',
        text: 'Copy',
        className: 'btn btn-default',
        title: 'Laporan Data Sales',
      },
      { 
        extend:'print',
        text: 'Print',
        className: 'btn btn-default',
        title: 'Laporan Data Sales',
      }],

      dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
        "<'row'<'col-md-12'tr>>" +
        "<'row'<'col-md-5'i><'col-md-7'p>>",

      "serverSide": true,
      "order": [],
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "ajax": {
        url: "<?php echo base_url() . 'index.php/control_admin/jsonLaporan'; ?>",
        type: "POST",
        data: function(data) {
          data.tgl_awal = $('#rangetgl').val();
          data.tgl_akhir = $('#rangetgl').val();
        }
      },
      "columnDefs": [{
          "targets": 0,
          "className": "text-center",
          "orderable": false,
        },
        {
          "targets": 6,
          "className": "text-center",
          "orderable": false,
        },
      ],
    });

    $('#btn-filter').click(function() { //button filter event click
      dataTable.ajax.reload(); //just reload table
    });

    function reload_table() {
      dataTable.ajax.reload(null, false); //reload datatable ajax 
    }
  });
</script>
</body>

</html>