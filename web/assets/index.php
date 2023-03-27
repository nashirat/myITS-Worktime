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


      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big"
        style="min-height: calc(100vh - 80px); overflow: visible">
        <?php include "../partial/sidebar.php"?>
        <div class="flex-1 mg-0 pd-0 mg-xl-r-50   pd-lg-x-0 pd-xl-x-0 bg-0" id="content" style="min-height: 100vh;">
          <div class="row row-xs bg-0 mg-0 pd-0">
            <div class="d-flex align-items-center justify-content-between mg-b-15 mg-t-90 mg-l-5 mg-xl-l-0">
              <div class="row row-xs bg-0 mg-0 pd-0">
                <div class="d-flex align-items-center justify-content-start">
                  <a class="tx-poppins tx-medium tx-30 mg-b-5">Assets</a>
                </div>
                <div class="tx-color-03 tx-roboto tx-18 d-flex align-items-center justify-content-start">
                  <p class="mg-r-10">Semua aset yang dipakai untuk aplikasi-aplikasi myITS.
                  </p>
                </div>
              </div>
              <div>
                <!-- Kalau ada button di kanan -->
              </div>
            </div>


            <div
              class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  col-mmxl-4 col-mxl-4 col-xxl-3 mg-b-15 mg-xs-b-10 mg-sm-b-10 mg-md-b-10 mg-lg-b-10 mg-xl-b-10  ">
              <a href="../assets/iconlibrary.php">
                <div class="card card-hover bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
                  <div class="pd-10 cover-base flex-fill d-flex flex-column   ">
                    <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                      style="position:relative; background-image: url(../../assets/img/purplebg.png);">
                      <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                        style="background-image: url(../../assets/img/cardcoverpurple.png);">
                      </div>
                      <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                        style="background-image: url(../../assets/img/inputdata.png);">
                      </div>
                    </div>
                    <div class="d-flex flex-column mg-t-10 mg-b-5 pd-x-5">
                      <div class="tx-color-01 tx-poppins tx-20 tx-medium">
                        Icon Library
                      </div>
                      <div class="tx-color-03 tx-roboto tx-14 mg-t-3 mg-b-5">
                        Kumpulan ikon untuk digunakan di aplikasi myITS.
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div
              class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  col-mmxl-4 col-mxl-4 col-xxl-3 mg-b-15 mg-xs-b-10 mg-sm-b-10 mg-md-b-10 mg-lg-b-10 mg-xl-b-10  ">
              <a href="../assets/imagelibrary.php">
              <div class="card card-hover bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
                <div class="pd-10  cover-base rounded-its-10 flex-fill d-flex flex-column   ">
                  <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                    style="position:relative; background-image: url(../../assets/img/purplebg.png);">
                    <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                      style="background-image: url(../../assets/img/cardcoverpurple.png);">
                    </div>
                    <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                      style="background-image: url(../../assets/img/dashboard.png);">
                    </div>
                  </div>
                  <div class="d-flex flex-column mg-t-10 mg-t-10 mg-b-5 pd-x-5">
                    <div class="tx-color-01 tx-poppins tx-20 tx-medium">
                      Image Library
                    </div>
                    <div class="tx-color-03 tx-roboto tx-14 mg-y-5">
                      Kumpulan gambar untuk digunakan di aplikasi myITS.
                    </div>
                  </div>
                </div>
              </div>
              </a>
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