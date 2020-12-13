<div class="container m-b-50 m-t-100">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card shadow">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">

                     <form method="POST">
                        <label for="nama">Nama lengkap</label>
                        <div class="size1 bo4 m-b-22">
                           <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="nama" id="nama" placeholder="Nama lengkap" value="<?= set_value('nama') ?>">
                           <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <label for="telepon">Nomor telepon</label>
                        <div class="size1 bo4 m-b-22">
                           <input class="sizefull s-text7 p-l-15 p-r-15" type="number" name="telepon" id="telepon" placeholder="Nomor telepon" value="<?= set_value('telepon') ?>">
                           <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                           <label>Provinsi</label>
                           <select class="form-control" id="provinsi" name="provinsi">

                           </select>
                           <?= form_error('provinsi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <label>Kota/Kabupaten</label>
                           <select class="form-control" id="kota" name="kota">

                           </select>
                        </div>

                        <div class="form-group">
                           <label>Kurir</label>
                           <select class="form-control" id="kurir" name="kurir">
                              <option>Pilih Kurir</option>
                              <option value="pos">POS Indonesia</option>
                              <option value="tiki">TIKI</option>
                              <option value="jne">JNE</option>

                           </select>
                           <?= form_error('kurir', '<small class="text-danger">', '</small>'); ?>
                        </div>
                  </div>

                  <div class="col-md">
                     <label for="nama">Alamat lengkap</label>
                     <div class="size1 bo4 m-b-22">
                        <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat lengkap" value="<?= set_value('alamat_lengkap') ?>">
                        <?= form_error('alamat_lengkap', '<small class="text-danger">', '</small>'); ?>
                     </div>

                     <label for="nama">Catatan pembelian</label>
                     <div class="size1 bo4 m-b-22">
                        <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="catatan" id="catatan" placeholder="Option" value="<?= set_value('catatan') ?>">
                     </div>

                     <div class="form-group">
                        <label>Paket ongkos kirim</label>
                        <select class="form-control" id="paket" name="paket">
                           <option>Pilih Paket</option>

                        </select>
                        <?= form_error('paket', '<small class="text-danger">', '</small>'); ?>
                     </div>

                     <table class="table">
                        <tr>
                           <td>Total Belanja :</td>
                           <td>
                              <p id="belanja" cart_total="<?= $this->cart->total() ?>">Rp. <?= number_format($this->cart->total())  ?></p>
                           </td>
                        </tr>
                        <tr>
                           <td> Ongkos kirim :</td>
                           <td>
                              <span class="d-inline">Rp.
                                 <p class="d-inline" id="ongkir"></p>
                              </span>
                           </td>
                        </tr>
                        <tr>
                           <td> <b>Total bayar</b></td>
                           <td>
                              <span class="d-inline"> <b>Rp. <p class="d-inline" id="total_belanja"></p></b> </span>
                           </td>
                        </tr>
                     </table>

                  </div>
               </div>

               <input type="hidden" name="total_berat" value="1200">
               <input type="hidden" name="nama_provinsi" value="">
               <input type="hidden" name="nama_distrik">
               <input type="hidden" name="type">
               <input type="hidden" name="nama_kodepos">
               <input type="hidden" name="nama_ekspedisi">
               <input type="hidden" name="nama_paket">
               <input type="hidden" name="ongkoskirim">
               <input type="hidden" name="estimasi">
               <input type="hidden" name="total_belanja" value="<?= $this->cart->total() ?>">
               <input type="hidden" name="total_bayar">
               <div class="flex-w flex-sb-m">
                  <div class="size10 trans-0-4">
                     <button type="submit" id="submit" class="btn flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Lanjut
                     </button>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>