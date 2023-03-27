<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../assets/css/select2.customs.css" rel="stylesheet">
    <style>
      /* The message box is shown when the user clicks on the password field */
      #message {
        display:none;
      }
    </style>
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
              <h4 class="tx-poppins tx-medium mg-b-0">Pendaftaran Akun Baru VIP</h4>
            </div>
            <div>
              <!-- Kalau ada button di kanan -->
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">
            
            <div class="col-12 col-sm-12 col-md-10 col-lg-7 col-xl-7 mg-b-10">
              <div class="card bd-0">
                <div class="card-body">
                  <form action="#">
                    <h5 class="tx-poppins tx-medium mg-b-15">Informasi Alumni</h5>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" placeholder="Nama Lengkap" required>
                      <label for="nama-lengkap">Nama Lengkap</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="nama-panggilan" name="nama-panggilan" placeholder="Nama Panggilan">
                      <label for="nama-panggilan">Nama Panggilan (opsional)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="titel" name="titel" placeholder="Titel">
                      <label for="titel">Titel (opsional)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="date" class="form-control" id="tgl" name="tgl-lhr" placeholder="Tanggal Lahir" required>
                      <label for="tgl">Tanggal Lahir</label>
                    </div>
                    <div class="form-row">
                      <div class="col-6 form-group">
                        <label for="a" class="mg-b-0">
                          <input type="radio" name="jk" class="radio-button-its-element" id="a" required="">
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <span>Laki-laki</span>
                            </div>
                        </label>
                      </div>
                      <div class="col-6 form-group">
                        <label for="b" class="mg-b-0">
                          <input type="radio" name="jk" class="radio-button-its-element" id="b">
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <span>Perempuan</span>
                            </div>
                        </label>
                      </div>
                    </div>
                    <p class="tx-poppins tx-medium tx-15">Kontak</p>
                    <div class="form-group form-floating">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      <label for="email">Email</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="number" class="form-control" id="hp" name="hp" placeholder="hp">
                      <label for="hp">No HP (opsional)</label>
                    </div>
                    <p class="tx-poppins tx-medium tx-15">Identitas</p>
                    <div class="form-row">
                      <div class="col-6 form-group">
                        <label for="ktp" class="mg-b-0">
                          <input type="radio" name="identitas" class="radio-button-its-element" id="ktp">
                            <div class="radio-button-its">
                              <div class="dot mg-r-10"></div>
                              <span>KTP</span>
                            </div>
                        </label>
                      </div>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="no-identitas" name="no-identitas" placeholder="Nomor Identitas">
                      <label for="no-identitas">Nomor Identitas</label>
                    </div>
                    <hr class="bd-0">
                    <h5 class="tx-poppins tx-medium mg-b-15">Riwayat Pendidikan</h5>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="gelar_tambah" placeholder="Aa" name="gelar_1">
                      <label for="gelar_tambah">Gelar Akademik</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="number" class="form-control" id="nim_tambah" placeholder="0" name="nim_1">
                      <label for="nim_tambah">NIM</label>
                    </div>
                    <div class="form-row">
                      <div class="col-12"><p class="tx-poppins tx-medium">Tahun Masuk</p></div>
                      <div class="col-6">
                        <div class="form-group form-floating">
                          <select class="form-select" id="bulan_msk_tambah" name="bulan_msk_1" aria-label="Floating label select example">
                            <option value="" selected>Pilih bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                          <label for="bulan_msk_tambah">Bulan Masuk</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group form-floating">
                          <select class="form-select" id="tahun_msk_tambah" name="tahun_msk_1" aria-label="Floating label select example" required>
                            <option value="" selected>Pilih tahun</option>
                            <option value="2022">2022</option>
                          </select>
                          <label for="tahun_msk_tambah">Tahun Masuk (Wajib)</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-12"><p class="tx-poppins tx-medium">Tahun Lulus</p></div>
                      <div class="col-6">
                        <div class="form-group form-floating">
                          <select class="form-select" id="bulan_lls_tambah" name="bulan_lls_1" aria-label="Floating label select example">
                            <option value="" selected>Pilih bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                          <label for="bulan_lls_tambah">Bulan Lulus</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group form-floating">
                          <select class="form-select" id="tahun_lls_tambah" name="tahun_lls_1" aria-label="Floating label select example">
                            <option value="" selected>Pilih tahun</option>
                            <option value="2022">2022</option>
                          </select>
                          <label for="tahun_lls_tambah">Tahun Lulus</label>
                        </div>
                      </div>
                    </div>
                    <div id="newRowRevisi"></div>
                    <button id="addRowRevisi" type="button" class="btn btn-its-custom-2 tx-poppins tx-medium d-flex justify-content-center btn-block mg-b-15"><ion-icon name="add" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Tambah Riwayat Pendidikan</button>
                    <hr class="bd-0">
                    <h5 class="tx-poppins tx-medium mg-b-15">Pekerjaan Saat Ini</h5>
                    <div class="mg-b-5 form-floating">
                      <input type="text" class="form-control" id="instansi_tambah" placeholder="Aa" name="instansi_1" required>
                      <label for="instansi_tambah">Instansi/Perusahaan (wajib)</label>
                    </div>
                    <p>Tidak menemukan instansi Anda? <a data-toggle="collapse" href="#collapseExample" aria-controls="collapseExample" class="tx-medium">Tambahkan di sini</a>.</p>
                    <div class="collapse" id="collapseExample">
                      <div class="bd pd-15 rounded-its-10 mg-b-20">
                        <p class="tx-poppins tx-medium mg-b-15">Tambah Instansi/Perusahaan</p>
                        <div class="mg-b-10 form-floating">
                          <input type="text" class="form-control" id="instansi_tambah" placeholder="Aa" name="instansi_1" required>
                          <label for="instansi_tambah">Instansi/Perusahaan (wajib)</label>
                        </div>
                        <div class="mg-b-10 form-floating">
                          <input type="text" class="form-control" id="alamat_tambah" placeholder="Aa" name="alamat_1">
                          <label for="alamat_tambah">Alamat</label>
                        </div>
                        <div class="mg-b-10 form-floating">
                          <input type="text" class="form-control" id="telp_tambah" placeholder="Aa" name="telp_1">
                          <label for="telp_tambah">No. Telepom</label>
                        </div>
                        <div class="mg-b-10 form-floating">
                          <input type="text" class="form-control" id="email_tambah" placeholder="Aa" name="email_1">
                          <label for="email_tambah">Email</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group form-floating">
                      <select class="form-select select2 select-office" id="instansi" name="bid" required>
                        <option value="">Tidak tersedia</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <label for="instansi">Instansi</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="bidang_tambah" placeholder="Aa" name="bidang_1" required>
                      <label for="bidang_tambah">Bidang Usaha (wajib)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="jabatan_tambah" placeholder="Aa" name="jabatan_1" required>
                      <label for="jabatan_tambah">Jabatan (wajib)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="divisi_tambah" placeholder="Aa" name="divisi_1" required>
                      <label for="divisi_tambah">Divisi</label>
                    </div>
                    <div class="form-group form-floating">
                      <textarea class="form-control" id="deskripsi_tambah" placeholder="Aa" name="deskripsi_1" style="height: 80px"></textarea>
                      <label for="deskripsi_tambah">Deskripsi Pekerjaan</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="lokasi_tambah" placeholder="Aa" name="lokasi_1">
                      <label for="lokasi_tambah">Lokasi</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="number" class="form-control" id="telp_tambah" placeholder="Aa" name="telp_1">
                      <label for="telp_tambah">Nomor Telepon Kerja</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="email" class="form-control" id="email_tambah" placeholder="Aa" name="email_1" required>
                      <label for="email_tambah">Email Kerja (Wajib)</label>
                    </div>
                    <div class="form-row">
                      <div class="col-12"><p class="tx-poppins tx-medium">Tahun Masuk</p></div>
                        <div class="col-6">
                          <div class="form-group form-floating">
                            <select class="form-select" id="bulan_msu_tambah" name="bulan_msu_1" aria-label="Floating label select example">
                              <option value="" selected>Pilih bulan</option>
                              <option value="1">Januari</option>
                              <option value="2">Februari</option>
                              <option value="3">Maret</option>
                              <option value="4">April</option>
                              <option value="5">Mei</option>
                              <option value="6">Juni</option>
                              <option value="7">Juli</option>
                              <option value="8">Agustus</option>
                              <option value="9">September</option>
                              <option value="10">Oktober</option>
                              <option value="11">November</option>
                              <option value="12">Desember</option>
                            </select>
                            <label for="bulan_msu_tambah">Bulan Masuk</label>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group form-floating">
                            <select class="form-select" id="tahun_msu_tambah" name="tahun_msu_1" aria-label="Floating label select example" required>
                              <option value="" selected>Pilih tahun</option>
                              <option value="2022">2022</option>
                            </select>
                            <label for="tahun_msu_tambah">Tahun Masuk (Wajib)</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-6 form-group">
                          <label for="ya1" class="mg-b-0">
                            <input type="radio" name="sampai1" class="radio-button-its-element" id="ya1" required="">
                              <div class="radio-button-its">
                                <div class="dot mg-r-10"></div>
                                <span>Sampai saat ini</span>
                              </div>
                          </label>
                        </div>
                        <div class="col-6 form-group">
                          <label for="tidak1" class="mg-b-0">
                            <input type="radio" name="sampai1" class="radio-button-its-element" id="tidak1">
                              <div class="radio-button-its">
                                <div class="dot mg-r-10"></div>
                                <span>Sudah selesai</span>
                              </div>
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-its-3 tx-poppins tx-medium float-right">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>

    <div class="modal fade effect-scale" id="pekerjaan-add" role="dialog" aria-labelledby="pekerjaan-add" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Pekerjaan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15">Informasi Pekerjaan</p>
                <div class="mg-b-10 form-floating">
                  <input type="text" class="form-control" id="instansi_tambah" placeholder="Aa" name="instansi_1" required>
                  <label for="instansi_tambah">Instansi/Perusahaan (wajib)</label>
                </div>
                <div class="mg-b-10 form-floating">
                  <input type="text" class="form-control" id="alamat_tambah" placeholder="Aa" name="alamat_1">
                  <label for="alamat_tambah">Alamat</label>
                </div>
                <div class="mg-b-10 form-floating">
                  <input type="text" class="form-control" id="telp_tambah" placeholder="Aa" name="telp_1">
                  <label for="telp_tambah">No. Telepom</label>
                </div>
                <div class="mg-b-10 form-floating">
                  <input type="text" class="form-control" id="email_tambah" placeholder="Aa" name="email_1">
                  <label for="email_tambah">Email</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
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
        $('.select2').select2({
          placeholder: 'Pilih salah satu',
          searchInputPlaceholder: 'Cari'
        });
      });
    </script>
    <script type="text/javascript">
      // add row
      $("#addRowRevisi").click(function () {
          var html = '';

          html += '<div id="inputFormRowRevisi" class="bd pd-x-15 pd-t-5 pd-b-15 rounded-its-10 mg-b-15">';
          html += '<div class="d-flex align-items-center justify-content-between mg-b-5">';
          html += '<p class="tx-poppins tx-medium tx-color-01 mg-b-0">Tambah Riwayat Pendidikan</p>';
          html += '<button id="removeRowRevisi" type="button" class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="trash-sharp" class="mg-y-2 tx-18"></ion-icon></button>';
          html += '</div>';
          html += '<div class="mg-b-10 form-floating">';
          html += '<textarea class="form-control" placeholder="Aa" id="isi-revisi" name="isi" style="height: 100px" required></textarea>';
          html += '<label for="isi-revisi">Isi Revisi</label>';
          html += '</div>';
          html += '<div class="form-floating">';
          html += '<input type="text" class="form-control" placeholder="Aa" id="hlmn" name="hlm" required>';
          html += '<label for="hlmn">Halaman</label>';
          html += '</div>';
          html += '</div>';

          $('#newRowRevisi').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowRevisi', function () {
          $(this).closest('#inputFormRowRevisi').remove();
      });
    </script>
    <script>
      $('#instansi')
        .select2()
        .on('select2:open', () => {
          $(".select2-results:not(:has(a))").append('<a href="#pekerjaan-add" class="tx-poppins tx-medium d-flex align-items-center select-office-close" style="padding: 6px 10px 15px 10px; height: 100%;display: inline-table; z-index: 1051 !important;" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add" class="tx-18 mg-r-5"></ion-icon>Tambahkan secara manual</a>');
        }
      )
    </script>

  </body>
</html>
