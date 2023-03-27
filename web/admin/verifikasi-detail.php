<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../assets/css/select2.customs.css" rel="stylesheet">
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
              <a href="verifikasi.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
              <h4 class="tx-poppins tx-medium mg-b-0">Detail Pendaftaran</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-50">
              <div class="card bd-0">
                <div class="card-body card-list">
                  <div class="card-list-item">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <h5 class="tx-poppins tx-medium">Cristiano Ronaldo</h5>
                        <div class="d-flex align-items-center">
                          <span class="badge badge-its-3-transparent tx-11">Menunggu pesetujuan</span>
                          <span class="badge badge-success-transparent tx-11">Disetujui</span>
                          <span class="badge badge-orange-transparent tx-11">Dibatalkan</span>
                          <span class="badge badge-danger-transparent tx-11">Ditolak</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-poppins tx-medium tx-15">Informasi Alumni</p>
                    <div class="row row-xs">
                      <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> Nama Lengkap </div>
                      <div class="col-8 col-md-10 mg-b-10"> Cristian Ronaldo </div>
                      <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> Nama Panggilan </div>
                      <div class="col-8 col-md-10 mg-b-10"> Naldo </div>
                      <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> Titel</div>
                      <div class="col-8 col-md-10 mg-b-10"> S. Kom </div>
                      <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> Tanggal Lahir </div>
                      <div class="col-8 col-md-10 mg-b-10"> 1 Jan 2005 </div>
                      <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> Jenis Kelamin </div>
                      <div class="col-8 col-md-10 mg-b-10"> Laki-laki </div>
                      <div class="col-4 col-md-2 tx-13 tx-color-03 mg-b-10"> Jenis Identitas </div>
                      <div class="col-8 col-md-10 mg-b-10"> KTP </div>
                      <div class="col-4 col-md-2 tx-13 tx-color-03"> No. Identitas </div>
                      <div class="col-8 col-md-10"> 12345678901234 </div>
                    </div>
                  </div>
                  <div class="card-list-item">
                    <p class="tx-poppins tx-medium tx-15">Lampiran</p>
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
            </div>

            <div class="col-sm-12 col-lg-12 mg-b-50 mg-md-b-50 fixed-bottom d-flex justify-content-center animated slideInUp z-index-1">
              <div class="card bd-0 wd-85p wd-md-70p wd-lg-60p shadow blur-transparent animated shake delay-2s">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <!-- <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-success wd-10 ht-50 rounded mg-r-15"></div>
                    <p class="tx-poppins tx-medium mg-b-0">Portofolio sudah lengkap</p>
                  </div> -->
                  <!-- <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-its-color-03 wd-10 ht-50 rounded mg-r-15"></div>
                    <p class="tx-poppins tx-medium mg-b-0">Lengkapi portofolio terlebih dahulu.</p>
                  </div> -->
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-info wd-10 ht-50 rounded mg-r-15"></div>
                    <p class="tx-poppins tx-medium mg-b-0">Pendaftaran akun menunggu persetujuan</p>
                  </div>
                  <!-- <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-success wd-10 ht-50 rounded mg-r-15"></div>
                    <p class="tx-poppins tx-medium mg-b-0">Berhasil disetujui</p>
                  </div> -->
                  <!-- <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-danger wd-10 ht-50 rounded mg-r-15"></div>
                    <p class="tx-poppins tx-medium mg-b-0">Portofolio Anda ditolak</p>
                  </div> -->
                  <div class="d-flex justify-content-center align-items-center">
                    <a href="#ajuan-tolak" class="btn btn-white tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="close" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Tolak</a>
                    <a href="#ajuan-revisi" class="btn btn-white tx-poppins tx-medium d-flex justify-content-center mg-l-10" data-toggle="modal" data-animation="effect-scale"><ion-icon name="sync" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Revisi</a>
                    <a href="#ajuan-setuju" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center mg-l-10" data-toggle="modal" data-animation="effect-scale"><ion-icon name="checkmark" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Setujui</a>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <div class="modal fade effect-scale" id="ajuan-setuju" tabindex="-1" role="dialog" aria-labelledby="ajuan-setuju" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Setujui Pendaftaran Akun</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menyetujui pendaftaran akun ini?</p>
          </div>
          <form>
            <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Setujui</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="ajuan-revisi" tabindex="-1" role="dialog" aria-labelledby="ajuan-revisi" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Revisi Pendaftaran Akun</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <p>Apakah Anda yakin ingin meminta revisi pendaftaran akun ini?</p>
              <div class="form-group form-floating">
                <textarea class="form-control" placeholder="Aa" id="alasan-tolak" name="als" style="height: 100px" required></textarea>
                <label for="alasan-tolak">Alasan revisi (Wajib)</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tolak</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="ajuan-tolak" tabindex="-1" role="dialog" aria-labelledby="ajuan-tolak" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tolak Pendaftaran Akun</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <p>Apakah Anda yakin ingin menolak pendaftaran akun ini?</p>
              <div class="form-group form-floating">
                <textarea class="form-control" placeholder="Aa" id="alasan-tolak" name="als" style="height: 100px" required></textarea>
                <label for="alasan-tolak">Alasan penolakan (Wajib)</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger tx-poppins tx-medium">Tolak</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php include "../partial/footer.php" ?>
    
    <?php include "../partial/script.php" ?>
    <script src="../../lib/select2/js/select2.min.js"></script>

    <script>
      // Adding placeholder for search input
      (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);


      $(function(){
        'use strict'

        // Basic with search
        $('.select2-ruangan').select2({
          placeholder: 'Pilih salah satu',
          searchInputPlaceholder: 'Cari'
        });

        // Basic with search
        $('.select2-dospeng').select2({
          placeholder: 'Pilih salah satu',
          searchInputPlaceholder: 'Cari'
        });

      });
    </script>

  </body>
</html>