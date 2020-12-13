<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link href="<?= base_url('assets/sb-admin2/') ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="font-size: 13px;">
   <div class="text-center">
      <h4>LAPORAN PENDAPATAN</h4>
      <p>Bulan <?= $tanggal ?></p>
      <p>Sate Bandeng Hj. Mariyam</p>
   </div>
   <div class="row mt-4 justify-content-center">   
      <table class="table table-bordered table-sm">
         <tr>
            <th class="text-center">#</th>
            <th>Id transaksi</th>
            <th>Nama pembeli</th>
            <th>Tanggal transaksi</th>
            <th>Total</th>
         </tr>
         <?php
            $i = 1;
            $total = 0;
          foreach($laporan_bulan as $result): ?>     
         <tr>
            <td class="text-center"><?= $i++ ?></td>
            <td><?= $result['order_id'] ?></td>
            <td><?= $result['nama_penerima'] ?></td>
            <td><?= $result['transaction_time'] ?></td>
            <td>Rp. <?= number_format($result['gross_amount']) ?></td>
         </tr>
         <?php $total += $result['gross_amount'] ?>
         <?php endforeach; ?>
         <tr>
            <td colspan="4" style="text-align: center"><b>Total</b></td>
            <td>Rp. <?= number_format($total) ?></td>
         </tr>
      </table>
   </div>
   <br><br><br><br>
      <p class="float-right mr-4">Serang, 2020</p><br><br><br><br>
      <p class="float-right">Ahmad Pebryansah</p>
</div>

<script src="<?= base_url('assets/sb-admin2/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/sb-admin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/sb-admin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/sb-admin2/') ?>js/sb-admin-2.min.js"></script> 
</body>
</html>