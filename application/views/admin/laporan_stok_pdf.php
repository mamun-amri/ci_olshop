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
      <h4>LAPORAN STOK BARANG</h4>
      <p>Sate Bandeng Hj. Mariyam</p>
   </div>
   <div class="row mt-4 justify-content-center">   
      <table class="table table-bordered table-sm">
         <tr>
            <th class="text-center">#</th>
            <th>Nama Barang</th>
            <th>Stok</th>
         </tr>
         <?php 
         $no = 1;
         foreach($barang as $row ): ?>
            <tr>
               <td class="text-center"><?= $no++ ?></td>
               <td><?= $row['nama_barang'] ?></td>
               <td><?= $row['stok'] ?></td>
            </tr>
         <?php endforeach; ?>
      </table>
   </div>
         <?php foreach($laporan_stok as $row): ?>
            <p>Total barang terjual : <b><?= $row['laporan_stok'] ?></b> Barang</p>
         <?php endforeach; ?>
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