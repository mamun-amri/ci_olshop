    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
          <div class="sidebar-brand-text mx-3">Sate Bandeng</div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item <?php if ($this->uri->segment(2) == '') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
       </li>
       <!-- Nav Item - Dashboard -->
       <li class="nav-item">
          <a class="nav-link pb-0" href="<?= base_url('home'); ?>">
             <i class="fas fa-fw fa-shopping-bag"></i>
             <span>Home Shop</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider my-0 mt-3">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item <?php if ($this->uri->segment(2) == 'data_barang') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('admin/data_barang'); ?>">
             <i class="fas fa-fw fa-cube"></i>
             <span>Data Barang</span></a>
       </li>

       <li class="nav-item <?php if ($this->uri->segment(2) == 'User') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('admin/User') ?>">
             <i class="fas fa-fw fa-user"></i>
             <span>Data User</span></a>
       </li>

       <li class="nav-item <?php if ($this->uri->segment(2) == 'transaksi') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('snap/transaksi') ?>">
             <i class="fas fa-money-bill"></i>
             <span>Transaksi</span></a>
       </li>

       <li class="nav-item <?php if ($this->uri->segment(1) == 'transaction') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('transaction') ?>">
             <i class="fas fa-fw fa-car"></i>
             <span>Cek Transaksi</span></a>
       </li>

       <li class="nav-item <?php if ($this->uri->segment(3) == 'laporan') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('admin/adminController/laporan') ?>">
             <i class="fas fa-fw fa-paperclip"></i>
             <span>Laporan Transaksi</span></a>
       </li>

       <li class="nav-item <?php if ($this->uri->segment(3) == 'laporan_stok') echo 'active'  ?>">
          <a class="nav-link pb-0" href="<?= base_url('admin/adminController/laporan_stok') ?>">
             <i class="fas fa-fw fa-paperclip"></i>
             <span>Laporan Stok</span></a>
       </li>

       <hr class="sidebar-divider my-0 mt-3">

       <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout') ?>">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>Logout</span></a>
       </li>
       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

    </ul>
    <!-- End of Sidebar -->