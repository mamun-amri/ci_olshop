<div class="container">
   <div class="row">
      <div class="col-md-5">
         <div class="card shadow">
            <div class="card-body">
               <form action="<?= base_url('snap/edit_proses') ?>" method="POST">
                  <input type="hidden" name="id_transaksi" value="<?= $status['id_transaksi'] ?>">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Status Transaksi</label>
                     <select name="status_transaksi" class="form-control" id="exampleFormControlSelect1">
                        <option><?= $status['transaction_status'] ?></option>
                        <option>expire</option>
                        <option>Barang sedang dikirim</option>
                     </select>
                  </div>
                  <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-edit"></i> Ubah Status</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>