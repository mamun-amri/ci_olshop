<!-- Footer -->
<footer class="bg6 p-t-60 p-b-43 p-l-45 p-r-45">
   <div class="flex-w p-b-90">
      <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
         <h4 class="s-text12 p-b-30">
            BUTUH BANTUAN ?
         </h4>

         <div>
            <p class="s-text7 w-size27">
               Jika anda mengalamin masalah, silahkan hubungi call center kami di : 0877 - xxxx - xxxx
               Atau anda bisa mengunjungi sosial media kami :)
            </p>

            <div class="flex-m p-t-30">
               <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
               <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
               <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
               <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
               <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
            </div>
         </div>
      </div>
   </div>
   <div class="t-center s-text6">
      Jl. KIUJU TENGAH KAUJON TENGAH NO: 63 RT.03 RW.02 SERANG BANTEN
   </div>
   <div class="t-center s-text8 ">
      Copyright © 2020 Sate Bandeng HJ. Mariyam
   </div>
   </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
   <span class="symbol-btn-back-to-top">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
   </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/select2/select2.min.js"></script>
<script type="text/javascript">
   $(".selection-1").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
   });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/fashe/') ?>vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
   $('.block2-btn-addcart').each(function() {
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function() {
         swal(nameProduct, "is added to cart !", "success");
      });
   });

   $('.block2-btn-addwishlist').each(function() {
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function() {
         swal(nameProduct, "is added to wishlist !", "success");
      });
   });
</script>

<!--===============================================================================================-->
<script src="<?= base_url('assets/fashe/') ?>js/main.js"></script>
<script>
   $(document).ready(function() {

      $.ajax({
         type: 'post',
         url: '<?= base_url('transaksi/provinsi') ?>',
         success: function(hasil) {
            $('select[name=provinsi]').html(hasil);
         }
      });

      $("select[name=provinsi]").on("change", function() {
         let id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
         $.ajax({
            type: 'post',
            url: '<?= base_url('transaksi/distrik') ?>',
            data: 'id_provinsi=' + id_provinsi_terpilih,
            success: function(hasil) {
               $("select[name=kota]").html(hasil);
            }
         })
      });

      $("select[name=kurir]").on("change", function() {
         // dapatkan id kurir atau value dari select option kurir
         let kurir_terpilih = $("select[name=kurir]").val();

         // dapatkan id_disktrik atau kota
         let kota_terpilih = $("option:selected", "select[name=kota]").attr("id_distrik");

         // dapatkan total berat
         let total_berat = $("input[name=total_berat]").val();
         $.ajax({
            type: 'post',
            url: '<?= base_url('transaksi/ongkir') ?>',
            data: 'ekspedisi=' + kurir_terpilih + '&distrik=' + kota_terpilih + '&berat=' + total_berat,
            success: function(hasil) {
               $("select[name=paket]").html(hasil);
               $("input[name=nama_ekspedisi]").val(kurir_terpilih);
            }
         })
      });

      $("select[name=kota]").on("change", function() {
         let prov = $("option:selected", this).attr("nama_provinsi");
         let dist = $("option:selected", this).attr("nama_distrik");
         let tipe = $("option:selected", this).attr("type_distrik");
         let kodepos = $("option:selected", this).attr("kodepos");

         $("input[name=nama_provinsi]").val(prov);
         $("input[name=nama_distrik]").val(dist);
         $("input[name=type]").val(tipe);
         $("input[name=nama_kodepos]").val(kodepos);
      });

      $("select[name=paket]").on("change", function() {
         let paket = $("option:selected", this).attr("paket");
         let ongkir = $("option:selected", this).attr("ongkir");
         let etd = $("option:selected", this).attr("etd");
         $("input[name=nama_paket]").val(paket);
         $("input[name=ongkoskirim]").val(ongkir);
         $("input[name=estimasi]").val(etd);
      });

      $("select[name=paket]").on("change", function() {
         var ongkir_terpilih = $("option:selected", this).attr("ongkir");
         var belanja = $("#belanja").attr("cart_total");
         var total = Number(ongkir_terpilih) + Number(belanja);
         $("#ongkir").text(Intl.NumberFormat().format(ongkir_terpilih));
         $("#total_belanja").text(Intl.NumberFormat().format(total));
         $("input[name=total_bayar]").val(total);
      });

      // midtrans action ============================
      $('#pay-button').click(function(event) {
         event.preventDefault();
         $(this).attr("disabled", "disabled");


         $.ajax({
            url: '<?= site_url() ?>/snap/token',
            cache: false,
            // data: 'nama_penerima=' + nama_penerima,

            success: function(data) {
               //location = data;


               console.log('token = ' + data);

               var resultType = document.getElementById('result-type');
               var resultData = document.getElementById('result-data');

               function changeResult(type, data) {
                  $("#result-type").val(type);
                  $("#result-data").val(JSON.stringify(data));
                  //resultType.innerHTML = type;
                  //resultData.innerHTML = JSON.stringify(data);
               }

               snap.pay(data, {

                  onSuccess: function(result) {
                     changeResult('success', result);
                     console.log(result.status_message);
                     console.log(result);
                     $("#payment-form").submit();
                  },
                  onPending: function(result) {
                     changeResult('pending', result);
                     console.log(result.status_message);
                     $("#payment-form").submit();
                  },
                  onError: function(result) {
                     changeResult('error', result);
                     console.log(result.status_message);
                     $("#payment-form").submit();
                  }
               });
            }
         });
      });

      // jquery tambah quantitiy halaman home
      $(".tambah_keranjang").on("click", function() {
         var produk_id = $(this).data("produkid");
         var produk_nama = $(this).data("produknama");
         var produk_harga = $(this).data("produkharga");
         var gambar = $(this).data("gambar");
         var quantity = $('#' + produk_id).val();
         $.ajax({
            method: "post",
            url: "<?= base_url('Home/tambah_keranjang') ?>",
            data: {
               produk_id: produk_id,
               produk_nama: produk_nama,
               produk_harga: produk_harga,
               gambar: gambar,
               quantity: quantity
            },
            success: function(hasil) {
               location.reload();
            }
         });


      });
   });
</script>

</body>

</html>