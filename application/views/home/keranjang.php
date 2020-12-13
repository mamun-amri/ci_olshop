<section class="cart bgwhite p-t-90 p-b-100">
   <div class="container">
      <?php if ($this->cart->contents()) : ?>
         <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
               <table class="table-shopping-cart">
                  <tr class="table-head">
                     <th class="column-1"></th>
                     <th class="column-2">Barang</th>
                     <th class="column-3">Harga</th>
                     <th class="column-4 p-l-70">Kuantitas</th>
                     <th class="column-5">Total</th>
                  </tr>

                  <?php
                  foreach ($this->cart->contents() as $items) :
                     echo form_open('home/update_keranjang/' . $items['rowid']);
                  ?>
                     <tr class="table-row">
                        <td class="column-1">
                           <div class="cart-img-product b-rad-4 o-f-hidden">
                              <img src="<?= base_url('public/img/upload/') . $items['image'] ?>" alt="IMG-PRODUCT">
                           </div>
                        </td>
                        <td class="column-2"><?= $items['name'] ?></td>
                        <td class="column-3">Rp. <?= number_format($items['price'])  ?></td>
                        <td class="column-4">
                           <div class="flex-w bo5 of-hidden w-size17">
                              <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                 <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                              </button>

                              <input class="size8 m-text18 t-center num-product" type="number" name="qty" value="<?= $items['qty'] ?>">

                              <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                 <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                              </button>
                           </div>
                           <div class="size9 trans-0-4 m-t-10 m-b-10">
                              <button class="btn flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4 d-inline" type="submit"><i class="fa fa-edit"></i></button>
                              <a class="btn flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4 m-t-10 d-inline" href="<?= base_url('home/hapus_keranjang/') . $items['rowid'] ?>"><i class="fa fa-trash"></i></a>
                           </div>
                        </td>
                        <td class="column-5">Rp. <?= number_format($items['subtotal']) ?></td>
                     </tr>
                  <?php
                     echo form_close();
                  endforeach; ?>
                  <tr>
                     <td colspan="4" align="center" class="font-weight-bold">Total : </td>
                     <td> Rp. <?= number_format($this->cart->total()) ?></td>
                  </tr>
               </table>
            </div>
         </div>

         <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="size10 trans-0-4 m-t-10 m-b-10">
               <!-- Button -->
               <a href="<?= base_url('transaksi') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                  Lanjut
               </a>
            </div>
         </div>
      <?php else : ?>
         <div class="row justify-content-center m-t-20">
            <div class="col-md-9">
               <div class="justify-content-center">
                  <div class="alert alert-danger" role="alert">
                     <h1 class="mb-4 text-center"><i class="fa fa-frown-o"></i></h1>
                     <h2 class="alert-heading text-center">Keranjang Belanja Kosong!</h2>
                     <p class="text-center">Silahkan Pesan Barang Terlebih Dahulu :)</p>
                  </div>
               </div>
            </div>
         </div>
      <?php endif; ?>
   </div>
</section>