 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()?>dashboard" class="brand-link">
      <img src="<?php echo base_url()?>favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
            <a href="<?=base_url('dashboardrumahmakan');?>" class="nav-link bg-info">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('dashboardrumahmakan/datamejarumahmakan');?>" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Data Meja
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('dashboardrumahmakan/datamenurumahmakan');?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Data Menu
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="<?=base_url('dashboardrumahmakan/datarekening');?>" class="nav-link">
              <i class="nav-icon fa fa-money-bill-alt"></i>
              <p>
                Data Rekening
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
                <a href="<?=base_url('dashboardrumahmakan/datareservasirumahmakan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservasi Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('dashboardrumahmakan/datariwayatreservasirumahmakan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat Reservasi</p>
                </a>
              </li>
              </ul>
              </li>
          

          <li class="nav-item ">
            <a href="<?=base_url('dashboardrumahmakan/dataprofilpenggunarumahmakan');?>" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Ubah Profil
              </p>
            </a>
          </li>


            


          <li class="nav-item">
            <a href="<?= base_url('dashboardrumahmakan/logout')?>" class="nav-link bg-danger">
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