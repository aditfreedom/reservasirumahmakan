 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()?>dashboard" class="brand-link">
      <img src="<?php echo base_url()?>asset/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RESERVASI RM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>asset/dist/img/adit.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Halo, <?php echo $username ?>!</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 text-sm">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">      
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
            <a href="<?=base_url('dashboard');?>" class="nav-link bg-info">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('dashboard/datarumahmakan');?>" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Data Rumah Makan
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('dashboard/datameja');?>" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Data Meja
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('dashboard/datamenu');?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Data Menu
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('dashboard/datakonsumen');?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Data Konsumen
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Reservasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('dashboard/datareservasi');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservasi Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('dashboard/datariwayatreservasi');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Reservasi</p>
                </a>
              </li>
              </ul>
              </li>
          
          <li class="nav-item ">
            <a href="<?=base_url('dashboard/dataprofilpengguna');?>" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profil Pengguna
              </p>
            </a>
          </li>


            


          <li class="nav-item">
            <a href="<?= base_url('dashboard/logout')?>" class="nav-link bg-danger">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

         


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>