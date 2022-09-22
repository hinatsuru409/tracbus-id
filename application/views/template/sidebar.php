    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
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

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url() . 'index.php/control_admin/dashboard' ?>" <?php if ($this->uri->uri_string() == 'control_admin/dashboard') { echo 'class="nav-link active" style="background-color: #28a745"'; } else { echo 'class="nav-link"'; } ?> >
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
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
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>