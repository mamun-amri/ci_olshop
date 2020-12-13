<div class="container m-b-50 m-t-100">
   <div class="row">
      <div class="col-md-10">
         <div class="card shadow mt-4" style="max-width: 840px;">
            <div class="row no-gutters">
               <div class="col-md-4">
                  <img src="<?= base_url('public/img/upload/') . $barang['gambar']; ?>" class="card-img" style="width: 280px;">
               </div>
               <div class="col-md-8">
                  <div class="card-body">
                     <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
                     <p class="card-text"><?= $barang['keterangan'] ?></p>
                     <p class="card-text">Rp. <?= number_format($barang['harga']);  ?></p>
                     <p class="card-text">Stok : <?= $barang['stok'] ?></p>
                     <p class="card-text"><small class="text-muted">Buruan Beli</small></p>
                  </div>
                  <div class="card-footer">
                     <div class="d-inline">
                        <button class="tambah_keranjang btn btn-sm btn-dark" data-gambar="<?= $barang['gambar']; ?>" data-produkid="<?= $barang['id_barang']; ?>" data-produknama="<?= $barang['nama_barang']; ?>" data-produkharga="<?= $barang['harga']; ?>"><i class="fa fa-shopping-cart mr-2"></i></button>

                        <input style="text-align: center; margin-left: 15px;" type="number" id="<?= $barang['id_barang']; ?>" name="quantity" min="0" max="100" value="1">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="flex-w flex-sb-m">
            <div class="size10 trans-0-4 m-t-10 m-b-10">
               <a href="<?= base_url('home') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                  Kembali
               </a>
            </div>
         </div>
      </div>
   </div>
</div>