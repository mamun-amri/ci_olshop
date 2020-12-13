 <!-- Header -->
 <header>
    <!-- Header desktop -->
    <div class="container-menu-header">


       <div class="wrap_header">
          <!-- Logo -->
          <a href="<?= base_url() ?>" class="logo">
             <img src="<?= base_url('public/img/satebandeng.png') ?>" width="100px"></span>
          </a>

          <!-- Menu -->
          <div class="wrap_menu">
             <nav class="menu">
                <ul class="main_menu">
                   <li class="<?php if ($this->uri->segment(1) == '') echo 'sale-noti' ?>">
                      <a href="<?= base_url() ?>">Home</a>
                   </li>

                   <li class="<?php if ($this->uri->segment(1) == 'about') echo 'sale-noti' ?>">
                      <a href="<?= base_url('about') ?>">Tentang</a>
                   </li>

                   <li class="<?php if ($this->uri->segment(1) == 'contact') echo 'sale-noti' ?>">
                      <a href="<?= base_url('contact') ?>">Kontak</a>
                   </li>
                </ul>
             </nav>
          </div>

          <!-- Header Icon -->
          <div class="header-icons">
             <?php if (!$this->session->userdata('email')) : ?>
                <li class="nav-item">
                   <a class="nav-link d-inline" href="<?= base_url('register') ?>">Daftar</a>
                   <a class="nav-link d-inline" href="<?= base_url('login') ?>">Login</a>
                </li>
             <?php else : ?>
                <li class="nav-item">
                   <a class="nav-link d-inline" href="<?= base_url('snap/status_transaksi'); ?>">Transaksi</a>
                </li>

                <div class="dropdown">
                   <div class="dropdown-toggle mt-1" style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="img-profile rounded-circle" style="width: 25px;" src="<?= base_url('public/img/profile/') . $this->session->userdata('gambar'); ?>">
                   </div>

                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <div class="dropdown-item mb-3">
                         <img class="img-profile rounded-circle header-icon1" style="height: 25px;" src="<?= base_url('public/img/profile/') . $this->session->userdata('gambar'); ?>">
                         <span class="text-gray-600"><?= $this->session->userdata('nama'); ?></span><br>
                         <span class="text-muted" style="font-size: 10px;"><?= $this->session->userdata('email'); ?></span>
                      </div>
                      <a class="dropdown-item" href="<?= base_url('home/setting') ?>">Setting</a>
                      <a class="dropdown-item" href="https://simulator.sandbox.midtrans.com/assets/index.html" target="_blank">Emulator Pembayaran</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a>
                   </div>
                </div>
                <span class="linedivide1"></span>
                <?php $keranjang = $this->cart->total_items(); ?>
                <div class="header-wrapicon2">
                   <a href="<?= base_url('home/detail_keranjang/') . $keranjang; ?>">
                      <img src="<?= base_url('assets/fashe/') ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                      <span class="header-icons-noti"><?= $keranjang; ?></span>
                   </a>
                </div>
             <?php endif; ?>
          </div>
       </div>
    </div>
 </header>