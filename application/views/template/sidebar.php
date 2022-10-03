<?php
	// setting tanggal
	$haries = array("Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jum'at", "Saturday" => "Sabtu");
	$bulans = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$bulans_count = count($bulans);
	// tanggal bulan dan tahun hari ini
	$hari_ini = $haries[date("l")];
	$bulan_ini = $bulans[date("n")];
	$tanggal = date("d");
	$bulan = date("m");
	$tahun = date("Y");
?>
   <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../assets/AdminLTE/dist/img/traclogo.png" alt="AdminTrac" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-dark"><b>TRAC BUS UAS</span></b>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-3 mb-3 d-flex">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        <h6 class="text-muted"><i class="fa fa-calendar fa-fw"></i>&nbsp;<?php echo $hari_ini.", ".$tanggal." ".$bulan_ini." ".$tahun ?></h6>
        <!DOCTYPE html>
      <html>
      <head>
      <title>#</title>
      <h6 class="Jam"><i class="fa-solid fa-clock-four-thirty"></i></h6>
      <script type="text/javascript">
      window.onload = function() { jam(); }

      function jam() {
        var e = document.getElementById('jam'),
        d = new Date(), h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

  e.innerHTML = h +':'+ m +':'+ s;

  setTimeout('jam()', 1000);
 }

 function set(e) {
  e = e < 10 ? '0'+ e : e;
  return e;
 }
</script>
</head>
<body>
<left>  
<h3 style="font-size: 15px; font-family: verdana;" id="jam"></h3>
</left>
<i class="fas fa-chevron-circle-down"></i> Menu
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="<?php echo base_url() . 'index.php/control_admin/dashboard' ?>" <?php if ($this->uri->uri_string() == 'control_admin/dashboard') { echo 'class="nav-link active" style="background-color: #28a745"'; } else { echo 'class="nav-link"'; } ?> >
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'index.php/control_admin/view_billing' ?>" <?php if ($this->uri->uri_string() == 'control_admin/view_billing') { echo 'class="nav-link active" style="background-color: #28a745"'; } else { echo 'class="nav-link"'; } ?> >
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Data Billing
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'index.php/control_katbus/view_katbus' ?>" <?php if ($this->uri->uri_string() == 'control_katbus/view_katbus') { echo 'class="nav-link active" style="background-color: #28a745"'; } else { echo 'class="nav-link"'; } ?> >
                <i class="nav-icon fas fa-bus"></i>
                <p>
                  Data List Bus
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'index.php/control_admin/view_sales' ?>" <?php if ($this->uri->uri_string() == 'control_admin/view_sales') { echo 'class="nav-link active" style="background-color: #28a745"'; } else { echo 'class="nav-link"'; } ?> >
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Sales
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'index.php/control_admin/send_mail' ?>" <?php if ($this->uri->uri_string() == 'control_admin/send_mail') { echo 'class="nav-link active" style="background-color: #28a745"'; } else { echo 'class="nav-link"'; } ?> >
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                  Send Mail 
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>