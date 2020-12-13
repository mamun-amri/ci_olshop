<div class="container">
   <div class="row">
      <div class="col-md">
         <div class="card mb-3 shadow" style="max-width: 900px;">
            <div class="row no-gutters">
               <div class="col-md-4">
                  <img src="<?= base_url('public/img/upload/') . $barang['gambar']; ?>" class="card-img" style="width: 265px;">
               </div>
               <div class="col-md-8">
                  <table class="table mt-1">
                     <tr>
                        <th>Nama Barang</th>
                        <td><?= $barang['nama_barang']; ?></td>
                     </tr>
                     <tr>
                        <th>Keterangan</th>
                        <td><?= $barang['keterangan']; ?></td>
                     </tr>
                     <tr>
                        <th>Harga</th>
                        <td>Rp. <?= $barang['harga']; ?></td>
                     </tr>
                     <tr>
                        <th>Stok</th>
                        <td><?= $barang['stok']; ?></td>
                     </tr>
                  </table>
               </div>

            </div>
         </div>

         <a href="<?= base_url('data_barang') ?>" class="btn btn-danger shadow"><i class="fas fa-backspace mr-1"></i> Kembali</a>
      </div>
   </div>
</div>