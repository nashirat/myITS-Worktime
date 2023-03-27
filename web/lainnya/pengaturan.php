<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
  </head>
  <body class="mn-ht-100v d-flex flex-column">
    <?php include "../partial/navbar.php"?>
    <?php include "../partial/user-menu-sidebar.php"?>
    <?php include "../partial/user-menu-sidebar-monitor.php"?>

    <div class="content pd-0" style="position: relative">
      <!-- Konten dihapus -->

      <div class="content-body mg-t-50">
        <div class="container pd-x-0" id="content">

          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->
          <div>
            <div class="d-flex align-items-center justify-content-between mg-b-15 ht-50">
              <div class="d-flex align-items-center justify-content-start">
                <h4 class="tx-poppins tx-medium mg-b-0">Pengaturan</h4>
              </div>
              <div>
                <!-- Kalau ada button di kanan -->
              </div>
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="media d-flex align-items-start">
                    <div class="wd-35 mg-t-10 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="moon-outline" class="tx-22"></ion-icon></div>
                    <div class="media-body">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Mode gelap</p>
                      <p class="tx-13 tx-color-03">Tampilan nyaman untuk malam hari.</p>
                      <div class="dropdown dropdown-custom">
                        <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-tema" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tidak aktif
                        </button>
                        <div class="dropdown-menu rounded-its-10" aria-labelledby="dropdown-tema">
                          <a class="dropdown-item-its tx-poppins tx-medium" href="#">Tidak aktif</a>
                          <a class="dropdown-item-its tx-poppins tx-medium" href="#">Aktif</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="card bd-0">
                <div class="card-body">
                  <div class="media d-flex align-items-start">
                    <div class="wd-35 mg-t-10 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="language-outline" class="tx-22"></ion-icon></div>
                    <div class="media-body">
                      <p class="tx-poppins tx-medium mg-b-0 tx-15 d-flex align-items-center">Bahasa</p>
                      <p class="tx-13 tx-color-03">Pilih bahasa yang Anda gunakan.</p>
                      <div class="dropdown dropdown-custom">
                        <button class="btn btn-white tx-poppins tx-medium dropdown-toggle" type="button" id="dropdown-tema" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          ID - Bahasa Indonesia
                        </button>
                        <div class="dropdown-menu rounded-its-10" aria-labelledby="dropdown-tema">
                          <a class="dropdown-item-its tx-poppins tx-medium" href="#">ID - Bahasa Indonesia</a>
                          <a class="dropdown-item-its tx-poppins tx-medium" href="#">EN - English</a>
                        </div>
                      </div>
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
    
    <?php include "../partial/script.php" ?>

  </body>
</html>
