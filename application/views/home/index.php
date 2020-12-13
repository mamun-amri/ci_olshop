  <?= $this->session->flashdata('pesan'); ?>
  <!-- Slide1 -->
  <section class="slide1">
     <div class="wrap-slick1">
        <div class="slick1">
           <div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url() ?>public/img/upload/banner.png">
              <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                 <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                    Aplikasi Pemesanan Sate Bandeng
                 </span>

                 <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                    Sate Bandeng HJ.MARIYAM
                 </h2>

                 <div class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="zoomIn">
                    <p>Jl. KIUJU TENGAH KAUJON TENGAH NO: 63 RT.03 RW.02 SERANG BANTEN</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>

  <!-- New Product -->
  <section class="newproduct bgwhite p-t-45 p-b-105">
     <div class="container">
        <div class="sec-title p-b-60">
           <h3 class="m-text5 t-center">
              Produk Yang di Tawarkan
           </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
           <div class="slick2">

              <?php foreach ($barang as $barang) : ?>
                 <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                       <div class="block2-img wrap-pic-w of-hidden pos-relative">
                          <img src="<?= base_url('public/img/upload/') . $barang['gambar'] ?>" alt="IMG-PRODUCT">

                          <div class="block2-overlay trans-0-4">
                                <a class="flex-c-m size1 bg4 hov1 s-text1 trans-0-4" href="<?= base_url('home/detail/') . $barang['id_barang'] ?>">Detail</a><br>
                             <div class="block2-btn-addcart w-size1 trans-0-4">

                                <button class="tambah_keranjang flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" data-gambar="<?= $barang['gambar']; ?>" data-produkid="<?= $barang['id_barang']; ?>" data-produknama="<?= $barang['nama_barang']; ?>" data-produkharga="<?= $barang['harga']; ?>">Keranjang</button>
                                <input style="text-align: center; margin-left: 15px;" type="hidden" id="<?= $barang['id_barang']; ?>" name="quantity" min="0" max="100" value="1">
                             </div>
                          </div>
                       </div>

                       <div class="block2-txt p-t-20">
                          <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                             <?= $barang['nama_barang'] ?>
                          </a>

                          <span class="block2-price m-text6 p-r-5">
                             Rp. <?= number_format($barang['harga'])  ?>
                          </span>
                       </div>
                    </div>
                 </div>
              <?php endforeach; ?>
           </div>
        </div>
     </div>
  </section>