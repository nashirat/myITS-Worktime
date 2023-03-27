<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php"?>
  <style>
    body {
      background-color: white;
      background-image: url("../../assets/img/transparent-black-5p.svg");
      background-position: top;
      background-repeat: repeat-x;
      background-size: 370px;
      /* Resize the background image to cover the entire container */
    }
  </style>
</head>


<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar.php"?>
  <?php include "../partial/user-menu-sidebar.php"?>
  <?php include "../partial/user-menu-sidebar-monitor.php"?>

  <div class="content pd-0" style="position: relative;">
    <!-- Konten dihapus -->
    <div class="content-body mg-t-50">
      <div class="container pd-x-0" id="content">
        <div class="row row-sm">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 z-index-0">
            <div class="row row-xs">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-5">
                <h5 class="tx-poppins tx-medium">Menu Utama</h5>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10 pos-relative z-index-0">
                <div class="card card-hover bd-0 z-index-0">
                  <a href="../ajuan" class="card-hover-line">
                    <div class="card-body ht-250 pos-relative">
                      <img src="../../assets/img/icon/apps.svg" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Elemen</p>
                      <p class="tx-13 tx-color-03 mg-b-10">Elemen User Interface yang dapat digunakan.</p>
                      <div
                        class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center pos-absolute b-20 r-20">
                        <ion-icon name="arrow-forward" class="mg-y-2 tx-18"></ion-icon>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10">
                <div class="card card-hover bd-0 ">
                  <a href="../ajuan" class="card-hover-line">
                    <div class="card-body ht-250 pos-relative">
                      <img src="../../assets/img/icon/paintbrush.svg" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Penyesuaian</p>
                      <p class="tx-13 tx-color-03 mg-b-10">Ubah dan percantik elemen.</p>
                      <div
                        class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center pos-absolute b-20 r-20">
                        <ion-icon name="arrow-forward" class="mg-y-2 tx-18"></ion-icon>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10">
                <div class="card card-hover bd-0 ">
                  <a href="../ajuan" class="card-hover-line">
                    <div class="card-body ht-250 pos-relative">
                      <img src="../../assets/img/icon/form.svg" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Formulir</p>
                      <p class="tx-13 tx-color-03 mg-b-10">Buat formulir Anda.</p>
                      <div
                        class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center pos-absolute b-20 r-20">
                        <ion-icon name="arrow-forward" class="mg-y-2 tx-18"></ion-icon>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10">
                <div class="card card-hover bd-0 ">
                  <a href="../ajuan" class="card-hover-line">
                    <div class="card-body ht-250 pos-relative">
                      <img src="../../assets/img/icon/globe.svg" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Contoh Halaman
                      </p>
                      <p class="tx-13 tx-color-03 mg-b-10">Contoh template halaman.</p>
                      <div
                        class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center pos-absolute b-20 r-20">
                        <ion-icon name="arrow-forward" class="mg-y-2 tx-18"></ion-icon>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10">
                <div class="card card-hover bd-0 ">
                  <a href="../profil" class="card-hover-line">
                    <div class="card-body ht-250 pos-relative">
                      <img src="../../assets/img/profile-default.png"
                        class="wd-40 ht-40 mg-t-5 mg-b-20 img-fluid rounded-circle" style="object-fit: cover;">
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Profil</p>
                      <p class="tx-13 tx-color-03 mg-b-10">Lihat data pribadi hingga status kepegawaian Anda.</p>
                      <div
                        class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center pos-absolute b-20 r-20">
                        <ion-icon name="arrow-forward" class="mg-y-2 tx-18"></ion-icon>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10">
                <div class="card bd-0">
                  <div class="card-body ht-250 pos-relative">
                    <img src="../../assets/img/icon/user-2.svg" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                    <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Teman</p>
                    <p class="tx-13 tx-color-03 mg-b-10">Temukan teman lama.</p>
                    <span
                      class="badge badge-secondary-transparent tx-12 pd-x-10 pd-y-5 rounded-pill pos-absolute b-30 r-20">Segera
                      hadir</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-10">
                <div class="card card-hover bd-0 ">
                  <a href="../lainnya/pengaturan.php" class=" ">
                    <div class="card-body ht-250 pos-relative">
                      <img src="../../assets/img/icon/setting.svg" class="wd-40 mg-r-20 mg-t-5 mg-b-20">
                      <p class="tx-poppins tx-medium tx-color-01 mg-b-0 tx-15 d-flex align-items-center">Pengaturan</p>
                      <p class="tx-13 tx-color-03 mg-b-10">Kelola personalisasi web.</p>
                      <div
                        class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center pos-absolute b-20 r-20">
                        <ion-icon name="arrow-forward" class="mg-y-2 tx-18"></ion-icon>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

         

        </div><!-- row -->
      </div><!-- container -->
    </div>
  </div>
  <?php include "../partial/footer.php" ?>

  <div class="modal fade effect-scale" id="pengumuman-all" tabindex="-1" role="dialog" aria-labelledby="pengumuman-all"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Pengumuman</h5>
          <button type="button"
            class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center"
            data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body pd-x-0 pd-b-0">
          <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
            <div class="bd pd-15 rounded-its-10 mg-b-10">
              <p class="tx-poppins tx-medium mg-b-1 tx-15">Pengumuman 1</p>
              <p class="tx-13 tx-color-03 mg-b-10"><span class="tx-medium">Tata Usaha</span> &bullet; 18 Mar 2021 07.40
              </p>
              <p class="mg-b-0 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed placerat
                lorem. Nam id urna sit amet ligula dapibus iaculis. Quisque nec nisi malesuada, consectetur justo eget,
                consectetur lorem. Integer eu urna sed urna imperdiet dapibus et a velit. In nisi nisi, dictum sed velit
                vitae, posuere consequat turpis. Mauris ut turpis vitae dolor hendrerit semper a id enim. Suspendisse
                lacinia ac justo sed pretium. Pellentesque lobortis libero vitae urna pretium, et pretium metus
                interdum.</p>
            </div>
            <div class="bd pd-15 rounded-its-10 mg-b-10">
              <p class="tx-poppins tx-medium mg-b-1 tx-15">Pengumuman 1</p>
              <p class="tx-13 tx-color-03 mg-b-10"><span class="tx-medium">Tata Usaha</span> &bullet; 18 Mar 2021 07.40
              </p>
              <p class="mg-b-0 text-justify">Untuk seluruh alumni, harap mengisi ulang.</p>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

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

</body>

</html>