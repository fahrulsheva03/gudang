<!DOCTYPE html>
<html lang="en">
<?php

require 'components/head.php';

?>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php

    require 'components/nav.php';

    ?>

    <div class="site-block-wrap">
      <div class="owl-carousel with-dots">
        <div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets/assets/images/gudang3.jpg);" data-aos="fade" id="home-section">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6 mt-lg-5 text-center">
                <h1 class="text-shadow">APLIKASI PENDATAAN BARANG GUDANG</h1>
                <h1 class="text-shadow">BERBASIS WEB</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="site-blocks-cover overlay overlay-2" style="background-image: url(assets/assets/images/gudang2.jpg);" data-aos="fade" id="home-section">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-6 mt-lg-5 text-center">
                <h1 class="text-shadow">Melakukan Monitoring Setiap Saat</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <section id="login" class="" style="margin-bottom: 140pt;">
      <div class="container">
        <div class="row content">
          <div class="col-lg-12 text-center">
            <div class="zero-panel">
              <br>
              <div class="zero-panel-content">
                <br>
                <br>
                <br>
                <br>
                <h1 class="text-black">Silahkan Login...</h1>
              </div>
              <br>
              <div class="button-container">
                <a href="admin/login.php" target="_blank" class="btn btn-primary">ADMIN</a>
                <a href="petugas/login_petugas.php" target="_blank" class="btn btn-warning">PETUGAS</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-6 bg-primary site-section how-it-works" id="tentang">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">Warehouse Manager </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">PEMANTUAN.</h3>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-dark">PEMELIHARAAN.</h3>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-dark">OPTIMALISASI.</h3>
            </div>
          </div>

          <br>
          <br>
          <br>
          <br>
          
          <div class="col-md-12 text-center">
            <div class="pr-5">
              <!-- <span class="custom-icon flaticon-home text-black"></span> -->
              <p class="text-black">WarehouseManager adalah aplikasi pendataan barang gudang yang dirancang untuk membantu perusahaan atau organisasi dalam mengelola stok barang secara efisien. Dengan antarmuka yang intuitif dan fitur yang canggih, WarehouseManager memberikan solusi yang terintegrasi untuk pemantauan, pemeliharaan, dan optimalisasi stok gudang.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php

    require 'components/foot.php';

    ?>

</body>

</html>