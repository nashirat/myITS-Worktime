<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php"?>
  <link rel="stylesheet" href="../../assets/css/skeleton.scss">
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
  <?php include "../partial/user-menu-sidebar.php"?>
  <?php include "../partial/user-menu-sidebar-monitor.php"?>

  <div class="content pd-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="content-body pd-0 mg-0" style="min-height: calc(100vh - 100px);">
      <div class="container pd-x-0" id="content">
        
        <div class=" row row-xs">
          <div class="col-12 mg-b-20 mg-sm-b-20 mg-lg-b-30 mg-t-100">
            <div class="card shadow-none bd-0"
              style="background-image: url(../../assets/img/bgfull.png); background-position: bottom center; background-size:cover;">
              <div class="card-body ht-250 ht-md-350 pos-relative">
                <div class="pd-10 pd-md-20">


                </div>

              </div>
            </div>
          </div>




         
          <div class="d-flex align-items-center justify-content-between mg-b-15 ht-50">
            <div class="d-flex align-items-center justify-content-start">
              <a class="tx-poppins tx-medium tx-22 mg-b-0">All Styles</a>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
    
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-20 mg-xs-b-20 mg-sm-b-20 mg-md-b-20 mg-lg-b-20 mg-xl-b-20  ">

            <div class="card bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-15 cover-base flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/color.png);">
                  </div>
                </div>
                <div class="d-flex flex-column mg-t-10 mg-b-10 pd-0">
                  <div class="tx-color-01 tx-poppins  tx-medium">
                    <h5 class="mg-0 pd-0">Color</h5>
                  </div>
                  <div class="tx-color-01 tx-poppins tx-14 mg-t-5">
                    Badge berisi informasi yang singkat, penting, dan dinamis.
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-20 mg-xs-b-20 mg-sm-b-20 mg-md-b-20 mg-l-b-20 mg-xl-b-20  ">

            <div class="card bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-15 pd-t-15 cover-base rounded-its-10 flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/typography.png);">
                  </div>
                </div>
                <div class="d-flex flex-column mg-t-10 mg-b-10 pd-0">
                  <div class="tx-color-01 tx-poppins  tx-medium">
                    <h5 class="mg-0 pd-0">Typography</h5>
                  </div>
                  <div class="tx-color-01 tx-poppins tx-14 mg-t-5">
                    Badge berisi informasi yang singkat, penting, dan dinamis.
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div
            class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mg-b-20 mg-xs-b-20 mg-sm-b-20 mg-md-b-20 mg-l-b-20 mg-xl-b-20  ">

            <div class="card bd-0 pd-0 ht-100p card-list d-flex flex-column justify-content-between  ">
              <div class="pd-15 pd-t-15 cover-base rounded-its-10 flex-fill d-flex flex-column   ">
                <div class="cover-container cover-blue wd-100p mg-0 pd-0"
                  style="position:relative; background-image: url(../../assets/img/orangebg.png);">
                  <div class="cover-bg ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/cardcoverorange.png);">
                  </div>
                  <div class="cover-img ht-100p wd-100p mg-0 pd-0"
                    style="background-image: url(../../assets/img/iconography.png);">
                  </div>
                </div>
                <div class="d-flex flex-column mg-t-10 mg-b-10 pd-0">
                  <div class="tx-color-01 tx-poppins  tx-medium">
                    <h5 class="mg-0 pd-0">Iconography</h5>
                  </div>
                  <div class="tx-color-01 tx-poppins tx-14 mg-t-5">
                    Badge berisi informasi yang singkat, penting, dan dinamis.
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div><!-- row -->
      </div><!-- container -->
    </div>
  </div>
  <?php include "../partial/footer.php" ?>

  <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content pd-10 blur-transparent rounded-its-10">
        <img src="../../assets/img/profile-default.png" class="rounded-its-6 wd-100p mg-b-10" alt="">
        <a href="../profil" class="btn btn-its-custom-1 tx-poppins tx-medium btn-block">Edit Foto Profil</a>
      </div>
    </div>
  </div>
  <div class="modal fade effect-scale" id="app-all" tabindex="-1" role="dialog" aria-labelledby="app-all"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content tabs-animated">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Semua Aplikasi</h5>
          <button type="button"
            class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center"
            data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body pd-0">
          <div class="pd-15">
            <div class="form-floating">
              <input type="text" class="form-control" id="search1" name="search" placeholder="Cari..."
                onkeyup="filter1()">
              <label for="search1">Cari...</label>
            </div>
          </div>
          <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-5 pd-md-x-10" style="overflow-y: auto;">
            <div class="row row-xs">
              <div class="col-12">
                <p class="tx-poppins tx-medium tx-15 pd-10 mg-b-0">Aplikasi Anda</p>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/pddikti.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Cek PDDIKTI</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Academics.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Academics</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Calendar.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Calendar</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Courier.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Courier</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Office.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Office</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Recruitment.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Recruitment</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/E-SBI.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">E-SBI</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Inovasi.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Inovasi</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Classroom.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Classroom</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Presensi.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Presensi</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-WorkTime.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Work Time</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Payroll.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Payroll</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">StudentConnect</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1"><span
                            class="badge badge-warning tx-poppins tx-semibold mg-r-5">DEV</span>StudentConnect</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-StudentConnect.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1"><span
                            class="badge badge-info tx-poppins tx-semibold mg-r-5">BETA</span>StudentConnect</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/si-prestasi.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SI Prestasi</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/ITS-Tarif.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">ITS Tarif</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Project.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Project</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Marketplace.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Kewirausahaan</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Dorm.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Dorm</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Vote.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Vote</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIMARU.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIMARU</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-MoU.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">MoU</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Connect.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Connect</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-KPI.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">KPI</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Contract.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Kontrak</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Vaksin.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Vaksin</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Archive.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Archive</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-RumahNegara.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Rumah Negara</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Gate.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Gate</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-ORMAWA.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM ORMAWA</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-Graha.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM Graha</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-Mentoring.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM Mentoring</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/K3L.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Halo K3L</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-PKM.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM PKM</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/Manajemen-SK.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Manajemen SK</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-MBKM.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">MBKM</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Dosen.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Dosen</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-HealthCheck.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Health Check</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-Beasiswa.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIMBEA</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-TukarPelajar.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">TukarPelajar</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-Wisma.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM Wisma</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-LSP.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">LSP</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIPMABA.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIPMABA</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/skem-lama.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SKEM Lama</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Puspresnas.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Puspresnas</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SPMI.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SPMI</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/E-Aset.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">E-Aset</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Alumni.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Alumni</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Graduation.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Graduation</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SECMAN.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Security Management</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/FiskalITS.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM FISKAL</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIM-Fasor.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIM Fasor</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <p class="tx-poppins tx-medium tx-15 pd-10 mg-b-0">Layanan</p>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/internet.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Akses Internet</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/myITS-Printing.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Printing</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/Service-Desk.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Service Desk</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/Survey.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Survey</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/OTP.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">One Time Password</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/SIMDOM.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">SIMDOM</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/Webinar.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Webinar Booking</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/app-office365.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Office 365</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/app-azure.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Microsoft Azure</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/app-teams.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Microsoft Teams</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/app-gdrive.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Google Drive</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="target1 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 mg-b-10">
                <a href="https://google.com" target="_blank">
                  <div class="pd-x-15 pd-y-20 rounded-its-10 hover-its-1">
                    <div class="media d-flex align-items-center">
                      <img src="../../assets/img/icon-app/app-gmail.svg" class="wd-40 mg-r-15" alt="">
                      <div class="media-body crop-text-1">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1">Mailbox Mahasiswa</p>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1 ht-20" title="Keterangan aplikasi di sini.">
                          Keterangan aplikasi di sini.</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade effect-scale" id="app-fav" tabindex="-1" role="dialog" aria-labelledby="app-fav"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content tabs-animated">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Edit Favorit</h5>
          <button type="button"
            class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center"
            data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <form>
          <div class="modal-body pd-0">
            <div class="pd-15">
              <div class="form-floating">
                <input type="text" class="form-control" id="search2" name="search" placeholder="Cari..."
                  onkeyup="filter2()">
                <label for="search2">Cari...</label>
              </div>
            </div>
            <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
              <p class="tx-poppins tx-medium tx-15 pd-y-15 mg-b-5">Pilih Aplikasi</p>
              <div class="checkbox-its">
                <div class="label-its mg-b-10 target2">
                  <input type="checkbox" id="checkboxOne" value="App" checked>
                  <label for="checkboxOne">
                    <img src="../../assets/img/E-AsetPersediaan.svg" class="ht-30 mg-l-5 mg-r-20">
                    <p class="tx-poppins tx-medium crop-text-1 mg-b-0" title="E-Aset">E-Aset</p>
                  </label>
                </div>
                <div class="label-its mg-b-10 target2">
                  <input type="checkbox" id="checkboxTwo" value="App">
                  <label for="checkboxTwo">
                    <img src="../../assets/img/Manajemen-SK.svg" class="ht-30 mg-l-5 mg-r-20">
                    <p class="tx-poppins tx-medium crop-text-1 mg-b-0" title="Manajemen SK">Manajemen SK</p>
                  </label>
                </div>
                <div class="label-its mg-b-10 target2">
                  <input type="checkbox" id="checkboxThree" value="App">
                  <label for="checkboxThree">
                    <img src="../../assets/img/myITS-IP.svg" class="ht-30 mg-l-5 mg-r-20">
                    <p class="tx-poppins tx-medium crop-text-1 mg-b-0" title="IP">IP</p>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade effect-scale" id="kalender-list" tabindex="-1" role="dialog" aria-labelledby="kalender-list"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content tabs-animated">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Kalender</h5>
          <button type="button"
            class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center"
            data-dismiss="modal">
            <ion-icon name="close" class="mg-y-2 tx-18"></ion-icon>
          </button>
        </div>
        <div class="modal-body pd-0">
          <ul class="nav nav-line pd-x-15" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link tx-poppins tx-medium d-flex align-items-center active" id="today-tab" data-toggle="tab"
                href="#today" role="tab" aria-controls="today" aria-selected="true">
                <ion-icon name="today" class="mg-b-2 mg-r-10"></ion-icon>Kegiatan Hari Ini
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tx-poppins tx-medium d-flex align-items-center" id="search-tab" data-toggle="tab"
                href="#search" role="tab" aria-controls="search" aria-selected="false">
                <ion-icon name="search" class="mg-b-2 mg-r-10"></ion-icon> Cari
              </a>
            </li>
          </ul>
          <div class="tab-content bd bd-gray-300 bd-0" id="myTabContent">
            <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15 mg-b-10">Rabu, 9 Maret 2022</p>
                <div class="pd-15 bd rounded-its-10 mg-b-10">
                  <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Masa Perkuliahan dan Evaluasi</p>
                  <p class="tx-13 tx-medium tx-color-03 mg-b-20">7 Feb 2022 - 17 Jun 2022<span
                      class="badge badge-orange-transparent tx-poppins tx-semibold tx-12 mg-l-5">Revisi</span></p>
                  <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender
                    Akademik</span>
                  <span
                    class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Perkuliahan</span>
                </div>
                <div class="pd-15 bd rounded-its-10 mg-b-10">
                  <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Pelaporan PDDIKTI data Master Mahasiswa</p>
                  <p class="tx-13 tx-medium tx-color-03 mg-b-20">1 Mar 2022 - 30 Mar 2022</p>
                  <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender
                    Akademik</span>
                  <span
                    class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Lain-lain</span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-15" style="overflow-y: auto;">
                <form action="#">
                  <div class="form-row">
                    <div class="col-12">
                      <p class="tx-poppins tx-medium tx-15">Tanggal Mulai</p>
                    </div>
                    <div class="col-4 form-group">
                      <div class="form-floating">
                        <select class="form-select" id="tanggal-1" name="tanggal-1"
                          aria-label="Floating label select example" required>
                          <option value="4" selected>4</option>
                        </select>
                        <label for="tanggal-1">Tanggal</label>
                      </div>
                    </div>
                    <div class="col-4 form-group">
                      <div class="form-floating">
                        <select class="form-select" id="bulan-1" name="bulan-1"
                          aria-label="Floating label select example" required>
                          <option value="3" selected>Maret</option>
                        </select>
                        <label for="bulan-1">Bulan</label>
                      </div>
                    </div>
                    <div class="col-4 form-group">
                      <div class="form-floating">
                        <select class="form-select" id="tahun-1" name="tahun-1"
                          aria-label="Floating label select example" required>
                          <option value="2022" selected>2022</option>
                        </select>
                        <label for="tahun-1">Tahun</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <p class="tx-poppins tx-medium tx-15">Tanggal Selesai</p>
                    </div>
                    <div class="col-4 form-group">
                      <div class="form-floating">
                        <select class="form-select" id="tanggal-2" name="tanggal-2"
                          aria-label="Floating label select example" required>
                          <option value="4" selected>4</option>
                        </select>
                        <label for="tanggal-2">Tanggal</label>
                      </div>
                    </div>
                    <div class="col-4 form-group">
                      <div class="form-floating">
                        <select class="form-select" id="bulan-2" name="bulan-2"
                          aria-label="Floating label select example" required>
                          <option value="3" selected>Maret</option>
                        </select>
                        <label for="bulan-2">Bulan</label>
                      </div>
                    </div>
                    <div class="col-4 form-group">
                      <div class="form-floating">
                        <select class="form-select" id="tahun-2" name="tahun-2"
                          aria-label="Floating label select example" required>
                          <option value="2022" selected>2022</option>
                        </select>
                        <label for="tahun-2">Tahun</label>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Cari</button>
                  </div>
                </form>
                <hr class="bd-0">
                <p class="tx-poppins tx-medium tx-15 mg-b-10">Hasil Pencarian</p>
                <div class="pd-15 bd rounded-its-10 mg-b-10">
                  <p class="tx-poppins tx-medium mg-b-0 crop-text-3">Pelaporan PDDIKTI data Master Mahasiswa</p>
                  <p class="tx-13 tx-medium tx-color-03 mg-b-20">1 Mar 2022 - 30 Mar 2022</p>
                  <span class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Kalender
                    Akademik</span>
                  <span
                    class="badge badge-white bd rounded-its-50 tx-poppins tx-medium tx-12 mg-b-3 mg-r-3">Lain-lain</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade effect-scale" id="pengumuman-detail" tabindex="-1" role="dialog"
    aria-labelledby="pengumuman-detail" aria-hidden="true">
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
            <p class="tx-poppins tx-medium mg-b-1 tx-15">Pengumuman 1</p>
            <p class="tx-13 tx-color-03 mg-b-10"><span class="tx-medium">Tata Usaha</span> &bullet; 18 Mar 2021 07.40
            </p>
            <p class="mg-b-0 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a urna
              viverra, pretium justo sit amet, dictum arcu. Nullam nec arcu a mi porttitor maximus ac ut dolor. Ut in
              luctus diam. In hac habitasse platea dictumst. Sed et lacus in est aliquet vulputate nec at sem.
              Pellentesque non dui sollicitudin, consectetur lorem ac, sodales nulla. Nunc tincidunt vitae felis sit
              amet ultrices. Phasellus sed mi consequat, consectetur enim a, bibendum metus. Morbi gravida aliquam arcu,
              in finibus arcu consequat eu. Aenean vestibulum condimentum felis at aliquet.</p>
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