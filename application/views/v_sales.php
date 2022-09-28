    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTable</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Logout</a></li>
                <li class="breadcrumb-item active">DataTable</li>
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

              <div class="card">
                <div class="card-header">
                  <p class="card-title">Table Pengajuan Sales</p>
                  <div class="card-tools">
                    <a href="<?php echo base_url() . 'index.php/control_admin/add_sales' ?>" class="btn btn-primary pull-right btn-sm" role="button">+ Tambah Data</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="table1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nomor Reservasi</th>
                        <th>Booking Order</th>
                        <th>PIC Sales</th>
                        <th>Provit Center</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">View in Detail Sales</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body table-responsive">
                      <div class="row">
                        <div class="col">
                          <table class="table table-borderless no-margin">
                            <tbody>
                              <tr>
                                <th>Kode Booking</th>
                                <td><span id="txt-kodebooking"></span></td>
                              </tr>
                              <tr>
                                <th>Nama Instansi / Perusahaan</th>
                                <td><span id="txt-namainstansi"></span></td>
                              </tr>
                              <tr>
                                <th>Person in Charge Sales</th>
                                <td><span id="txt-pic-sales"></span></td>
                              </tr>
                              <tr>
                                <th>Profit Center</th>
                                <td><span id="txt-profit"></span></td>
                              </tr>
                              <tr>
                                <th>Nomor Reservasi</th>
                                <td><span id="txt-reservasi-id"></span></td>
                              </tr>
                              <tr>
                                <th>Tipe Order</th>
                                <td><span id="txt-ordertype"></span></td>
                              </tr>
                              <tr>
                                <th>Jenis Pembayaran</th>
                                <td><span id="txt-jenis-bayar"></span></td>
                              </tr>
                              <tr>
                                <th>Invoice</th>
                                <td><span id="txt-invoice"></span></td>
                              </tr>
                              <tr>
                                <th>Spesifikasi</th>
                                <td><span id="txt-spek"></span></td>
                              </tr>
                              <tr>
                                <th>Tipe Pelanggan (Customer)</th>
                                <td><span id="txt-tipe-cs"></span></td>
                              </tr>
                              <tr>
                                <th>Source Data</th>
                                <td><span id="txt-src-data"></span></td>
                              </tr>
                              <tr>
                                <th>Group</th>
                                <td><span id="txt-group"></span></td>
                              </tr>
                              <tr>
                                <th>Customer Master Data</th>
                                <td><span id="txt-cmd"></span></td>
                              </tr>
                              <tr>
                                <th>Person in Charge Customer</th>
                                <td><span id="txt-pic-cs"></span></td>
                              </tr>
                              <tr>
                                <th>Person in Charge Contact</th>
                                <td><span id="txt-pic-contact"></span></td>
                              </tr>
                              <tr>
                                <th>Tipe Unit</th>
                                <td><span id="txt-tipe-unit"></span></td>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col">
                          <table class="table table-borderless no-margin">
                            <tbody>
                              <tr>
                                <th>Nama Customer Master Data</th>
                                <td><span id="txt-namacmd"></span></td>
                              </tr>
                              <tr>
                                <th>Nomor Reservasi</th>
                                <td><span id="txt-"></span></td>
                              </tr>
                              <tr>
                                <th>Kategori Unit</th>
                                <td><span id="txt-kg-unit"></span></td>
                              </tr>
                              <tr>
                                <th>Jumlah Bangku</th>
                                <td><span id="txt-seat"></span></td>
                              </tr>
                              <tr>
                                <th>Nomor Plat Polisi</th>
                                <td><span id="txt-nopol"></span></td>
                              </tr>
                              <tr>
                                <th>Driver</th>
                                <td><span id="txt-driver"></span></td>
                              </tr>
                              <tr>
                                <th>Maksud Sewa</th>
                                <td><span id="txt-sewa"></span></td>
                              </tr>
                              <tr>
                                <th>Rute Tujuan</th>
                                <td><span id="txt-rute"></span></td>
                              </tr>
                              <tr>
                                <th>Alamat Tujuan</th>
                                <td><span id="txt-alamat"></span></td>
                              </tr>
                              <tr>
                                <th>Provinsi</th>
                                <td><span id="txt-provinsi"></span></td>
                              </tr>
                              <tr>
                                <th>Tanggal Mulai Pemesanan</th>
                                <td><span id="txt-order-start"></span></td>
                              </tr>
                              <tr>
                                <th>Tanggal Akhir Pemesanan</th>
                                <td><span id="txt-order-end"></span></td>
                              </tr>
                              <tr>
                                <th>Waktu Sewa</th>
                                <td><span id="txt-day"></span></td>
                              </tr>
                              <tr>
                                <th>Toll Parkir</th>
                                <td><span id="txt-toll"></span></td>
                              </tr>
                              <tr>
                                <th>Revenue Per Unit</th>
                                <td><span id="txt-rev-unit"></span></td>
                              </tr>
                              <tr>
                                <th>Addtional Charge</th>
                                <td><span id="txt-addcharge"></span></td>
                              </tr>
                              <tr>
                                <th>Keterangan Additional Charge</th>
                                <td><span id="txt-addcharge-info"></span></td>
                              </tr>
                              <tr>
                                <th>Price List</th>
                                <td><span id="txt-price-list"></span></td>
                              </tr>
                              <tr>
                                <th>Diskon</th>
                                <td><span id="txt-diskon"></span></td>
                              </tr>
                              <tr>
                                <th>Total Revenue</th>
                                <td><span id="txt-total-rev"></span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            </div>
            <!-- /.col -->
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
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
      /*$(function () {
    $("#example1").DataTable({
      "responsive": true,  
      "autoWidth": false,
      "buttons": ["csv", "excel", "pdfHtml5", "print"],
      dom: 
      "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
      "<'row'<'col-md-12'tr>>" +
      "<'row'<'col-md-5'i><'col-md-7'p>>"
    }).buttons().container().appendTo('#example1_wrapper .col-md-5:eq(0)');
  });*/

      $(document).ready(function() {
        var dataTable = $('#table1').DataTable({
          "responsive": true,
          "autoWidth": false,
          "buttons": ["csv", "excel", "pdfHtml5", "print"],

          dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",

          "processing": true,
          "serverSide": true,
          "order": [],
          "ajax": {
            url: "<?php echo base_url() . 'index.php/control_admin/jsonSales'; ?>",
            type: "POST"
          },
          "columnDefs": [{
              "targets": 0,
              "className": "text-center",
              "orderable": false,
            },
            {
              "targets": 5,
              "className": "text-center",
              "orderable": false,
            },
          ],
        })

        $(document).on('click', '#salesModal', function() {
          var booking_order = $(this).data('booking'); // Calling data class from controller
          var nama_cmd = $(this).data('namacmd');
          var nama_instansi = $(this).data('nama-instansi');
          var profit_center = $(this).data('profit');
          var pic_sales = $(this).data('picsales');
          var no_reservasi = $(this).data('idreservasi');
          var order_type = $(this).data('order-type');
          var jenis_bayar = $(this).data('jenisbayar');
          var spesifikasi = $(this).data('invoice');
          var invoice = $(this).data('spek');
          var type_customer = $(this).data('type-customer');
          var source_data = $(this).data('source');
          var group = $(this).data('type-group');
          var cmd = $(this).data('cmd');
          var customer_pic = $(this).data('customerpic');
          var pic_contact = $(this).data('pic-cont');
          var type_unit = $(this).data('type-unit');
          var kategori = $(this).data('kategori');
          var nopol = $(this).data('nopol');
          var seat = $(this).data('seat');
          var driver = $(this).data('driver');
          var maksud_sewa = $(this).data('maksudsewa');
          var rute = $(this).data('rute');
          var provinsi = $(this).data('provinsi');
          var order_start = $(this).data('ord-start');
          var order_end = $(this).data('ord-end');
          var day = $(this).data('day');
          var toll_parkir = $(this).data('toll');
          var revenue_unit = $(this).data('revenueunit');
          var additional_charge = $(this).data('addcharge');
          var ket_additionalcharge = $(this).data('ket-addcharge');
          var total_revenue = $(this).data('totalrevenue');
          var price_list = $(this).data('pricelist');
          var diskon = $(this).data('diskon');
          $('#txt-kodebooking').text(booking_order); // Classified id and variable string
          $('#txt-namacmd').text(nama_cmd);
          $('#txt-namainstansi').text(nama_instansi);
          $('#txt-reservasi-id').text(no_reservasi);
          $('#txt-ordertype').text(order_type);
          $('#txt-pic-sales').text(pic_sales);
          $('#txt-profit').text(profit_center);
          $('#txt-jenis-bayar').text(jenis_bayar);
          $('#txt-invoice').text(spesifikasi);
          $('#txt-spek').text(invoice);
          $('#txt-tipe-cs').text(type_customer);
          $('#txt-src-data').text(source_data);
          $('#txt-group').text(group);
          $('#txt-cmd').text(cmd);
          $('#txt-pic-cs').text(customer_pic);
          $('#txt-pic-contact').text(pic_contact);
          $('#txt-tipe-unit').text(type_unit);
          $('#txt-kg-unit').text(kategori);
          $('#txt-seat').text(seat);
          $('#txt-nopol').text(nopol);
          $('#txt-driver').text(driver);
          $('#txt-sewa').text(maksud_sewa);
          $('#txt-rute').text(rute);
          $('#txt-provinsi').text(provinsi);
          $('#txt-order-start').text(order_start);
          $('#txt-order-end').text(order_end);
          $('#txt-day').text(day);
          $('#txt-toll').text(toll_parkir);
          $('#txt-rev-unit').text(revenue_unit);
          $('#txt-addcharge').text(additional_charge);
          $('#txt-addcharge-info').text(ket_additionalcharge);
          $('#txt-price-list').text(price_list);
          $('#txt-diskon').text(diskon);
          $('#txt-total-rev').text(total_revenue);
        })

      });
    </script>
    </body>

    </html>