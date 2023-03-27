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
                <h4 class="tx-poppins tx-medium mg-b-0">Berkas</h4>
              </div>
              <div>
                <!-- Kalau ada button di kanan -->
              </div>
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20">
              <a href="#file-upload" onclick="tabbtn()" class="btn btn-its-3 tx-poppins tx-medium d-inline-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="cloud-upload" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Unggah Berkas</a>
              <a href="#btn-filter" class="btn btn-white tx-poppins tx-medium d-inline-flex align-items-center mg-l-5" data-toggle="modal" data-animation="effect-scale"><ion-icon name="filter" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Filter</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="d-flex justify-content-start align-items-center collapse-arrow">
                <p class="tx-poppins tx-medium tx-15 mg-b-0">Sertifikat/Surat Pernyataan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <a class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1">
                    <ion-icon name="chevron-down-sharp" class="mg-y-2 tx-18"></ion-icon>
                  </a>
                </div>
              </div>
              <div class="collapse show" id="collapse-1">
                <div class="row row-xs mg-t-5">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 mg-b-10">
                    <div class="card bd-0">
                      <div class="card-body pos-relative pd-15">
                        <div class="dropdown pos-absolute t-10 r-10">
                          <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical-sharp" class="mg-y-2 tx-18"></ion-icon></a>
                          <div class="dropdown-menu dropdown-menu-right rounded-its-10">
                            <a href="#file-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a>
                            <a href="#file-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                            <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                            <a href="#file-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                          </div>
                        </div>
                        <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                          <a href="#">
                            <img src="../../assets/img/format-pdf.svg" class="wd-50 wd-md-50 wd-lg-50">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1" title="File berkas dsfsdf dsfsfse dfsg.pdf">File berkas dsfsdf dsfsfse dfsg.pdf</a>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Dokumen yang diupload hanya contoh untuk keperluan demo.">5 hari &bullet; Dokumen yang diupload hanya contoh untuk keperluan demo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 mg-b-10">
                    <div class="card bd-0">
                      <div class="card-body pos-relative pd-15">
                        <div class="dropdown pos-absolute t-10 r-10">
                          <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical-sharp" class="mg-y-2 tx-18"></ion-icon></a>
                          <div class="dropdown-menu dropdown-menu-right rounded-its-10">
                            <a href="#file-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a>
                            <a href="#file-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                            <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                            <a href="#file-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                          </div>
                        </div>
                        <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                          <a href="#">
                            <img src="../../assets/img/format-img.svg" class="wd-50 wd-md-50 wd-lg-50">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1" title="Sertif bukti wirausaha.jpg">Sertif bukti wirausaha.jpg</a>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Sertifikat wirausaha">3 hari &bullet; Sertifikat wirausaha</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10">
              <div class="d-flex justify-content-start align-items-center collapse-arrow">
                <p class="tx-poppins tx-medium tx-15 mg-b-0">Foto</p>
                <div class="d-flex justify-content-between align-items-center">
                  <a class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2">
                    <ion-icon name="chevron-down-sharp" class="mg-y-2 tx-18"></ion-icon>
                  </a>
                </div>
              </div>
              <div class="collapse show" id="collapse-2">
                <div class="row row-xs mg-t-5">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 mg-b-10">
                    <div class="card bd-0">
                      <div class="card-body pos-relative pd-15">
                        <div class="dropdown pos-absolute t-10 r-10">
                          <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical-sharp" class="mg-y-2 tx-18"></ion-icon></a>
                          <div class="dropdown-menu dropdown-menu-right rounded-its-10">
                            <a href="#file-detail" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="information-sharp" class="tx-18"></ion-icon></span></div> Detail</a>
                            <a href="#file-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                            <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                            <a href="#file-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                          </div>
                        </div>
                        <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                          <a href="#">
                            <img src="../../assets/img/format-img.svg" class="wd-50 wd-md-50 wd-lg-50">
                          </a>
                        </div>
                        <div>
                          <a href="#" class="tx-poppins tx-medium tx-color-01 mg-b-0 crop-text-1" title="BerkasGambar.jpg">BerkasGambar.jpg</a>
                          <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Unggah langsung">3 hari &bullet; Unggah langsung</p>
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

    <div class="modal fade effect-scale" id="file-upload" tabindex="-1" role="dialog" aria-labelledby="file-upload" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Unggah Berkas</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close-sharp" class="mg-y-2 tx-18"></ion-icon></button>
            <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">upload</a>
              </li>
            </ul>
          </div>
          <form>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="modal-body">
                  <div class="form-group form-floating">
                    <select class="form-select" id="jenis-berkas" aria-label="Floating label select example" required>
                      <option value="0" selected>Pilih salah satu</option>
                      <option value="1">Dokumen informasi tambahan admin</option>
                      <option value="2">Sertifikat/Surat pernyataan</option>
                      <option value="3">Foto</option>
                    </select>
                    <label for="jenis-berkas">Jenis Berkas</label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-its-3 tx-poppins tx-medium" onclick="uploadbtn()" id="btn" disabled>Selanjutnya</button>
                </div>
              </div>
              <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" required>
                      <label class="custom-file-label" for="customFile">Pilih berkas</label>
                    </div>
                  </div>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="nama-berkas" placeholder="Nama berkas" required>
                    <label for="nama-berkas">Nama Berkas</label>
                  </div>
                  <div class="form-group form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan-berkas" style="min-height: 100px" required></textarea>
                    <label for="keterangan-berkas">Keterangan</label>
                  </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                  <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Unggah</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="modal fade effect-scale" id="file-detail" tabindex="-1" role="dialog" aria-labelledby="file-detail" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Detail Berkas</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close-sharp" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <div class="modal-body card-list">
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Nama</span> 
              <span class="crop-text-1">File berkas dsfsdf dsfsfse dfsg.pdf</span>
            </div>
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Jenis</span> 
              <span class="crop-text-1">Sertifikat/surat pernyataan</span>
            </div>
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Ekstensi</span> 
              <span class="crop-text-1">Portable Document Format (.pdf)</span>
            </div>
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Ukuran</span> 
              <span class="crop-text-1">392849 KB</span>
            </div>
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Diunggah</span> 
              <span class="crop-text-1">2020-09-03 08:49:09.967</span>
            </div>
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Diubah</span> 
              <span class="crop-text-1">2021-04-27 12:45:17.543</span>
            </div>
            <div class="card-list-text">
              <span class="tx-13 tx-color-03">Keterangan</span> 
              <span class="crop-text-1">sertifikat wirausaha</span>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Kembali</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="file-edit" tabindex="-1" role="dialog" aria-labelledby="file-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Berkas</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close-sharp" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group form-floating">
                <input type="text" class="form-control" id="nama-berkas" placeholder="Nama berkas" value="File berkas dsfsdf dsfsfse dfsg" required>
                <label for="nama-berkas">Nama Berkas</label>
              </div>
              <div class="form-group form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="keterangan-berkas" style="min-height: 100px" required>sertifikat wirausaha</textarea>
                <label for="keterangan-berkas">Keterangan</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="file-delete" tabindex="-1" role="dialog" aria-labelledby="file-delete" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Berkas</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus berkas ini?</p>
          </div>
          <form>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-danger tx-poppins tx-medium">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="btn-filter" tabindex="-1" role="dialog" aria-labelledby="btn-filter" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Filter</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close-sharp" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="filter-nama" placeholder="Nama berkas">
                  <label for="filter-nama">Nama Berkas</label>
                </div>
                <p class="tx-poppins tx-medium tx-15">Kategori</p>
                <div class="form-group form-floating">
                  <select class="form-select" id="filter-jenis" aria-label="Floating label select example">
                    <option value="a" selected>Semua Kategori</option>
                    <option value="1">Dokumen informasi tambahan admin</option>
                    <option value="2">Sertifikat/Surat pernyataan</option>
                    <option value="3">Foto</option>
                  </select>
                  <label for="filter-jenis">Jenis Berkas</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Tampilkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php include "../partial/footer.php" ?>	
    
    <?php include "../partial/script.php" ?>
    <script>
      function uploadbtn(){
        $('[href="#upload"]').tab('show');
      }
      function homebtn(){
        $('[href="#home"]').tab('show');
      }
      function tabbtn(){
        $('[href="#home"]').tab('show');
      }
    </script>
    <script>
      $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        var $old_tab = $($(e.target).attr("href"));
        var $new_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() < $old_tab.index()){
          $old_tab.css('position', 'relative').css("right", "0").show();
          $old_tab.animate({"right":"-100%"}, 300, function () {
            $old_tab.css("right", 0).removeAttr("style");
          });
        }
        else {
          $old_tab.css('position', 'relative').css("left", "0").show();
          $old_tab.animate({"left":"-100%"}, 300, function () {
            $old_tab.css("left", 0).removeAttr("style");
          });
        }
      });

      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $new_tab = $($(e.target).attr("href"));
        var $old_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() > $old_tab.index()){
          $new_tab.css('position', 'relative').css("right", "-2500px");
          $new_tab.animate({"right":"0"}, 500);
        }
        else {
          $new_tab.css('position', 'relative').css("left", "-2500px");
          $new_tab.animate({"left":"0"}, 500);
        }
      });

      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // your code on active tab shown
      });
    </script>
    <script>
      $( document ).ready(function() {
        $('#jenis-berkas').on('change', function() {
          if(this.value == 0)
              $('#btn').attr("disabled", true);
            else
              $('#btn').attr("disabled", false);
        });
      });
    </script>

  </body>
</html>
