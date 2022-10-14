    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data List BUS</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">List Data Bus</li>
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
                  <h3 class="card-title pt-3">List data BUS</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#modal-import">
                      <i class="fa fa-upload"></i><br> Import Data (csv / xlsx)
                    </button>
                  </div>
                </div>
                <!-- Modal Start -->
                <div class="modal fade" id="modal-import">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Import Data BUS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- Content right here -->

                        <form method="POST" action="<?= base_url('index.php/control_katbus/spreadsheetImport'); ?>" enctype="multipart/form-data">
                          <h6>Pilih file yang akan di upload (dalam format .csv atau .xlsx)</h6>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="upload_file" class="form-control" id="upload_file" placeholder="Browse">
                            </div>
                            <div class="input-group-append">
                              <button type="submit" class="input-group-text btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </form>

                        <!-- End -->
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('index.php/control_katbus/spreadsheetFormat_download'); ?>" target="_blank" class="btn btn-info">Unduh format Excel (.xlsx)</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal End -->

                <div class="card-body">
                  <?php if ($this->session->flashdata('message')):
                    echo $this->session->flashdata('message');
                  endif;?>
                  <table id="table2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tipe Unit</th>
                        <th>Kategori Bus</th>
                        <th>Jumlah Seat/Bangku</th>
                        <th>No. Polisi</th>
                      </tr>
                    </thead>
                  </table>
                  <a href="<?= base_url('index.php/control_katbus/remove_allData'); ?>" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus Semua Data</a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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
    <!-- dropzonejs -->
    <script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/dropzone/min/dropzone.min.js"></script>
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
      //AJAX Datatables
      $(document).ready(function() {
        var dataTable = $('#table2').DataTable({
          "responsive": true,
          "autoWidth": false,
          "buttons": ["copy", "colvis"],

          dom: "<'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",

          "processing": true,
          "serverSide": true,
          "order": [],
          "ajax": {
            url: "<?php echo base_url() . 'index.php/control_katbus/jsonBus'; ?>",
            type: "POST"
          },
          "columnDefs": [{
            //"targets": 4,
            //"className": "text-center",
            "orderable": false,
          }, ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-5:eq(0)');
      });
    </script>
    </body>

    </html>