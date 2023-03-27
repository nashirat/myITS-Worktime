<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../assets/css/select2.customs.css" rel="stylesheet">
    <style>
      ul.tab-list-its {
        white-space: nowrap;
        list-style: none;
      }
      ul.tab-list-its li {
        display: inline-block;
      }
      #container-tab-list {
        overflow-x: auto;
        scroll-behavior: smooth;
      }
      @media (min-width: 576px) {
        #container-tab-list {
        overflow-x: hidden; } }
    </style>
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
                <h4 class="tx-poppins tx-medium mg-b-0">Profil</h4>
              </div>
              <div>
                <!-- Kalau ada button di kanan -->
              </div>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <a href="#file-upload" onclick="tabbtn()" class="btn btn-its-3 tx-poppins tx-medium d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="cloud-upload-outline" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Unggah Berkas</a> -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-5 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-2">Data Diri</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Lihat informasi pribadi tentang Anda.</p>
                  </div>
                  <a href="#profil-edit" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="pencil" class="mg-y-2 tx-18"></ion-icon></a>
                </div>
                <div class="card-body pd-t-0">
                  <div class="mg-b-20">
                    <div id="container-tab-list">
                      <ul class="nav nav-line tab-list-its ht-40" id="pills-tab" role="tablist" style="display: flow-root;">
                        <li class="nav-item">
                          <a class="nav-link tx-poppins tx-medium active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Informasi Pribadi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link tx-poppins tx-medium" id="pills-pegawai-tab" data-toggle="pill" href="#pills-pegawai" role="tab" aria-controls="pills-pegawai" aria-selected="false">Kepegawaian</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link tx-poppins tx-medium" id="pills-kontak-tab" data-toggle="pill" href="#pills-kontak" role="tab" aria-controls="pills-kontak" aria-selected="false">Kontak</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Nama</p>
                          <p class="tx-color-01 mg-b-0">Dwi Santoso</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">NIK</p>
                          <p class="tx-color-01 mg-b-0">Unknown Data</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-0 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Status Kawin</p>
                          <p class="tx-color-01 mg-b-0">Tidak Kawin</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="pills-pegawai" role="tabpanel" aria-labelledby="pills-pegawai-tab">
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">NIP / NPP</p>
                          <p class="tx-color-01 mg-b-0">1998202241050</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Unit</p>
                          <p class="tx-color-01 mg-b-0">Direktorat Sumber Daya Manusia dan Organisasi</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Status Aktif</p>
                          <span class="badge badge-success-transparent tx-12 pd-x-10 pd-y-5 rounded-pill">Aktif</span>
                          <span class="badge badge-color-03-transparent tx-12 pd-x-10 pd-y-5 rounded-pill">Nonaktif</span>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Ikatan Kerja</p>
                          <p class="tx-color-01 mg-b-0">Pegawai Kontrak Fungsional</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Jabatan Fungsional</p>
                          <p class="tx-color-01 mg-b-0">-</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Jabatan Struktural</p>
                          <p class="tx-color-01 mg-b-0">-</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Kode Kawin Gaji</p>
                          <p class="tx-color-01 mg-b-0">1000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-15 mg-md-b-15">
                          <p class="tx-13 tx-color-03 mg-b-0">Kode Kawin PTKP</p>
                          <p class="tx-color-01 mg-b-0">1000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-15 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">NPWP</p>
                          <p class="tx-color-01 mg-b-0">Unknown Data</p>
                          <p class="tx-color-01 mg-b-0">a/n Unknown Data</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mg-b-0 mg-sm-b-0 mg-md-b-0">
                          <p class="tx-13 tx-color-03 mg-b-0">Rekening</p>
                          <p class="tx-color-01 mg-b-0">BNI - Unknown Data <a href="edit-informasi.php" class="badge badge-its-link-3 tx-poppins tx-medium tx-14 pd-x-10 pd-y-5 rounded-pill"> Edit </a></p>
                          <p class="tx-color-01 mg-b-0">a/n Unknown Data</p>
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
                <div class="card-header bd-0 pd-t-20 pd-b-10 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-2">Pendidikan</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Kelola pendidikan yang sudah Anda tempuh</p>
                  </div>
                  <a href="#pendidikan-add" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add" class="mg-y-2 tx-18"></ion-icon></a>
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
                    <div class="dropdown">
                      <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                      <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent wd-200">
                        <a href="#pendidikan-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                        <a href="#pendidikan-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
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
                    <div class="dropdown">
                      <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                      <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent wd-200">
                        <a href="#pendidikan-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                        <a href="#pendidikan-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-10 d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="tx-poppins tx-medium mg-b-2">Riwayat Pekerjaan</h5>
                    <p class="tx-13 tx-color-03 mg-b-0">Riwayat pekerjaan Anda</p>
                  </div>
                  <!-- <a href="#pekerjaan-add" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add" class="mg-y-2 tx-18"></ion-icon></a> -->
                  <a href="#file-upload" onclick="tabbtn()" class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add" class="mg-y-2 tx-18"></ion-icon></a>
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
                    <div class="dropdown">
                      <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                      <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent wd-200">
                        <a href="#pekerjaan-edit" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="pencil-sharp" class="tx-18"></ion-icon></span></div> Edit</a>
                        <a href="#pekerjaan-delete" class="dropdown-item-its tx-poppins tx-medium" data-toggle="modal" data-animation="effect-scale"><div class="avatar mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="trash-sharp" class="tx-18"></ion-icon></span></div> Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-t-20 pd-b-10">
                  <h5 class="tx-poppins tx-medium mg-b-2">Lainnya</h5>
                  <p class="tx-13 tx-color-03 mg-b-0">Atur akun Anda maupun personalisasi web</p>
                </div>
                <div class="card-body pd-0 card-list">
                  <a href="edit-sandi.php" target="_blank" class="card-list-link pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                    <div class="media d-flex align-items-center">
                      <div class="wd-35 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="open-outline" class="tx-22"></ion-icon></div>
                      <div class="media-body">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0">Kelola Akun</p>
                        <p class="tx-13 tx-color-03 mg-b-0">Buka pengaturan akun di myITS SSO</p>
                      </div>
                    </div>
                    <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                  </a>
                  <a href="../lainnya/pengaturan.php" class="card-list-link pd-x-15 pd-md-x-20 pd-y-15 hover-its-1 d-flex align-items-center justify-content-between">
                    <div class="media d-flex align-items-center">
                      <div class="wd-35 mg-r-15 d-flex align-items-center justify-content-center"><ion-icon name="settings-outline" class="tx-22"></ion-icon></div>
                      <div class="media-body">
                        <p class="tx-poppins tx-medium tx-color-01 mg-b-0">Pengaturan Web</p>
                        <p class="tx-13 tx-color-03 mg-b-0">Sesuaikan web</p>
                      </div>
                    </div>
                    <div class="btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center"><ion-icon name="chevron-forward" class="mg-y-2 tx-color-03 tx-18"></ion-icon></div>
                  </a>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>	
    
    <div class="modal fade effect-scale" id="profil-edit" role="dialog" aria-labelledby="profil-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Profil</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15">Informasi Anda</p>
                <div class="form-group form-floating">
                  <select class="form-select" id="sapaan_edit" name="sapaan_2" aria-label="Floating label select example">
                    <option value="" selected>Pilih sapaan</option>
                    <option value="1">Dr.</option>
                    <option value="2">Mr.</option>
                    <option value="3">Ms.</option>
                    <option value="4">Prof.</option>
                  </select>
                  <label for="sapaan_edit">Sapaan</label>
                </div>
                <div class="form-group form-floating">
                  <textarea class="form-control" id="alamat_edit" placeholder="Aa" name="alamat_1" style="height: 80px"></textarea>
                  <label for="alamat_edit">Alamat</label>
                </div>
                <div class="form-group form-floating">
                  <select class="form-select" id="agama_edit" name="agama_2" aria-label="Floating label select example">
                    <option value="" selected>Pilih agama</option>
                    <option value="1">Indonesia</option>
                  </select>
                  <label for="agama_edit">Agama</label>
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
                  <div class="col-6 form-group">
                    <label for="psp" class="mg-b-0">
                      <input type="radio" name="identitas" class="radio-button-its-element" id="psp">
                        <div class="radio-button-its">
                          <div class="dot mg-r-10"></div>
                          <span>Passpor</span>
                        </div>
                    </label>
                  </div>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="no-identitas" name="no-identitas" placeholder="Nomor Identitas">
                  <label for="no-identitas">Nomor Identitas</label>
                </div>
                <div class="form-group form-floating">
                  <select class="form-select" id="negara_edit" name="negara_2" aria-label="Floating label select example">
                    <option value="" selected>Pilih negara</option>
                    <option value="1">Indonesia</option>
                  </select>
                  <label for="negara_edit">Negara</label>
                </div>
                <p class="tx-poppins tx-medium tx-15 mg-b-0">Data Lainnya</p>
                <p class="tx-color-03">Data Anda yang tersimpan di myITS SSO</p>
                <div class="bd pd-15 rounded-its-10 mg-b-10">
                  <p class="tx-13 tx-color-03 mg-b-0">Nama</p>
                  <p class="tx-color-01 mg-b-15">Dwi Santoso</p>
                  <p class="tx-13 tx-color-03 mg-b-0">Nama Panggilan</p>
                  <p class="tx-color-01 mg-b-15">Gani</p>
                  <p class="tx-13 tx-color-03 mg-b-0">Tanggal Lahir</p>
                  <p class="tx-color-01 mg-b-15">Karangayar, 1 Januari 1970</p>
                  <p class="tx-13 tx-color-03 mg-b-0">Jenis Kelamin</p>
                  <p class="tx-color-01 mg-b-15">Laki-laki</p>
                  <p class="tx-13 tx-color-03 mg-b-0">Email</p>
                  <p class="tx-color-01 mg-b-15">emailku@email.com</p>
                  <p class="tx-13 tx-color-03 mg-b-0">No. Handphone</p>
                  <p class="tx-color-01 mg-b-15">08123456789</p>
                  <a href="https://my.its.ac.id" target="_blank" class="btn btn-its-custom-2 tx-poppins tx-medium d-flex justify-content-center btn-block"><ion-icon name="open" class="mg-y-1 tx-18 mg-r-5" ></ion-icon>Edit di myITS SSO</a>
                </div>
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="photoprofil" tabindex="-1" role="dialog" aria-labelledby="photoprofil" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content pd-10 blur-transparent rounded-its-10">
          <img src="../../assets/img/profile-default.png" class="rounded-its-6 wd-100p" alt="">
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="pendidikan-add" role="dialog" aria-labelledby="pendidikan-add" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Pendidikan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15">Informasi Pendidikan</p>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="perguruan_tambah" placeholder="Aa" name="perguruan_1" required>
                  <label for="perguruan_tambah">Nama Perguruan Tinggi (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="singkatan_tambah" placeholder="Aa" name="singkatan_1" required>
                  <label for="singkatan_tambah">Singkatan Perguruan Tinggi (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="prodi_tambah" placeholder="Aa" name="prodi_1" required>
                  <label for="prodi_tambah">Program Studi (wajib)</label>
                </div>
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
    <div class="modal fade effect-scale" id="pendidikan-edit" role="dialog" aria-labelledby="pendidikan-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Pendidikan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15">Informasi Pendidikan</p>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="perguruan_edit" placeholder="Aa" name="perguruan_2" value="Institut Teknologi Sepuluh Nopember" required>
                  <label for="perguruan_edit">Nama Perguruan Tinggi (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="singkatan_edit" placeholder="Aa" name="singkatan_2" value="ITS" required>
                  <label for="singkatan_edit">Singkatan Perguruan Tinggi (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="prodi_edit" placeholder="Aa" name="prodi_2" value="S1 Teknik Informatika" required>
                  <label for="prodi_edit">Program Studi (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="gelar_edit" placeholder="Aa" name="gelar_2" value="S. Kom">
                  <label for="gelar_edit">Gelar Akademik</label>
                </div>
                <div class="form-group form-floating">
                  <input type="number" class="form-control" id="nim_edit" placeholder="0" name="nim_2" value="123" value="05111640000048">
                  <label for="nim_edit">NIM</label>
                </div>
                <div class="form-row">
                  <div class="col-12"><p class="tx-poppins tx-medium">Tahun Masuk</p></div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="bulan_msk_edit" name="bulan_msk_2" aria-label="Floating label select example">
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
                      <label for="bulan_msk_edit">Bulan Masuk</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="tahun_msk_edit" name="tahun_msk_2" aria-label="Floating label select example" required>
                        <option value="" selected>Pilih tahun</option>
                        <option value="2022">2022</option>
                      </select>
                      <label for="tahun_msk_edit">Tahun Masuk (Wajib)</label>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-12"><p class="tx-poppins tx-medium">Tahun Lulus</p></div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="bulan_lls_edit" name="bulan_lls_2" aria-label="Floating label select example">
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
                      <label for="bulan_lls_edit">Bulan Lulus</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="tahun_lls_edit" name="tahun_lls_2" aria-label="Floating label select example">
                        <option value="" selected>Pilih tahun</option>
                        <option value="2022">2022</option>
                      </select>
                      <label for="tahun_lls_edit">Tahun Lulus</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="pendidikan-delete" tabindex="-1" role="dialog" aria-labelledby="pendidikan-delete" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Pendidikan</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus pendidikan ini?</p>
          </div>
          <form>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger tx-poppins tx-medium">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
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
                <p class="mg-b-0">Tidak menemukan instansi Anda? <a data-toggle="collapse" href="#collapseExample" aria-controls="collapseExample" class="tx-medium">Tambahkan di sini</a>.</p>
                <div class="collapse" id="collapseExample">
                  <div class="bd pd-15 rounded-its-10 mg-t-5">
                    <div class="d-flex align-items-center justify-content-between mg-b-15">
                      <p class="tx-poppins tx-medium mg-b-0">Tambah Instansi/Perusahaan</p>
                      <a class="btn btn-icon btn-its-custom-2 rounded-its-50p d-flex align-items-center" data-toggle="collapse" href="#collapseExample" aria-controls="collapseExample"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></a>
                    </div>
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
                <div class="form-group form-floating mg-t-15">
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
                <div class="form-row">
                  <div class="col-12"><p class="tx-poppins tx-medium">Tahun Selesai</p></div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="bulan_sls_tambah" name="bulan_sls_1" aria-label="Floating label select example">
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
                      <label for="bulan_sls_tambah">Bulan Selesai</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="tahun_sls_tambah" name="tahun_sls_1" aria-label="Floating label select example">
                        <option value="" selected>Pilih tahun</option>
                        <option value="2022">2022</option>
                      </select>
                      <label for="tahun_sls_tambah">Tahun Selesai</label>
                    </div>
                  </div>
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
    <div class="modal fade effect-scale" id="pekerjaan-edit" role="dialog" aria-labelledby="pekerjaan-edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Edit Pekerjaan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <p class="tx-poppins tx-medium tx-15">Informasi Pekerjaan</p>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="instansi_edit" placeholder="Aa" name="instansi_2" required>
                  <label for="instansi_edit">Instansi/Perusahaan (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="bidang_edit" placeholder="Aa" name="bidang_2" required>
                  <label for="bidang_edit">Bidang Usaha (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="jabatan_edit" placeholder="Aa" name="jabatan_2" required>
                  <label for="jabatan_edit">Jabatan (wajib)</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="divisi_edit" placeholder="Aa" name="divisi_2" required>
                  <label for="divisi_edit">Divisi</label>
                </div>
                <div class="form-group form-floating">
                  <textarea class="form-control" id="deskripsi_edit" placeholder="Aa" name="deskripsi_2" style="height: 80px"></textarea>
                  <label for="deskripsi_edit">Deskripsi Pekerjaan</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="lokasi_edit" placeholder="Aa" name="lokasi_2">
                  <label for="lokasi_edit">Lokasi</label>
                </div>
                <div class="form-group form-floating">
                  <input type="number" class="form-control" id="telp_edit" placeholder="Aa" name="telp_2">
                  <label for="telp_edit">Nomor Telepon Kerja</label>
                </div>
                <div class="form-group form-floating">
                  <input type="email" class="form-control" id="email_edit" placeholder="Aa" name="email_2" required>
                  <label for="email_edit">Email Kerja (Wajib)</label>
                </div>
                <div class="form-row">
                  <div class="col-12"><p class="tx-poppins tx-medium">Tahun Masuk</p></div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="bulan_msu_edit" name="bulan_msu_2" aria-label="Floating label select example">
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
                      <label for="bulan_msu_edit">Bulan Masuk</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="tahun_msu_edit" name="tahun_msu_2" aria-label="Floating label select example" required>
                        <option value="" selected>Pilih tahun</option>
                        <option value="2022">2022</option>
                      </select>
                      <label for="tahun_msu_edit">Tahun Masuk (Wajib)</label>
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
                <div class="form-row">
                  <div class="col-12"><p class="tx-poppins tx-medium">Tahun Selesai</p></div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="bulan_sls_edit" name="bulan_sls_2" aria-label="Floating label select example">
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
                      <label for="bulan_sls_edit">Bulan Selesai</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group form-floating">
                      <select class="form-select" id="tahun_sls_edit" name="tahun_sls_2" aria-label="Floating label select example">
                        <option value="" selected>Pilih tahun</option>
                        <option value="2022">2022</option>
                      </select>
                      <label for="tahun_sls_edit">Tahun Selesai</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade effect-scale" id="pekerjaan-delete" tabindex="-1" role="dialog" aria-labelledby="pekerjaan-delete" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="tx-poppins tx-medium">Hapus Pekerjaan</h5>
            <p class="mg-b-0">Apakah Anda yakin ingin menghapus pekerjaan ini?</p>
          </div>
          <form>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger tx-poppins tx-medium">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- <div class="modal fade effect-scale" id="file-upload" tabindex="-1" role="dialog" aria-labelledby="file-upload" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Pekerjaan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" role="tab" aria-controls="office" aria-selected="false">office</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-its-3 tx-poppins tx-medium" id="btn">Simpan</button>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
              <form>
                <div class="modal-body">
                  <p class="tx-poppins tx-medium">Tambah Instansi/Perusahaan</p>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="instansi_tambah" placeholder="Aa" name="instansi_1" required>
                    <label for="instansi_tambah">Instansi/Perusahaan (Wajib)</label>
                  </div>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="alamat_tambah" placeholder="Aa" name="alamat_1">
                    <label for="alamat_tambah">Alamat</label>
                  </div>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="telp_tambah" placeholder="Aa" name="telp_1">
                    <label for="telp_tambah">No. Telepom</label>
                  </div>
                  <div class="form-group form-floating">
                    <input type="text" class="form-control" id="email_tambah" placeholder="Aa" name="email_1">
                    <label for="email_tambah">Email</label>
                  </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                  <button type="submit" class="btn btn-its-3 tx-poppins tx-medium" onclick="homebtn()">Tambahkan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="modal fade effect-scale" id="file-upload" tabindex="-1" role="dialog" aria-labelledby="file-upload" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Tambah Pekerjaan</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" role="tab" aria-controls="office" aria-selected="false">office</a>
              </li>
            </ul>
          </div>
          <div class="modal-body pd-x-0">
            <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: scroll;">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form>
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
                      <input type="text" class="form-control" id="bidang_edit" placeholder="Aa" name="bidang_2" required>
                      <label for="bidang_edit">Bidang Usaha (wajib)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="jabatan_edit" placeholder="Aa" name="jabatan_2" required>
                      <label for="jabatan_edit">Jabatan (wajib)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="divisi_edit" placeholder="Aa" name="divisi_2" required>
                      <label for="divisi_edit">Divisi</label>
                    </div>
                    <div class="form-group form-floating">
                      <textarea class="form-control" id="deskripsi_edit" placeholder="Aa" name="deskripsi_2" style="height: 80px"></textarea>
                      <label for="deskripsi_edit">Deskripsi Pekerjaan</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="lokasi_edit" placeholder="Aa" name="lokasi_2">
                      <label for="lokasi_edit">Lokasi</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="number" class="form-control" id="telp_edit" placeholder="Aa" name="telp_2">
                      <label for="telp_edit">Nomor Telepon Kerja</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="email" class="form-control" id="email_edit" placeholder="Aa" name="email_2" required>
                      <label for="email_edit">Email Kerja (Wajib)</label>
                    </div>
                    <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-its-3 tx-poppins tx-medium mg-l-10" id="btn">Simpan</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                  <form>
                    <p class="tx-poppins tx-medium">Tambah Instansi/Perusahaan</p>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="instansi_tambah" placeholder="Aa" name="instansi_1" required>
                      <label for="instansi_tambah">Instansi/Perusahaan (Wajib)</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="alamat_tambah" placeholder="Aa" name="alamat_1">
                      <label for="alamat_tambah">Alamat</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="telp_tambah" placeholder="Aa" name="telp_1">
                      <label for="telp_tambah">No. Telepom</label>
                    </div>
                    <div class="form-group form-floating">
                      <input type="text" class="form-control" id="email_tambah" placeholder="Aa" name="email_1">
                      <label for="email_tambah">Email</label>
                    </div>
                    <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                      <button type="submit" class="btn btn-its-3 tx-poppins tx-medium mg-l-10" onclick="homebtn()">Tambahkan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
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
    <script>
      $('#instansi')
        .select2()
        .on('select2:open', () => {
          $(".select2-results:not(:has(a))").append('<a href="#" class="tx-poppins tx-medium d-flex align-items-center select-office-close" style="padding: 6px 10px 15px 10px; height: 100%;display: inline-table; z-index: 1051 !important;" onclick="officebtn()"><ion-icon name="add" class="tx-18 mg-r-5"></ion-icon>Tambahkan secara manual</a>');
        }
      )
    </script>

<script>
      function officebtn(){
        $('.select2-container').hide()
        $('[href="#office"]').tab('show');
      }
      function homebtn(){
        // $('.select2-container').show()
        $('#instansi')
        .select2()
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
          $old_tab.animate({"right":"-100%"}, 200, function () {
            $old_tab.css("right", 0).removeAttr("style");
          });
        }
        else {
          $old_tab.css('position', 'relative').css("left", "0").show();
          $old_tab.animate({"left":"-100%"}, 200, function () {
            $old_tab.css("left", 0).removeAttr("style");
          });
        }
      });

      $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $new_tab = $($(e.target).attr("href"));
        var $old_tab = $($(e.relatedTarget).attr("href"));

        if($new_tab.index() > $old_tab.index()){
          $new_tab.css('position', 'relative').css("right", "-2500px");
          $new_tab.animate({"right":"0"}, 200);
        }
        else {
          $new_tab.css('position', 'relative').css("left", "-2500px");
          $new_tab.animate({"left":"0"}, 200);
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
    <script>
      var $example = $(".select-office").select2();

      $(".select-office-close").on("click", function () {
          $example.select2("close");
      });
    </script>

  </body>
</html>
