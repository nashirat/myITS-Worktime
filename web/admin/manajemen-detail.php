<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    <?php include "../partial/navbar.php"?>
    <?php include "../partial/admin-menu-sidebar.php"?>
    <?php include "../partial/admin-menu-sidebar-monitor.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-50">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div class="d-flex align-items-center justify-content-between mg-b-20 mg-sm-b-25 mg-lg-b-25">
            <div class="d-flex align-items-center justify-content-start">
              <a href="manajemen.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Detail Akun</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 mg-md-b-30">
              <div class="row row-xs d-flex align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="d-flex align-items-center">
                    <div class="pos-relative">
                      <a href="#photoprofil" data-toggle="modal" data-animation="effect-scale">
                        <img src="../../assets/img/profile-default.png" class="rounded-its-50p wd-70 ht-70 wd-md-100 ht-md-100 shadow" alt="">
                      </a>
                    </div>
                    <div class="mg-l-20 mg-md-l-25">
                      <p class="tx-poppins tx-medium tx-20 tx-md-24 mg-b-0">Dwi Santoso</p>
                      <p class="tx-color-03 tx-16 tx-md-18 mg-b-0">(Mr. S.Kom.)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-5 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-2">Data Diri</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Lihat informasi pribadi tentang Anda.</p>
                  </div>
                </div>
                <div class="card-body pd-t-0">
                  <div class="mg-b-20">
                    <ul class="nav nav-line" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link tx-poppins tx-medium active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Informasi Pribadi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link tx-poppins tx-medium" id="pills-warga-tab" data-toggle="pill" href="#pills-warga" role="tab" aria-controls="pills-warga" aria-selected="false">Kewarganegaraan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link tx-poppins tx-medium" id="pills-kontak-tab" data-toggle="pill" href="#pills-kontak" role="tab" aria-controls="pills-kontak" aria-selected="false">Kontak</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Nama</p>
                          <p class="tx-color-01 mg-b-0">Dwi Santoso</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Nama panggilan</p>
                          <p class="tx-color-01 mg-b-0">Gani</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Sapaan</p>
                          <p class="tx-color-01 mg-b-0">Tn.</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Jenis Kelamin</p>
                          <p class="tx-color-01 mg-b-0">Laki-laki</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Kelahiran</p>
                          <p class="tx-color-01 mg-b-0">Karangayar, 1 Januari 1970</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-0 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Agama</p>
                          <p class="tx-color-01 mg-b-0">Islam</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="pills-warga" role="tabpanel" aria-labelledby="pills-warga-tab">
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Jenis Identitas</p>
                          <p class="tx-color-01 mg-b-0">Paspor</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Nomor Identitas</p>
                          <p class="tx-color-01 mg-b-0">12348765</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-0 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Negara</p>
                          <p class="tx-color-01 mg-b-0">Zimbabwe</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="pills-kontak" role="tabpanel" aria-labelledby="pills-kontak-tab">
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Email</p>
                          <p class="tx-color-01 mg-b-0">emailku@email.com</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Nomor Handphone</p>
                          <p class="tx-color-01 mg-b-0">08123456789</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-0 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Alamat</p>
                          <p class="tx-color-01 mg-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a eros at mi lobortis tempus vel sed mauris.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-0 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Pendidikan</h5>
                  </div>
                </div>
                <div class="card-body pd-0">
                  <div class="pd-x-15 pd-md-x-20 pd-y-15 d-flex justify-content-between align-items-center">
                    <div class="media d-flex justify-content-center align-items-center">
                      <div class="wd-35 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="school-outline" class="tx-22"></ion-icon></div>
                      <div class="media-body">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0">S1 Teknik Informatika</p>
                        <p class="tx-medium tx-13 tx-color-03 mg-b-0">Institut Teknologi Sepuluh Nopember</p>
                        <p class="tx-13 tx-color-03 mg-b-0">Agustus 2016 - Oktober 2020</p>
                      </div>
                    </div>
                  </div>
                  <div class="pd-x-15 pd-md-x-20 pd-y-15 d-flex justify-content-between align-items-center">
                    <div class="media d-flex justify-content-center align-items-center">
                      <div class="wd-35 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="school-outline" class="tx-22"></ion-icon></div>
                      <div class="media-body">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0">S1 Teknik Informatika</p>
                        <p class="tx-medium tx-13 tx-color-03 mg-b-0">Institut Teknologi Sepuluh Nopember</p>
                        <p class="tx-13 tx-color-03 mg-b-0">Agustus 2016 - Oktober 2020</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-0 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Riwayat Pekerjaan</h5>
                  </div>
                </div>
                <div class="card-body pd-0">
                  <div class="pd-x-15 pd-md-x-20 pd-y-15 d-flex justify-content-between align-items-center">
                    <div class="media d-flex justify-content-center align-items-center">
                      <div class="wd-35 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="briefcase-outline" class="tx-22"></ion-icon></div>
                      <div class="media-body">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0">Nggambar</p>
                        <p class="tx-medium tx-13 tx-color-03 mg-b-0">Institut Teknologi Sepuluh Nopember, Surabaya</p>
                        <p class="tx-13 tx-color-03 mg-b-0">Januari 2022 - saat ini</p>
                        <p class="tx-13 tx-color-03 mg-b-0">Detail pekerjaan: Menggambar web</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-0 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-0">Berkas Lampiran</h5>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row row-xs">
                    <a href="https://images4.alphacoders.com/263/26366.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-animation="effect-scale" class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-2 mg-b-10">
                      <img src="https://images4.alphacoders.com/263/26366.jpg" class="img-fluid ht-150 wd-100p rounded-its-10 img-cover-crop">
                    </a>
                    <a href="https://images2.alphacoders.com/481/48170.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-animation="effect-scale" class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-2 mg-b-10">
                      <img src="https://images2.alphacoders.com/481/48170.jpg" class="img-fluid ht-150 wd-100p rounded-its-10 img-cover-crop">
                    </a>
                    <a href="https://images2.alphacoders.com/312/31270.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-animation="effect-scale" class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-2 mg-b-10">
                      <img src="https://images2.alphacoders.com/312/31270.jpg" class="img-fluid ht-150 wd-100p rounded-its-10 img-cover-crop">
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

    <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content pd-10 blur-transparent rounded-its-10">
          <img src="../../assets/img/profile-default.png" class="rounded-its-6 wd-100p" alt="">
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>

  </body>
</html>