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

<?php include "../partial/navbar.php"?>
<?php include "../partial/backtotop.php"?>

<!-- DO NOT CHANGE -->

<body class="mn-ht-100v d-flex flex-column">
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

                    <div class="d-flex flex-wrap mg-t-15">
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
                    </div>

                  </div>

                </div>

                <div class="wd-100p d-flex justify-content-between">
                  <div class="card static mg-0 mg-b-10 rounded-its-10 bd-0 pd-0 new-shadow">
                    <div class="nav nav-tabs d-inline-flex pd-8 mg-0 rounded-its-10 bd-0" role="tablist"
                      style="border: none !important;">
                      <a href="#first" role="tab" data-toggle="tab">
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-btn trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Detail</div>
                        </div>
                      </a>
                      <a href="#second" role="tab" data-toggle="tab">
                        <div class="pd-y-10 pd-x-25 rounded-its-10 pill-btn pill-active trans-all">
                          <div class="tx-poppins tx-14 tx-medium tx-color-01">Reservasi</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="tab-content">
                  <div class="tab-pane fade" id="first">
                    <div class="wd-100p rounded-its-10 pd-b-10 card static bd-0">
                      <div
                        class="d-flex justify-content-between align-items-center wd-100p pd-0 pd-t-20 pd-b-10 pd-x-20 pd-r-25 mg-0">
                        <div class="tx-16 tx-poppins tx-medium tx-color-01">Informasi Area</div>
                        <!-- <div class="tx-16 tx-poppins tx-medium tx-color-01">Edit</div> -->

                      </div>
                      <div class="wd-100p row row-xs pd-0 mg-0 pd-l-15 pd-r-15">
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
                              <button
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="image" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                                <input class="uploadfile" type="file" style="display: none;" />
                              </button>
                             
                              <button
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 del-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="close" class="tx-28"></ion-icon>
                              </button>
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
                              <button
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 pick-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="image" class="tx-26"></ion-icon>
                                <input class="uploadfile" type="file" style="display: none;" />
                              </button>
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
                              <button
                                class="btn btn-icon mg-0 pd-0 rounded-its-10 ht-45 wd-45 del-btn full d-flex justify-content-center align-items-center"
                                style="width: 36px; height: 36px; margin: 5px !important;">
                                <ion-icon name="close" class="tx-28"></ion-icon>
                              </button>
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

                    <div class="wd-100p pd-t-20 pd-b-10 pd-x-20 card static bd-0 add-fas d-none">
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

                  <div class="tab-pane fade mg-b-30 active show" id="second">
                    <div class="wd-100p rounded-its-10 card static bd-0" style="height: 600px;">

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

    <!-- container -->
  </div>
  <?php include "../partial/footer.php" ?>
  <?php include "../partial/script.php" ?>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.13.2/sorting/custom-data-source/dom-text.js"></script>




  <!-- <script>
    $(function () {
      'use strict'
      var element = document.getElementById('grid-snap')
      var x = 0;
      var y = 0

      interact(element)
        .draggable({
          modifiers: [
            interact.modifiers.snap({
              targets: [
                interact.snappers.grid({
                  x: 200,
                  y: 30
                })
              ],
              range: Infinity,
              relativePoints: [{
                x: 0,
                y: 0
              }]
            }),
            interact.modifiers.restrict({
              restriction: element.parentNode,
              elementRect: {
                top: 0,
                left: 0,
                bottom: 1,
                right: 1
              },
              endOnly: true
            })
          ],
          inertia: true
        })
        .on('dragmove', function (event) {
          x += event.dx
          y += event.dy

          // if x & y > parentNode, event.dx & event.dy = x & y;
          // or in other sense, x & y doesnt change from last value;

          event.target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'
        })
    })
  </script> -->

  <script>
    $(function () {
      'use strict'
      $('.nav-link-its-desktop[href="../kelolaruang/daftararea.php"]').addClass("active");
    })
  </script>

  <script>
    $(function() {
      'use strict'
      $('.pick-btn').on("click", function() {
        $(this).children('input.uploadfile')[0].click();
      })
    })
  </script>

  <script>
    $(function () {
      'use strict'

      function showText() {
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
      }
      showText();
      $("a[href='#first']").on('shown.bs.tab', function (e) {
        showText();
      });

    })
  </script>

  <script>
    $(function () {
      'use strict'

      $('.edit-btn').click(function () {
        $('.del-btn').removeClass("d-none").addClass("d-flex");
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
        $('.del-btn').removeClass("d-flex").addClass("d-none");
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
          // {
          //   orderDataType: "dom-text",
          //   targets: [0, 1, 2, 3, 4]
          // },
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