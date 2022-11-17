<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pengaturan Akun</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url() . 'index.php/control_admin/dashboard' ?>">Home</a></li>
                <li class="breadcrumb-item active">Pengaturan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">

              <div class="card">
                <div class="card-header">
                  <p class="card-title"></p>
                  <div class="card-tools">
                     </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="form-group">
				      <form class="form-horizontal" action="pengaturan_update.php" method="POST">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Edit Password</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">Password Lama</label>
										<div class="col-sm-4">
											<input type="password" name="password_old" class="form-control" placeholder="Password Lama" required>										
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Password Baru</label>
										<div class="col-sm-4">
											<input type="password" name="password_new" class="form-control" placeholder="Password Baru" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Ulangi Password Baru</label>
										<div class="col-sm-4">
											<input type="password" name="password_new2" class="form-control" placeholder="Ulangi Password Baru" required>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" name="perbarui" class="btn btn-warning">Simpan Perubahan</button>
								</div>
							</div><!-- /.panel -->           
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->					
                <!-- /.card-body -->
								
                <!-- /.modal-dialog -->
             
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
		
  </script>
    </body>

    </html>