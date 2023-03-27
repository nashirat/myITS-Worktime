<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php"?>
</head>

<?php include "../partial/navbar.php"?>
<?php include "../partial/backtotop.php"?>

<!-- DO NOT CHANGE -->

<body class="mn-ht-100v d-flex flex-column">

  <?php include "../partial/loading.php"?>

  <div class="content pd-0 mg-l-0" style="position: relative">
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start "
      style="min-height: calc(100vh - 80px); overflow: visible">
      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big">
        <?php include "../partial/sidebar.php"?>
        <div class="flex-1 mg-0 pd-x-10 mg-xl-r-50  pd-lg-x-0 pd-xl-x-0 bg-0 pos-relative"
          style="background: none; position: relative;" id="content">
          <div class="d-flex mg-t-90 wd-100p justify-content-between align-items-start pos-relative"
            style="position: relative;">

            <div id="content-canvas" class="row row-xs bg-0 mg-0 mg-lg-x-10 pd-0 flex-1"
              style="min-height: calc(100vh - 115px);">
              <div class="min-height-fix write-content-here wd-100p">
                <!-- DO NOT CHANGE END -->

                <!-- Content -->
                <!-- Write Content Starts Here -->

                <div class="wd-100p pd-l-5" style="margin-bottom: 38px;">
                  <div
                    class="d-flex flex-wrap wd-100p align-items-center justify-content-between content-div tx-color-02 pd-t-3"
                    id="overview">
                    <div class="mg-r-15">
                      <div>
                        <div class="tx-poppins tx-medium tx-30 tx-md-36 tx-color-01 mg-b-4" style="line-height: 1.2;">
                          Auditorium Research Center</div>
                      </div>
                      <div class="tx-18 tx-color-01 pd-x-2">Research Center ITS</div>
                    </div>

                    <!-- <div class="d-flex flex-wrap mg-t-15">
                      <div class="pd-y-0 pd-lg-y-8 pd-l-0 pd-lg-l-8 pd-t-8 pd-lg-t-0 pd-r-8">
                        <button class="btn btn-secondary pd-y-10 pd-x-20 tx-medium trans-all "
                          style="border-radius: 12px;">
                          <div class="tx-poppins tx-14">Merger</div>
                        </button>
                      </div>
                      <div class=" pd-y-0 pd-y-lg-8 pd-l-0 pd-l-lg-8 pd-t-8 pd-t-lg-0 pd-r-8">
                        <button class="btn btn-secondary pd-y-10 pd-x-20 tx-medium trans-all "
                          style="border-radius: 12px;">
                          <div class="tx-poppins tx-14">Ekspansi</div>
                        </button>
                      </div>
                      <div class=" pd-y-0 pd-y-lg-8 pd-l-0 pd-l-lg-8 pd-t-8 pd-t-lg-0 pd-r-8 save-btn"
                        style="display: none;">
                        <button class="btn btn-success pd-y-10 pd-x-20 tx-medium trans-all"
                          onClick="window.location.reload();" style="border-radius: 12px;">
                          <div class="tx-poppins tx-14">Simpan</div>
                        </button>
                      </div>
                      <div class=" pd-y-0 pd-y-lg-8 pd-l-0 pd-l-lg-8 pd-t-8 pd-t-lg-0 pd-r-8 edit-btn">
                        <button class="btn btn-primary pd-y-10 pd-x-20 tx-medium trans-all "
                          style="border-radius: 12px;">
                          <div class="tx-poppins tx-14">Edit</div>
                        </button>
                      </div>
                      <div class=" pd-y-0 pd-y-lg-8 pd-l-0 pd-l-lg-8 pd-t-8 pd-t-lg-0 pd-r-8 hapus-btn">
                        <button class="btn btn-danger pd-y-10 pd-x-20 tx-medium trans-all " style="border-radius: 12px;"
                          data-toggle="modal" data-target="#hapus-modal">
                          <div class="tx-poppins tx-14">Hapus</div>
                        </button>
                      </div>
                    </div> -->

                  </div>

                </div>

                <div class="wd-100p d-flex justify-content-between">
                  <div class="card static mg-0 mg-b-10 rounded-its-10 bd-0 pd-0 new-shadow">
                    <div class="nav nav-tabs d-inline-flex pd-8 mg-0 rounded-its-10 bd-0" role="tablist"
                      style="border: none !important;">
                      <a href="#first" role="tab" data-toggle="tab">
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-btn pill-active trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Detail</div>
                        </div>
                      </a>
                      <a href="#second" role="tab" data-toggle="tab">
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-btn trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Reservasi</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="show-switch card static mg-0 mg-b-10 rounded-its-10 bd-0 pd-0 new-shadow">
                    <div class="nav nav-tabs d-inline-flex pd-8 mg-0 rounded-its-10 bd-0" role="tablist"
                      style="border: none !important;">
                      <a>
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-btn trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Hari</div>
                        </div>
                      </a>
                      <a>
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-active trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Minggu</div>
                        </div>
                      </a>
                      <a>
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-btn trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Bulan</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="tab-content">
                  <div class="tab-pane fade active in show" id="first" style="margin-top: -4px;">
                    <div class="wd-100p rounded-its-10 pd-b-10 card static bd-0">
                      <div
                        class="d-flex justify-content-between align-items-center wd-100p pd-0 pd-t-20 pd-b-0 pd-x-20 pd-r-25 mg-0">
                        <div class="tx-16 tx-poppins tx-medium tx-color-01">Informasi Area</div>
                        <!-- <div class="tx-16 tx-poppins tx-medium tx-color-01">Edit</div> -->

                      </div>
                      <div class="wd-100p row row-xs pd-0 mg-0 pd-l-2 pd-r-15">
                        <div class="col-12 col-md-6 rounded-its-10 pd-0">
                          <div class="wd-100p row row-xs pd-l-5 pd-t-10 mg-0">
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Nama area</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="Auditorium Research Center ITS"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <!-- <div class=" ht-100p mg-l-8">Auditorium Research Center</div> -->
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Kode area</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="RC-11" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Nama gedung</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="Research Center ITS"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Jenis area</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="Auditorium"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Unit organisasi</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="Research Center ITS"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Pengelola</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="Ali Mangsur"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Lokasi</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="-7.27362198124123123, 112.2312312312312"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>

                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 rounded-its-10 pd-0">
                          <div class="wd-100p row row-xs pd-l-5 pd-t-10 mg-0">
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Alamat</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <textarea type="text" rows="2"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Jl. Teknik Kimia, Sukolilo, Keputih, Kampus Keputih Institut Teknologi Sepuluh Nopember</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Kapasitas</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="200 Orang" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>

                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Luas (m)</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <input type="text" value="150" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>

                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>
                            <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                              <div class="col-12 col-lg-3 pd-y-10">
                                <div class=" ht-100p tx-color-02">Deskripsi</div>
                              </div>
                              <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color">
                                <textarea type="text" rows="8"
                                  class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="d-flex wd-100p pd-0 pd-t-20 pd-b-10 pd-x-20 mg-0 mg-b-15">
                        <div class="tx-16  tx-medium tx-color-01">Foto Area</div>
                      </div>
                      <div class="wd-100p row row-xs mg-0 pd-x-20 mg-b-15">
                        <div class="col-12 col-md-6 col-lg-3 mg-0 mg-t-15 mg-lg-t-0 pd-0">
                          <div class="wd-100p rounded-its-10 ht-200 d-flex justify-content-center align-items-center"
                            style="background-image: url(../../assets/img/img3.png); background-size:cover;">
                            <div
                              class="wd-100p ht-100p justify-content-center align-items-center edit-pic trans-all d-none rounded-its-10"
                              style="background-color: rgba(0,0,0,0.2);">
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="image" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                              </div>
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 del-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="close" class="tx-28"></ion-icon>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mg-0 mg-t-15 mg-lg-t-0 pd-0">
                          <div class="wd-100p rounded-its-10 ht-200 d-flex justify-content-center align-items-center"
                            style="background-image: url(../../assets/img/img1.png); background-size:cover;">
                            <div
                              class="wd-100p ht-100p rounded-its-10 justify-content-center align-items-center edit-pic trans-all d-none"
                              style="background-color: rgba(0,0,0,0.2);">
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="image" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                              </div>
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 del-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="close" class="tx-28"></ion-icon>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mg-0 mg-t-15 mg-lg-t-0 pd-0">
                          <div class="wd-100p rounded-its-10 ht-200 d-flex justify-content-center align-items-center"
                            style="background-image: url(../../assets/img/img2.png); background-size:cover;">
                            <div
                              class="wd-100p ht-100p justify-content-center align-items-center edit-pic trans-all d-none rounded-its-10"
                              style="background-color: rgba(0,0,0,0.2);">
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="image" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                              </div>
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 del-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="close" class="tx-28"></ion-icon>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mg-0 mg-t-15 mg-lg-t-0 pd-0">
                          <div class="wd-100p rounded-its-10 ht-200 d-flex justify-content-center align-items-center"
                            style="background-image: url(../../assets/img/img4.png); background-size:cover;">
                            <div
                              class="wd-100p ht-100p justify-content-center align-items-center edit-pic trans-all d-none rounded-its-10"
                              style="background-color: rgba(0,0,0,0.2);">
                              <div
                                class=" btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="image" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                              </div>
                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 del-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="close" class="tx-28"></ion-icon>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mg-0 mg-t-10 mg-t-lg-0 pd-0 mg-t-10 d-none add-pic">
                          <div class="wd-100p rounded-its-10 ht-200 d-flex justify-content-center align-items-center">
                            <div
                              class="rounded-its-10 wd-100p ht-100p justify-content-center align-items-center edit-pic trans-all d-flex"
                              style="background-color: rgba(0,0,0,0.2);">

                              <div
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="add" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="wd-100p rounded-its-10 pd-b-10 mg-y-30 card static bd-0">
                      <div class="d-flex wd-100p pd-0 pd-t-20 pd-b-10 pd-x-20 mg-0">
                        <div class="tx-16 tx-poppins tx-medium tx-color-01">Fasilitas Area</div>
                      </div>
                      <div class="rounded-its-10 d-flex wd-100p mg-l-4 pd-0 pd-t-5 pd-x-20 mg-b-10 table-container">
                        <table id="fasilareatable" class="table table-hover" style="width:100%;">
                          <thead>
                            <tr>
                              <th class="tx-12 tx-color-03 bd-none-i pos-relative wd-5p" style="cursor: pointer;">
                                <div class="pd-l-5 trans-all">No</div>
                              </th>
                              <th class="tx-12 tx-color-03 bd-none-i pos-relative wd-30p" style="cursor: pointer;">
                                <div class="pd-l-9 trans-all">Nama Barang</div>
                              </th>
                              <th class="tx-12 tx-color-03 bd-none-i pos-relative wd-15p" style="cursor: pointer;">
                                <div class="pd-l-9 trans-all">Tipe Barang</div>
                              </th>
                              <th class="tx-12 tx-color-03 bd-none-i pos-relative wd-15p" style="cursor: pointer;">
                                <div class="pd-l-9 trans-all">Jumlah</div>
                              </th>
                              <th class="tx-12 tx-color-03 bd-none-i pos-relative" style="cursor: pointer;">
                                <div class="pd-l-9 trans-all">Keterangan</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr class="">
                              <td class="bd-none-i pos-relative">
                                <div class="pd-y-4 pd-x-10">
                                </div>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Kursi VIP</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>

                              </td>
                              <td class=" bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Furniture</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>16</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                              <td class=" bd-none-i pos-relative">
                                <input type="text" value="-" class="wd-100p pd-y-4 pd-x-10 tx-color-01"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled></input>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                            </tr>
                            <tr class="">
                              <td class="bd-none-i pos-relative">
                                <div class="pd-y-4 pd-x-10">
                                </div>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Microphone Wireless</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>

                              </td>
                              <td class=" bd-none-i pos-relative">
                                <textarea type="text" class=" wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important; resize: none; overflow: hidden;"
                                  disabled>Elektronik</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>8</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                              <td class=" bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>-</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                            </tr>
                            <tr class="">
                              <td class="bd-none-i pos-relative">
                                <div class="pd-y-4 pd-x-10">
                                </div>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" value="Fire Extinguisher"
                                  class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Fire Extinguisher</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>

                              </td>
                              <td class=" bd-none-i pos-relative">
                                <textarea type="text" class=" wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important; overflow: hidden;"
                                  disabled>Keamanan</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>6</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                              <td class="bd-none-i pos-relative">
                                <textarea type="text" value="Terletak di ruang kebersihan" id="testtext"
                                  class="wd-100p pd-y-4 pd-x-10 tx-color-01 table-textarea"
                                  style="border-radius: 10px; background-color: none !important; border: none !important;"
                                  disabled>Terletak di ruang kebersihan</textarea>
                                <button
                                  class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn"
                                  style="top: 8px;">
                                  <ion-icon name="close" class="tx-20"></ion-icon>
                                </button>
                              </td>
                            </tr>

                          </tbody>
                        </table>

                      </div>

                    </div>

                    <div class="wd-100p pd-t-20 pd-b-10 pd-x-20 card static bd-0 add-fas d-none mg-b-30">
                      <div class="tx-poppins tx-14 tx-medium tx-color-01 mg-b-5">Tambah Fasilitas</div>
                      <div class="row row-xs mg-0 pd-0 wd-100p">
                        <div class="col-12 col-md-6 col-lg-2 mg-t-10 mg-t-lg-0">
                          <div class="pd-y-10 rounded-its-10 wd-100p input-bg-color">
                            <input type="text" value="" placeholder="Nama Barang" class="wd-100p mg-l-8 tx-color-01"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 mg-t-10 mg-t-lg-0">
                          <div class="pd-y-10 rounded-its-10 wd-100p input-bg-color">
                            <input type="text" value="" placeholder="Tipe Barang" class="wd-100p mg-l-8 tx-color-01"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 mg-t-10 mg-t-lg-0">
                          <div class="pd-y-10 rounded-its-10 wd-100p input-bg-color">
                            <input type="text" value="" placeholder="Jumlah" class="wd-100p mg-l-8 tx-color-01"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 mg-t-10 mg-t-lg-0">
                          <div class="pd-y-10 rounded-its-10 wd-100p input-bg-color">
                            <input type="text" value="" placeholder="Keterangan" class="wd-100p mg-l-8 tx-color-01"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                          </div>
                        </div>
                        <div class="col-4 col-md-2 col-lg-1 mg-0 pd-y-2 mg-t-10 mg-t-lg-0 mg-b-10">
                          <div
                            class="btn btn-primary rounded-its-10 tx-poppins tx-12 wd-100p ht-100p text-align-center vertical-align-middle d-flex align-items-center justify-content-center">
                            Tambah
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="wd-100p tab-pane fade card static bd-0 pd-x-20" id="second"
                    style="margin-top: -14px; padding-bottom: 0px !important;">
                    <div class="wd-100p mg-b-30 reserve-container table-container mg-t-10 rounded-its-10"
                      style="overflow-x: auto; overflow-y: hidden !important;">
                      <div class="">
                        <div class="d-flex justify-content-between wd-100p ht-50 rounded-its-6 mg-t-20" style="">
                          <div id="bulanini" class="tx-poppins tx-26 tx-medium">Maret 2023</div>
                          <div class="d-flex">
                            <div id="less-time" class="btn btn-text-dark tx-poppins tx-medium tx-20 rounded-its-6">
                              <</div> <div id="next-time"
                                class="btn btn-text-dark tx-poppins tx-medium tx-20 rounded-its-6">>
                            </div>
                          </div>
                        </div>
                        <?php include "./days.php"?>
                        <div class="d-flex">
                          <?php include "./time.php"?>
                          <?php include "./reserve.php"?>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>



                <!-- Write content end here -->
              </div>
            </div>




          </div>







        </div><!-- row -->
      </div>


    </div>
    <!-- <div id="popup" class="bg-color rounded-its-10 pd-10 pd-x-15 new-shadow-btn tx-poppins tx-medium tx-12">Tambah Reservasi</div> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 pd-x-20">
            <div class="tx-poppins tx-medium tx-24 tx-color-01" id="exampleModalLongTitle">Tambah Kegiatan</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bd-0 pd-y-0 pd-x-20">
            <div class="d-flex flex-column wd-100p">
              <div class="d-flex wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Seminar</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Kelas</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Rapat</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Luar</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Lain</div>

              </div>
              <div class="wd-100p mg-b-10 rounded-its-6 pd-0 mg-0 pd-x-4">
                <div class="pd-y-6">
                  <div class="tx-color-01 tx-14 tx-roboto">Kegiatan</div>
                </div>
                <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                  style="border-radius: 6px !important;">
                  <input type="text" value="" placeholder="Nama Kegiatan" id="namakegiatan"
                    class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                    style="border-radius: 10px; background-color: none !important; border: none !important; "></input>

                </div>
              </div>
              <div class="row row-xs mg-b-0 pd-x-4">
                <div class="col-4">
                  <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                    <div class="col-12 pd-y-6">
                      <div class="tx-color-01 tx-14" style="margin-left: -4px;">Waktu Mulai</div>
                    </div>
                    <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                      <input type="text" min="06:00" max="20:00" step="600" id="waktumulai" name="waktumulai"
                        placeholder="JJ:MM" onfocus="(this.type='time')" onblur="(this.type='text')"
                        class="mn-wd-100p tx-14 mg-l-4 tx-color-01 tx-medium"
                        style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                    <div class="col-12 pd-y-6">
                      <div class="tx-color-01 tx-14" style="margin-left: -4px;">Waktu Selesai</div>
                    </div>
                    <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                      <input type="text" min="06:00" max="20:00" step="600" id="waktuselesai" name="waktuselesai"
                        placeholder="JJ:MM" onfocus="(this.type='time')" onblur="(this.type='text')"
                        class="mn-wd-100p tx-14 mg-l-4 tx-color-01 tx-medium"
                        style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                      <button
                        class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                        <ion-icon name="close" class="tx-20"></ion-icon>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                    <div class="col-12 pd-y-6">
                      <div class="tx-color-05 tx-14">Durasi</div>
                    </div>
                    <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                      <input type="text" id="durasi" name="durasi" placeholder="0 Jam 0 Menit"
                        class="mn-wd-100p tx-14 mg-l-4 tx-color-01 tx-medium"
                        style="border-radius: 10px; background-color: none !important; border: none !important;"
                        readonly></input>
                      <button
                        class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                        <ion-icon name="close" class="tx-20"></ion-icon>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tx-color-01 tx-14 pd-x-5 d-inline-block text-break"" style="margin-top: -1px; ">Kegiatan akan dilaksanakan pada <span
                  id="day" class="d-inline-block text-break"></span> <span class="d-none" id="pukul"> pukul <span id="st"></span> sampai <span
                    id="ed"></span></span><span class="d-none" id="selama"></span>
              </div>
            </div>
            <div class="modal-footer bd-0 pd-x-4">
              <button type="button" class="btn btn-text-dark tx-medium rounded-its-6"
                data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary tx-medium rounded-its-6" id="modal-save">Tambah</button>
            </div>
          </div>
        </div>
      </div>

      <!-- container -->
    </div>

    <div class="modal fade" id="cardEditModal" tabindex="-1" role="dialog"
      aria-labelledby="cardEditModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bd-0 pd-x-20">
            <div class="tx-poppins tx-medium tx-24 tx-color-01" id="exampleModalLongTitle">Detail Kegiatan</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bd-0 pd-y-0 pd-x-20">
            <div class="d-flex flex-column wd-100p">
              <div class="d-flex wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Seminar</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Kelas</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Rapat</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Luar</div>
                <div class="btn btn-custom-select pd-x-15 pd-y-7 rounded-its-6 ctgr mg-r-6">Lain</div>

              </div>
              <div class="wd-100p mg-b-10 rounded-its-6 pd-0 mg-0 pd-x-4">
                <div class="pd-y-6">
                  <div class="tx-color-01 tx-14 tx-roboto">Kegiatan</div>
                </div>
                <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                  style="border-radius: 6px !important;">
                  <input type="text" value="" placeholder="Nama Kegiatan" id="namakegiatanDetail"
                    class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                    style="border-radius: 10px; background-color: none !important; border: none !important; "></input>

                </div>
              </div>
              <div class="row row-xs mg-b-0 pd-x-4">
                <div class="col-4">
                  <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                    <div class="col-12 pd-y-6">
                      <div class="tx-color-01 tx-14" style="margin-left: -4px;">Waktu Mulai</div>
                    </div>
                    <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                      <input type="text" min="06:00" max="20:00" step="600" id="waktumulaidetail" name="waktumulaidetail"
                        placeholder="JJ:MM" onfocus="(this.type='time')" onblur="(this.type='text')"
                        class="mn-wd-100p tx-14 mg-l-4 tx-color-01 tx-medium"
                        style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                    <div class="col-12 pd-y-6">
                      <div class="tx-color-01 tx-14" style="margin-left: -4px;">Waktu Selesai</div>
                    </div>
                    <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                      <input type="text" min="06:00" max="20:00" step="600" id="waktuselesaidetail" name="waktuselesaidetail"
                        placeholder="JJ:MM" onfocus="(this.type='time')" onblur="(this.type='text')"
                        class="mn-wd-100p tx-14 mg-l-4 tx-color-01 tx-medium"
                        style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                      <button
                        class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                        <ion-icon name="close" class="tx-20"></ion-icon>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                    <div class="col-12 pd-y-6">
                      <div class="tx-color-05 tx-14">Durasi</div>
                    </div>
                    <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                      <input type="text" id="durasi" name="durasi" placeholder="0 Jam 0 Menit"
                        class="mn-wd-100p tx-14 mg-l-4 tx-color-01 tx-medium"
                        style="border-radius: 10px; background-color: none !important; border: none !important;"
                        readonly></input>
                      <button
                        class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                        <ion-icon name="close" class="tx-20"></ion-icon>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="tx-color-01 tx-14 pd-x-5 d-inline-block text-break"" style="margin-top: -1px; ">Kegiatan akan dilaksanakan pada <span
                  id="day" class="d-inline-block text-break"></span> <span class="d-none" id="pukul"> pukul <span id="st"></span> sampai <span
                    id="ed"></span></span><span class="d-none" id="selama"></span>
              </div> -->
            </div>
            <div class="modal-footer bd-0 pd-x-4">
              <button type="button" class="btn btn-text-dark tx-medium rounded-its-6"
                data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary tx-medium rounded-its-6" id="modal-save">Tambah</button>
            </div>
          </div>
        </div>
      </div>

      <!-- container -->
    </div>
    <?php include "../partial/footer.php" ?>
    <?php include "../partial/script.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.2/sorting/custom-data-source/dom-text.js"></script>

    <script>
      $(function () {
        'use strict'
        $('.ctgr').click(function () {
          $('.ctgr').removeClass("choosen");
          $(this).addClass("choosen");
        })

        function getDur() {
          if (document.getElementById('waktuselesai').value && document.getElementById('waktumulai').value) {
            let tmStart = new Date(new Date().toDateString("yyyy-MM-dd") + " " + document.getElementById(
                'waktumulai')
              .value);
            let tmEnd = new Date(new Date().toDateString("yyyy-MM-dd") + " " + document.getElementById(
                'waktuselesai')
              .value);
            let diff = ((new Date(tmEnd) - new Date(tmStart)) / 60 / 1000);
            let hr = Math.floor(diff / 60);
            let mn = diff % 60;
            $('#durasi').val(hr + " jam " + mn + " menit");
            $('#st').text(document.getElementById('waktumulai').value);
            $('#ed').text(document.getElementById('waktuselesai').value);
            $('#selama').text(" selama " + hr + " jam " + mn + " menit");
            $('#pukul').removeClass("d-none").addClass("d-inline-block");
            $('#selama').removeClass("d-none").addClass("d-inline-block");
            return
          } else {
            // return console.log("wa");
          }
        }

        $('#waktuselesai').blur($.debounce(1500, function (e) {
          getDur();
        }))

        $('#waktumulai').blur($.debounce(1500, function (e) {
          getDur();
        }))
      })
    </script>

    <script>
      $(function () {
        'use strict'
        $('.show-switch').hide();
        if ($('.reserve-container').is(':visible')) {
          $('.show-switch').fadeIn(600, 'swing');
        } else {
          $('.show-switch').fadeOut(200);
        }
        $('a[href$="#second"]').click(function () {
          $('.show-switch').fadeIn(600, 'swing');
        })
        $('a[href$="#first"]').click(function () {
          $('.show-switch').fadeOut(200);
        })
      })
    </script>

    <script>
      $(function () {
        'use strict'



        var weekday = new Array("Minggu", "Senin", "Selasa", "Rabu",
          "Kamis", "Jumat", "Sabtu");
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
          'Oktober', 'November', 'Desember'
        ]
        let hariIni = new Date()
        let counter = 0;

        function generateDatesWeek(n) {
          $('.date').children().remove();
          let curr = new Date(new Date().setDate(new Date().getDate() + (7 * (n))));
          let first = curr.getDate() - curr.getDay();
          $('.date').each(function (ind) {
            $('.date:nth-child(' + (ind + 2) + ')').append('<div class="tx-poppins" id="day-' + ind + '">' +
              weekday[ind] + " " + new Date(curr.getFullYear(), curr.getMonth(), first + ind)
              .getDate() +
              '</div>')
            
          });
          $('.con').each(function (indCon) {
            $(this).attr("data-hari",  weekday[indCon] + " " + new Date(curr.getFullYear(), curr.getMonth(), first + indCon).getDate() + " " + months[curr.getMonth()].trim())
          });
          $('#day-' + curr.getDay()).removeClass('tx-light').addClass('tx-medium');
          $('#bulanini').text(months[curr.getMonth()] + " " + curr.getFullYear());
          return
        }



        generateDatesWeek(counter);

        $('#next-time').click(function (e) {
          counter++;
          generateDatesWeek(counter)
        })
        $('#less-time').click(function (e) {
          counter--;
          generateDatesWeek(counter)
        })


        $('.date-item').click(function (e) {
          $('#day').html($(this).attr("data-hari"))
          console.log('day changed again');
          if (e.target === e.currentTarget || e.target.className === 'date-item-line') {
            $('#exampleModalCenter').modal('toggle');
          } else if ($(e.target).hasClass('schedule-card') || $(e.target).hasClass('schedule-card-ctgr') || $(e
              .target).hasClass('schedule-card-title') || $(e.target).hasClass('schedule-card-time')) {
            console.log($(e.target).closest("div.schedule-card-con").attr("data-passed").slice(0, ));
            $('#cardEditModal').modal('toggle');
          } else {
            console.log(e.target.className)
          }
        })
      })
    </script>



    <script>
      $(function () {
        function showTimeCard(title, tmStart, tmEnd, date, ctgr) {

          let tmStartDone = new Date().toDateString("yyyy-MM-dd") + " " + tmStart;
          let tmEndDone = new Date().toDateString("yyyy-MM-dd") + " " + tmEnd;
          let top = ((new Date(tmStartDone) - new Date((new Date().toDateString("yyyy-MM-dd") + " " + '06:00'))) /
            60 / 1000) * 1.5;
          let diff = ((new Date(tmEndDone) - new Date(tmStartDone)) / 60 / 1000);
          let height = ((new Date(tmEndDone) - new Date(tmStartDone)) / 60 / 1000) * 1.5;

          function cardGen(clamp, dispCt, dispTm) {
            let card = $(
              '<div class="wd-100p d-flex rounded-its-10 pos-absolute pd-y-6 pd-x-6 schedule-card-con" data-passed="'+ ctgr + " " + title + " " + tmStart + " " + tmEnd + " " +'" style="z-index: 100 !important; height:' +
              height + 'px ; top:' + top +
              'px;"><div class="' + ctgr +
              ' wd-100p ht-100p d-flex pd-10 flex-column align-items-start schedule-card" style="padding-left:12px; padding-right: 12px; border-radius: 12px;"><div class="' +
              dispCt + ' tx-roboto tx-12 schedule-card-ctgr" style="color: white;">' +
              ctgr +
              '</div><div class="tx-poppins tx-medium mg-b-0 wd-100p schedule-card-title" style="color: white; display: -webkit-box; -webkit-line-clamp: ' +
              clamp +
              '; -webkit-box-orient: vertical; overflow: hidden;  line-height: 18px; margin-top: -3px;">' +
              title +
              '</div><div class="' + dispTm + ' tx-poppins mg-t-auto schedule-card-time" style="color: white;">' + tmStart + ' - ' +
              tmEnd +
              '</div></div></div>'
            ).hide();
            return card;
          };

          switch (true) {
            case (diff <= 40):
              card = cardGen(1, "d-none", "d-none");
              break;
            case (diff <= 50):
              card = cardGen(1, "d-none", "");
              break;
            case (diff <= 60):
              card = cardGen(2, "d-none", "");
              break;
            case (diff <= 80):
              card = cardGen(2, "", "");
              break;
            case (diff <= 100):
              card = cardGen(3, "", "");
              break;
            case (diff <= 120):
              card = cardGen(4, "", "");
              break;
            case (diff > 120):
              card = cardGen("unset", "", "");
              break;
          }
          
          // console.log()
          $('#' + (date.slice(0, date.indexOf(" "))) + "").prepend(card);
          // $('#Minggu 12 Maret').append(card);
          card.fadeIn(300, "swing");
        }

        $('#modal-save').click(function () {

          showTimeCard(
            document.getElementById('namakegiatan').value,
            document.getElementById("waktumulai").value,
            document.getElementById("waktuselesai").value,
            $('#day').text(),
            $('.choosen').text()
          )

          $('#exampleModalCenter').on('hidden.bs.modal', function (e) {
            $('.ctgr').removeClass("choosen");
            $('#pukul').removeClass("d-inline-block").addClass("d-none");
            $('#selama').removeClass("d-inline-block").addClass("d-none");
            $(this)
              .find("input,textarea,select")
              .val('')
              .end()
              .find("input[type=checkbox], input[type=radio]")
              .prop("checked", "")
              .end();
          }).modal('toggle');

        })

       
      })
      
    </script>

    <script>
      $(function () {
        'use strict'
        $('.pick-btn').on("click", function () {
          $(this).children('input.uploadfile')[0].click();
        })
      })
    </script>

    <script>
      $(function () {
        'use strict'
        $('.nav-link-its-desktop[href="../kelolaruang/daftararea.php"]').addClass("active");
      })
    </script>

    <script>
      $(function () {
        'use strict'

        const txHeight = 24;
        const tx = $('textarea');

        tx.each(function () {
          if (this.value == '') {
            $(this).css("height", 0);
            $(this).css("height", txHeight);
          } else {
            $(this).css("height", 0);
            $(this).css("height", (this.scrollHeight - 5));
          }
          $(this).on('input', function () {
            $(this).css("height", 0);
            $(this).css("height", (this.scrollHeight - 5));
          })
        })
      })
    </script>

    <script>
      $(function () {
        'use strict'

        $('.edit-btn').click(function () {
          // $('.del-btn').removeClass("d-none").addClass("d-flex");
          $('.edit-pic').removeClass("d-none").addClass("d-flex");
          $('.add-fas').removeClass("d-none");
          $('.add-pic').removeClass("d-none");
          $('textarea').attr("disabled", false);
          $('input[type="text"]').attr("disabled", false);
          $('textarea').parent().toggleClass('inside-border');
          $('input[type="text"]').parent().toggleClass('inside-border');
          $('.edit-btn').hide()
          $('.save-btn').show();
        })

        $('.save-btn').click(function () {
          // save & submit here
          // $('.del-btn').removeClass("d-flex").addClass("d-none");
          $('.edit-pic').removeClass("d-flex").addClass("d-none");
          $('.add-fas').addClass("d-none");
          $('.add-pic').removeClass("d-none");
          $('textarea').attr("disabled", true);
          $('input[type="text"]').attr("disabled", true);
          $('textarea').parent().toggleClass('inside-border');
          $('input[type="text"]').parent().toggleClass('inside-border');
          $('.save-btn').hide();
          $('.edit-btn').show();
        })

        $('.del-btn').click(function () {
          $(this).parent().find('input[type="text"]').val("");
          $(this).parent().find('textarea').val("");
        })

      })
    </script>
    <script>
      $(function () {
        'use strict'
        $('.pill-btn').click(function () {
          $('.pill-btn').removeClass('pill-active');
          $(this).addClass('pill-active');
        })
      })
    </script>

    <script>
      $(function () {
        'use strict'

        $('#fasilareatable').DataTable({

          paging: false,
          language: {
            lengthMenu: '<select class="form-select mg-r-10">' +
              '<option value="10">10</option>' +
              '<option value="20">20</option>' +
              '<option value="-1">All</option>' + "</select> <div class=''>data/halaman</div>",
            zeroRecords: '<div class="wd-100p bd-0 pd-20 tx-14 tx-medium" style="text-align: center;">Tidak ada data.</div>',
            infoEmpty: '<div class="wd-100p bd-0 pd-20 tx-14 tx-medium" style="text-align: center;">Tidak ada data.</div>',
            info: '<div class="pd-l-10 tx-14">Halaman _PAGE_ dari _PAGES_</div>',
            infoFiltered: '(filtered from _MAX_ total records)',
            paginate: {
              'first': '<i class="fas fa-angle-double-left"></i>',
              'last': '<i class="fas fa-angle-double-right"></i>',
              'next': '<i class="fas fa-angle-right"></i>',
              'previous': '<i class="fas fa-angle-left"></i>'
            },
          },
          order: [
            [1, 'asc']
          ],
          columnDefs: [{
              orderable: false,
              targets: 0
            },
            {
              orderDataType: "dom-text",
              targets: [0, 1, 2, 3, 4]
            },
          ],
          responsive: true,
        });

        $('#fasilareatable').DataTable().on('order.dt search.dt', function () {
          let i = 1;
          $('#fasilareatable').DataTable().cells(null, 0, {
            search: 'applied',
            order: 'applied'
          }).every(function (cell) {
            this.data('<div class="pd-y-4 pd-l-10 pd-r-5 mg-l-5">' + i++ + '</div>');
          });
        }).draw();

        $('#fasilareatable_filter').css("display", "none");
        $('#fasilareatable_info').css("display", "none");

        $("#search-key").on("keyup", function () {
          $('#fasilareatable').DataTable().search($("#search-key").val()).draw();
        })

        $('#custom-search').on('keyup click', function () {
          $('#fasilareatable').DataTable().search($("#search-key").val()).draw();
        })
      });
    </script>

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