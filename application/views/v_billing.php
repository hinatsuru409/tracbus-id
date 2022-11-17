  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>DataTables Billing</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables Billing</li>
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
                <h3 class="card-title"></h3>
                <div class="card-tools">
                    <a href="<?php echo base_url() . 'index.php/control_sales/view_sales' ?>" class="btn btn-primary pull-right btn-sm" role="button"><i class="fa fa-eye"></i> Lihat Data Sales</a>
                  </div> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Nomor Reservasi</th>
                      <th class="text-center">Booking Order</th>
                      <th class="text-center">Profit Center</th>
                      <th class="text-center">PIC Sales</th>
                      <th class="text-center">Action</th>
                  </tr>                
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Modal View Data -->
            <div class="modal fade" id="modal-lg">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="modal-title">
                      <div class="row">
                        <img src="../../assets/AdminLTE/dist/img/traclogo.png" alt="AdminTrac" class="brand-image" style="opacity: .8" width="70" height="40">
                        <h5 class="modal-title align-self-center"><b>&nbsp;UNITED AUTOMOBIL SEMBILANPULUH UTAMA</b></h5>
                      </div>

                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body table-responsive">
                    <div class="col">
                      <table class="table table-borderless no-margin" id="table">
                        <tbody>
                          <tr>
                            <th>Nomor Reservasi</th>
                            <td><b>:</b></td>
                            <td><span id="txt-reservasi-id"></span></td>
                          </tr>
                          <tr>
                            <th>Kode Booking</th>
                            <td><b>:</b></td>
                            <td><span id="txt-kodebooking"></span></td>
                          </tr>
                          <tr>
                            <th>Profit Center</th>
                            <td><b>:</b></td>
                            <td><span id="txt-profit"></span></td>
                          </tr>
                          <tr>
                            <th>Person in Charge Sales</th>
                            <td><b>:</b></td>
                            <td><span id="txt-pic-sales"></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>     

                    <div class="col border-bottom mb-4 mt-3"></div>   
                        
                    <div class="col mt-2">
                      <table class="table table-sm table-borderless no-margin">
                        <tbody>
                          <tr>
                            <th>Tahapan Payment :</th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col" style="overflow-x: auto; white-space: nowrap">
                       <table class="table table-bordered table-striped text-center">
                        <tbody>
                          <tr>
                            <th>Payment 1</th>
                            <th>Tanggal Payment 1</th>
                            <th>Nominal Payment 1</th>          
                            <th>Payment 2</th>          
                            <th>Tanggal Payment 2</th>          
                            <th>Nominal Payment 2</th>          
                            <th>Payment 3</th>
                            <th>Tanggal Payment 3</th>
                            <th>Nominal Payment 3</th>
                            <th>Payment 4</th>
                            <th>Tanggal Payment 4</th>
                            <th>Nominal Payment 4</th>
                            <th>Payment 5</th>
                            <th>Tanggal Payment 5</th>
                            <th>Nominal Payment 5</th>
                            <th>Payment 6</th>
                            <th>Tanggal Payment 6</th>
                            <th>Nominal Payment 6</th>
                            <th>Payment 7</th>
                            <th>Tanggal Payment 7</th>
                            <th>Nominal Payment 7</th>
                            <th>Payment 8</th>
                            <th>Tanggal Payment 8</th>
                            <th>Nominal Payment 8</th>
                            <th>Total Payment</th>
                            <th>PPH 23</th>
                            <th>Selisih Payment</th>
                            <th>Keterangan Payment</th>
                          </tr>
                          <tr>
                            <td><span id="txt-payment1"></span></td>
                            <td><span id="txt-tglpay1"></span></td>
                            <td><span id="txt-nompay1"></span></td>              
                            <td><span id="txt-payment2"></span></td>              
                            <td><span id="txt-tglpay2"></span></td>              
                            <td><span id="txt-nompay2"></span></td>              
                            <td><span id="txt-payment3"></span></td>
                            <td><span id="txt-tglpay3"></span></td>
                            <td><span id="txt-nompay3"></span></td>
                            <td><span id="txt-payment4"></span></td>
                            <td><span id="txt-tglpay4"></span></td>
                            <td><span id="txt-nompay4"></span></td>
                            <td><span id="txt-payment5"></span></td>
                            <td><span id="txt-tglpay5"></span></td>
                            <td><span id="txt-nompay5"></span></td>
                            <td><span id="txt-payment6"></span></td>
                            <td><span id="txt-tglpay6"></span></td>
                            <td><span id="txt-nompay6"></span></td>
                            <td><span id="txt-payment7"></span></td>
                            <td><span id="txt-tglpay7"></span></td>
                            <td><span id="txt-nompay7"></span></td>
                            <td><span id="txt-payment8"></span></td>
                            <td><span id="txt-tglpay8"></span></td>
                            <td><span id="txt-nompay8"></span></td>
                            <td><span id="txt-totalpay"></span></td>
                            <td><span id="txt-pph23"></span></td>
                            <td><span id="txt-selisihpay"></span></td>
                            <td><span id="txt-ketpay"></span></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>   
                      <div class="col mt-2">
                        <table class="table table-sm table-borderless no-margin">
                            <tbody>
                              <tr>
                                <th>Tahapan Upload :</th>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                    <div class="col" style="overflow-x: auto; white-space: nowrap">
                      <table class="table table-bordered table-striped text-center">
                        <tbody>
                          <tr>
                            <th>Upload Tahap 1</th>
                            <th>Upload Tahap 2</th>
                            <th>Upload Tahap 3</th>
                            <th>Upload Tahap 4</th>
                            <th>Upload Tahap 5</th>
                            <th>Upload Tahap 6</th>
                            <th>Upload Tahap 7</th>
                            <th>Upload Tahap 8</th>
                            <th>Upload Tahap 9</th>
                            <th>Upload Tahap 10</th>
                          </tr>
                          <tr>
                            <td><span id="txt-upload1"></span></td>
                            <td><span id="txt-upload2"></span></td>
                            <td><span id="txt-upload3"></span></td>
                            <td><span id="txt-upload4"></span></td>
                            <td><span id="txt-upload5"></span></td>
                            <td><span id="txt-upload6"></span></td>
                            <td><span id="txt-upload7"></span></td>
                            <td><span id="txt-upload8"></span></td>
                            <td><span id="txt-upload9"></span></td>
                            <td><span id="txt-upload10"></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>                   
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            </div>
            <!-- END Modal View Data -->

            <!-- Modal Delete Data -->
            <form action="<?php echo site_url('control_sales/delete_sales'); ?>" method="post">
              <div class="modal fade" id="DeleteModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Records</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure to delete this ?</p>
                    </div>
                    <div class="modal-footer">
                      <input type="hidden" name="delete_id" required>
                      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-success btn-sm">Yes</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!-- END Modal Delete Data -->

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
  $(document).ready(function() {
      var dataTable = $('#example1').DataTable({
        "responsive": true,
        "autoWidth": false,
        //"buttons": ["csv", "excel", "pdfHtml5", "print"],

        //dom: "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
          //"<'row'<'col-md-12'tr>>" +
          //"<'row'<'col-md-5'i><'col-md-7'p>>",

        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "<?php echo base_url() . 'index.php/control_sales/jsonBilling'; ?>",
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
    });
    $(document).on('click', '#example1', function() {
        var booking_order = $(this).data('booking');
        var booking_order = $(this).data('booking');      
        var profit_center = $(this).data('profit');
        var pic_sales = $(this).data('picsales');
        var no_reservasi = $(this).data('idreservasi');       
        var upload1 = $(this).data('upload1');
        var upload2 = $(this).data('upload2');
        var upload3 = $(this).data('upload3');
        var upload4 = $(this).data('upload4');
        var upload5 = $(this).data('upload5');
        var upload6 = $(this).data('upload6');
        var upload7 = $(this).data('upload7');
        var upload8 = $(this).data('upload8');
        var upload9 = $(this).data('upload9');
        var upload10 = $(this).data('upload10');
        var payment1 = $(this).data('payment1');  
          var tglpay1 = $(this).data('tglpay1');
          var nompay1 = $(this).data('nompay1');
          var payment2 = $(this).data('payment2');
          var tglpay2 = $(this).data('tglpay2');
          var nompay2 = $ (this).data('nompay2');     
          var payment3 = $(this).data('payment3');
          var tglpay3 = $(this).data('tglpay3');
          var nompay3 = $(this).data('nompay3');
          var payment4 = $(this).data('payment4');
          var tglpay4 = $(this).data('tglpay4');
          var nompay4 = $(this).data('nompay4');
          var payment5 = $(this).data('payment5');
          var tglpay5 = $(this).data('tglpay5');
          var nompay5 = $(this).data('nompay5');
          var payment6 = $(this).data('payment6');
          var tglpay6 = $(this).data('tglpay6');
          var nompay6 = $(this).data('nompay6');
          var payment7 = $(this).data('payment7');
          var tglpay7 = $(this).data('tglpay7');
          var nompay7 = $(this).data('nompay7');
          var payment8 = $(this).data('payment8');
          var tglpay8 = $(this).data('tglpay8');
          var nompay8 = $(this).data('nompay8');
          var total_payment = $(this).data('totalpay');
          var pph23 = $(this).data('pph');
          var sel_payment = $(this).data('selpay');
          var ket_payment = $(this).data('ketpay');
        // Classified id and variable string,
        $('#txt-kodebooking').text(booking_order);
        $('#txt-kodebooking').text(booking_order);
        $('#txt-reservasi-id').text(no_reservasi);
        $('#txt-pic-sales').text(pic_sales);
        $('#txt-profit').text(profit_center);
        $('#txt-upload1').text(upload1);
        $('#txt-upload2').text(upload2);
        $('#txt-upload3').text(upload3);
        $('#txt-upload4').text(upload4);
        $('#txt-upload5').text(upload5);
        $('#txt-upload6').text(upload6);
        $('#txt-upload7').text(upload7);
        $('#txt-upload8').text(upload8);
        $('#txt-upload9').text(upload9);
        $('#txt-upload10').text(upload10);
        $('#txt-payment1').text(payment1);
          $('#txt-tglpay1').text(tglpay1);
          $('#txt-nompay1').text(nompay1);
          $('#txt-payment2').text(payment2);
          $('#txt-tglpay2').text(tglpay2);
          $('#txt-nompay2').text(nompay2);
          $('#txt-payment3').text(payment3);
          $('#txt-tglpay3').text(tglpay3);
          $('#txt-nompay3').text(nompay3);
          $('#txt-payment4').text(payment4);
          $('#txt-tglpay4').text(tglpay4);
          $('#txt-nompay4').text(nompay4);
          $('#txt-payment5').text(payment5);
          $('#txt-tglpay5').text(tglpay5);
          $('#txt-nompay5').text(nompay5);
          $('#txt-payment6').text(payment6);
          $('#txt-tglpay6').text(tglpay6);
          $('#txt-nompay6').text(nompay6);
          $('#txt-payment7').text(payment7);
          $('#txt-tglpay7').text(tglpay7);
          $('#txt-nompay7').text(nompay7);
          $('#txt-payment8').text(payment8);
          $('#txt-tglpay8').text(tglpay8);
          $('#txt-nompay8').text(nompay8);
          $('#txt-totalpay').text(total_payment);
          $('#txt-pph23').text(pph23);
          $('#txt-selisihpay').text(sel_payment);
          $('#txt-ketpay').text(ket_payment);
      });
</script>
</body>
</html>
