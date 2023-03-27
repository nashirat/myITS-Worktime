<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php"?>
 
  <style>
    @media (max-width: 768px) {
      .swipe-mobile {
        overflow: auto;
        white-space: inherit;
      }
    }
  </style>
</head>

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar.php"?>

  <div class="content pd-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start"
      style="min-height: calc(100vh - 80px); overflow: visible">

      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big" style="min-height: calc(100vh - 80px); overflow: visible;">
      <?php include "../partial/sidebar.php"?>
        <div class="flex-1 mg-0 pd-0 mg-xl-r-50   pd-lg-x-0 pd-xl-x-0 bg-0" id="content" style="min-height: 100vh;">
        <div class="row row-xs bg-0 mg-0 pd-0">
          <div class="d-flex align-items-center justify-content-between mg-b-15 mg-t-90 mg-l-5 mg-xl-l-0">
            <div class="row row-xs bg-0 mg-0 pd-0">
              <div class="d-flex align-items-center justify-content-start">
                <a class="tx-poppins tx-medium tx-30 mg-b-5">Style</a>
              </div>
              <div class="tx-color-03 tx-roboto tx-18 d-flex align-items-center justify-content-start">
                <p class="mg-r-10">Style atau gaya adalah salah satu bagian dari user interface yang memberikan tampilan
                  dan rasa yang unik. Untuk melihat informasi teknis lebih lengkap anda dapat mengunjungi <a
                    href="https://getbootstrap.com/">Bootstrap</a> atau <a
                    href="http://preview.themeforest.net/item/dashforge-responsive-admin-dashboard-template/full_screen_preview/23725961?_ga=2.267935054.1591286354.1672028991-633972761.1663294227">Dashforge.</a>
                </p>
              </div>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>

          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  col-mmxl-4 col-mxl-4 col-xxl-3 mg-b-15 mg-xs-b-10 mg-sm-b-10 mg-md-b-10 mg-lg-b-10 mg-xl-b-10  ">

            <div class="card card-hover bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-10 cover-base flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/color.png);">
                  </div>
                </div> 
                <div class="d-flex flex-column mg-t-10 mg-b-5 pd-l-5 pd-r-5">
                  <div class="tx-color-01 tx-poppins tx-20 tx-medium">
                    Warna
                  </div>
                  <div class="tx-color-03 tx-roboto tx-14 mg-t-5 mg-b-5">
                    Penggunaan warna untuk kategori, penyampaian informasi, dan lain-lain.
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  col-mmxl-4 col-mxl-4 col-xxl-3 mg-b-15 mg-xs-b-10 mg-sm-b-10 mg-md-b-10 mg-lg-b-10 mg-xl-b-10  ">

            <div class="card card-hover bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-10  cover-base rounded-its-10 flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/typography.png);">
                  </div>
                </div>
                <div class="d-flex flex-column mg-t-10 mg-b-0 pd-l-5 pd-r-5">
                  <div class="tx-color-01 tx-poppins tx-20 tx-medium">
                    Tifografi
                  </div>
                  <div class="tx-color-03 tx-roboto tx-14 mg-t-5 mg-b-5">
                    Pemilihan font untuk memperjelas text serta memberikan hirearki informasi yang benar.
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  col-mmxl-4 col-mxl-4 col-xxl-3 mg-b-15 mg-xs-b-10 mg-sm-b-10 mg-md-b-10 mg-lg-b-10 mg-xl-b-10">
            <div class="card card-hover bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-10  cover-base rounded-its-10 flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/iconography.png);">
                  </div>
                </div>
                <div class="d-flex flex-column mg-t-10 mg-b-0 pd-l-5 pd-r-5">
                  <div class="tx-color-01 tx-poppins tx-20 tx-medium">
                    Ikonografi
                  </div>
                  <div class="tx-color-03 tx-roboto tx-14 mg-t-5 mg-b-5">
                    Aturan tentang pewarnaan, ukuran, lapisan, dan fungsi ikon.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  col-mmxl-4 col-mxl-4 col-xxl-3 mg-b-15 mg-xs-b-10 mg-sm-b-10 mg-md-b-10 mg-lg-b-10 mg-xl-b-10">
            <div class="card card-hover bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-10  cover-base rounded-its-10 flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/elevation.png);">
                  </div>
                </div>
                <div class="d-flex flex-column mg-t-10 mg-b-0 pd-l-5 pd-r-5">
                  <div class="tx-color-01 tx-poppins tx-20 tx-medium">
                    Elevasi
                  </div>
                  <div class="tx-color-03 tx-roboto tx-14 mg-t-5 mg-b-5">
                    Penggunaan bayangan, lapisan gelap, dan komponen lain untuk memberikan depth.
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div><!-- row -->
      </div>
      </div>

      <!-- container -->
    </div>
  </div>
  <?php include "../partial/footer.php" ?>
  <?php include "../partial/script.php" ?>
  <script>
    $(function () {
      'use strict'

      $('[data-toggle="tooltip"]').tooltip()

      $('.df-example .btn-primary').tooltip({
        template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })

      $('.df-example .btn-secondary').tooltip({
        template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })

      $('.df-example .btn-success').tooltip({
        template: '<div class="tooltip tooltip-success" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })

      $('.df-example .btn-danger').tooltip({
        template: '<div class="tooltip tooltip-danger" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      })


    });
  </script>
  <script>
    function filter1() {
      var input = document.getElementById("search1");
      var filter = input.value.toLowerCase();
      var nodes = document.getElementsByClassName('target1');

      for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
          nodes[i].style.display = "block";
        } else {
          nodes[i].style.display = "none";
        }
      }
    }
  </script>
  <script>
    function filter2() {
      var input = document.getElementById("search2");
      var filter = input.value.toLowerCase();
      var nodes = document.getElementsByClassName('target2');

      for (i = 0; i < nodes.length; i++) {
        if (nodes[i].innerText.toLowerCase().includes(filter)) {
          nodes[i].style.display = "block";
        } else {
          nodes[i].style.display = "none";
        }
      }
    }
  </script>

</body>

</html>