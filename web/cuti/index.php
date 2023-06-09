<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php" ?>

  <style>
    @media (max-width: 768px) {
      .swipe-mobile {
        overflow: auto;
        white-space: inherit;
      }
    }
  </style>

</head>

<?php include "../partial/navbar.php" ?>
<?php include "../partial/backtotop.php" ?>

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/loading.php" ?>


  <!-- DO NOT CHANGE -->
  <div class="content pd-0 mg-l-0" style="position: relative">
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start "
      style="min-height: calc(100vh - 80px); overflow: visible">
      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big">
        <?php include "../partial/sidebar.php" ?>
        <div class="flex-1 mg-0 pd-x-10 mg-xl-r-50  pd-lg-x-0 pd-xl-x-0 bg-0 pos-relative"
          style="background: none; position: relative;" id="content">
          <div class="d-flex mg-t-90 wd-100p justify-content-between align-items-start pos-relative"
            style="position: relative;">
            <!-- Content -->
            <div id="content-canvas" class="row row-xs bg-0 mg-0 mg-lg-x-10 pd-0 flex-1"
              style="min-height: calc(100vh - 115px);">
              <div class="min-height-fix write-content-here wd-100p mg-b-30">

                <!-- DO NOT CHANGE END -->
                <!-- Write Content Starts Here -->

                <div class="wd-100p pd-x-5 d-flex justify-content-between align-items-center mg-b-20">
                  <div class="content-div tx-color-02 pd-t-3">
                    <div>
                      <div class="tx-poppins tx-medium tx-30 tx-md-36 tx-color-01 mg-b-0">Manajemen Cuti</div>
                    </div>
                    <div class="tx-16 tx-md-18 tx-color-01 pd-x-2">Buat dan lihat data cuti anda</div>
                  </div>
                  <div class="btn btn-primary pd-x-15 pd-y-8 d-none d-lg-block" style="border-radius: 12px;"
                    data-bs-toggle="modal" data-bs-target="#modalCuti">
                    <div class="tx-poppins tx-14">Buat cuti baru</div>
                  </div>
                </div>

                <div class="btn btn-primary pd-x-15 pd-y-8 d-lg-none mg-b-20" style="border-radius: 12px;"
                  data-bs-toggle="modal" data-bs-target="#modalCuti">
                  <div class="tx-poppins tx-14">Buat cuti baru</div>
                </div>

                <div class="wd-100p pd-x-1 mg-b-5">
                  <div class="wd-100p pd-0 mg-0 row row-xs content-div">

                    <div class="col-12 col-md-6 col-lg-2 col-xl-2 col-mmxl-2 col-mxl-2 rounded-its-10"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="unit-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center"
                          padding-left: 12px;">
                          <option value="">Bulan</option>
                          <option value="januari">Januari</option>
                          <option value="februari">Februari</option>
                          <option value="maret">Maret</option>
                          <option value="april">April</option>
                          <option value="">Semua</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-2 col-xl-2 col-mmxl-2 col-mxl-2 rounded-its-10"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="area-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center"
                          padding-left: 12px;">
                          <option value="">Tahun</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="">Semua</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-2 col-xl-2 col-mmxl-2 col-mxl-2 rounded-its-10"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="gedung-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center"
                          padding-left: 12px;">
                          <option value="">Jenis</option>
                          <option value="dptsi">Tower 1</option>
                          <option value="riscen">Research Center</option>
                          <option value="riscen">Tower 2</option>
                          <option value="its">GOR</option>
                        </select>
                      </div>
                    </div>

                    <div
                      class="col-12 col-md-12 col-lg-6 col-xl-6 col-mmxl-6 col-mxl-6 rounded-its-10 mg-t-4 mg-b-5 mg-lg-b-0">
                      <div class="col-12 rounded-its-10 wd-100p d-flex justify-content-end pd-6 bg-color search-input"
                        style="height: 44px;">
                        <input type="text" placeholder="Cari dengan kata kunci" id="search-key"
                          class="wd-100p tx-14 mg-l-4 tx-color-01 tx-medium tx-roboto"
                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                        <!-- <div class="flex-fill ht-100p d-flex align-items-center tx-14 mg-l-5 tx-color-03 tx-poppins">
                          Cari area, gedung, dll.</div> -->
                        <button id="custom-search"
                          class="ht-100p btn btn-icon rounded-its-10 d-flex align-items-center justify-content-center"
                          style="background-color: #0168fa; width: 34px; border: none !important; padding: 5px; color: white;">
                          <ion-icon name="search" class="ht-100p tx-20"></ion-icon>
                        </button>
                      </div>
                    </div>



                  </div>
                </div>

                <div class="pd-x-5 mg-t-10 mg-t-lg-0" style=" margin-top: -2px !important;">
                  <div class="wd-100p rounded-its-10 pd-b-10 card static bd-0">
                    <div class="rounded-its-10 d-flex wd-100p mg-l-4 pd-20 bd-0 table-container"
                      style=" overflow: auto;">
                      <?php include "./table.php" ?>

                    </div>
                  </div>
                </div>

                <div class="modal fade" id="modalCuti" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" data-backdrop="static" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen modal-fullscreen-its">
                    <div class="modal-content bg-color pd-20 pos-relative">
                      <div class="pos-absolute r-50 t-45">
                        <ion-icon name="close" class="tx-16 btn btn-text-dark" data-bs-dismiss="modal"></ion-icon>
                      </div>

                      <div class="ht-100p d-flex flex-column">
                        <div class="d-flex flex-column pos-relative" style="margin-top: 100px;">
                          <div class="d-flex justify-content-center tx-poppins tx-28 tx-lg-36 tx-medium wd-100p">
                            Pembuatan Cuti Baru
                          </div>
                          <div
                            class="d-flex tx-center tx-lg-left justify-content-center tx-poppins tx-14 tx-lg-16 wd-100p">
                            Ikuti langkah-langkah berikut untuk membuat pengajuan cuti baru
                          </div>
                        </div>

                        <div class="step-1">
                          <div class="wd-100p d-flex justify-content-center mg-t-40">
                            <div class="pd-20" style="max-width: 575px;">
                              <div class="tx-poppins tx-16">
                                Pilih jenis cuti:
                              </div>
                              <div
                                class="wd-100p d-flex flex-wrap gap-2 justify-content-start align-items-center pos-relative">
                                <div id="tahunan"
                                  class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
                                  style="border-radius: 8px;">
                                  <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti Tahunan</div>
                                </div>
                                <div id="besar" class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
                                  style="border-radius: 8px;">
                                  <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti Besar</div>
                                </div>


                                <div id="sakit" class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
                                  style="border-radius: 8px;">
                                  <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti Sakit</div>
                                </div>
                                <div id="melahirkan"
                                  class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
                                  style="border-radius: 8px;">
                                  <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti Melahirkan</div>
                                </div>
                                <div id="alasanpenting"
                                  class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
                                  style="border-radius: 8px;">
                                  <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti Alasan Penting</div>
                                </div>
                                <div id="luartanggungan"
                                  class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
                                  style="border-radius: 8px;">
                                  <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti di Luar Tanggungan Negara
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="wd-100p d-flex justify-content-center mg-t-20">
                            <button class="btn next-btn pd-x-20 pd-y-10"
                              style="border-radius: 12px !important; pointer-events: none; background-color: #e6e9f0; color: #9c9ea3">
                              <div class="tx-poppins tx-14 tx-medium">Selanjutnya</div>
                            </button>
                          </div>

                          <!-- pesan reject -->
                          <div class="rejectcont mg-t-60">
                            <div class="wd-100p d-flex justify-content-center">
                              <div class="pd-20 text-center mx-wd-650">
                                <div class="tx-poppins tx-14 tx-medium rejecttext mg-b-4" style="color: #ff6370">
                                  Bapak/Ibu belum berhak atas Cuti Besar karena belum bekerja selama 5 tahun
                                </div>
                                <div class="tx-poppins tx-14 tx-medium warningtext mg-b-4" style="color: #fece3a">
                                  Cuti Sakit wajib menyertakan surat dokter
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="step-2 d-none">
                          <div class="wd-100p d-flex justify-content-center mg-t-40">
                            <div class="pd-20" style="max-width: 575px;">
                              <!-- <div class="tx-poppins tx-16 tx-medium">
                                Masukkan detail cuti:
                              </div> -->
                              <div class="d-flex flex-column wd-100p">

                                <div class="wd-100p mg-b-10 pd-0 mg-0">
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">Anda memilih <span
                                        class="tx-medium cuti-terpilih"></span></div>
                                  </div>
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">Keterangan</div>
                                  </div>
                                  <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                                    style="border-radius: 6px !important;">
                                    <input type="text" value="" placeholder="Keterangan cuti" id="keterangan"
                                      class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium inputform"
                                      style="border-radius: 10px; background-color: none !important; border: none !important; "></input>
                                  </div>
                                </div>

                                <div class="row row-xs mg-b-0 mg-t-5">
                                  <div class="col-12 col-md-4">
                                    <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                                      <div class="col-12 pd-y-6">
                                        <div class="tx-color-01 tx-16" style="margin-left: -4px;">Tanggal awal</div>
                                      </div>
                                      <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                                        <input type="text" id="tanggalmulai" name="tanggalmulai"
                                          placeholder="Pilih tanggal awal"
                                          class="mn-wd-100p tx-16 mg-l-4 tx-color-01 tx-medium inputform"
                                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-4">
                                    <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                                      <div class="col-12 pd-y-6">
                                        <div class="tx-color-01 tx-16" style="margin-left: -4px;">Tanggal akhir</div>
                                      </div>
                                      <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                                        <input type="text" id="tanggalselesai" name="tanggalselesai"
                                          placeholder="Pilih tanggal akhir"
                                          class="mn-wd-100p tx-16 mg-l-4 tx-color-01 tx-medium inputform"
                                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                                        <button
                                          class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                          <ion-icon name="close" class="tx-20"></ion-icon>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-4">
                                    <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                                      <div class="col-12 pd-y-6">
                                        <div class="tx-color-05 tx-16">Durasi cuti</div>
                                      </div>
                                      <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                                        <input type="text" id="durasi" name="durasi" placeholder="0 Hari"
                                          class="mn-wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
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

                                <div class="wd-100p mg-b-10 pd-0 mg-0 mg-t-5">
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">No Telp</div>
                                  </div>
                                  <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                                    style="border-radius: 6px !important;">
                                    <input type="text" value="" name="numonly" placeholder="082264182423" id="notelp"
                                      class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium inputform"
                                      style="border-radius: 10px; background-color: none !important; border: none !important; "></input>
                                  </div>
                                </div>

                                <div class="wd-100p mg-b-10 pd-0 mg-0 mg-t-15">
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">Alamat</div>
                                  </div>
                                  <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                                    style="border-radius: 6px !important;">
                                    <input type="text" value="" placeholder="Alamat anda selama cuti" id="keterangan"
                                      class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium inputform"
                                      style="border-radius: 10px; background-color: none !important; border: none !important; "></input>
                                  </div>
                                </div>

                                <div class="is-sakit d-none">
                                  <div class="wd-100p mg-b-10 pd-0 mg-0 mg-t-15 sd">
                                    <div class="pd-y-6">
                                      <div class="tx-color-01 tx-16">Surat Dokter</div>
                                    </div>
                                    <div
                                      class="pd-x-8 d-flex align-items-center pd-y-8 input-bg-color inside-border pos-relative"
                                      style="border-radius: 6px !important;">
                                      <input id="sudok" type="file" name="sudok"
                                        class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium inputform"
                                        style="display: none;"></input>
                                      <label for="sudok" class="btn btn-primary mg-0 tx-14"
                                        style="border-radius: 5px; padding-top: 3px; padding-bottom: 3px; padding-left: 8px; padding-right: 8px; width: min-content; white-space: nowrap;">Upload
                                        file</label>
                                      <div class="tx-16 mg-l-5 file-name" style="color: #999999;">Belum ada file</div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="wd-100p d-flex justify-content-center mg-t-20">
                            <div class="wd-100p d-flex justify-content-between" style="max-width: 540px;">
                              <button class="btn btn-primary back-btn pd-x-20 pd-y-10"
                                style="border-radius: 12px !important;">
                                <div class="tx-poppins tx-14 tx-medium">Sebelumnya</div>
                              </button>
                              <button class="btn next-btn pd-x-20 pd-y-10"
                                style="border-radius: 12px !important; background-color: #e6e9f0; color: #9c9ea3">
                                <div class="tx-poppins tx-14 tx-medium">Selanjutnya</div>
                              </button>
                            </div>
                          </div>
                        </div>

                        <!-- Simpan lalu pakai, atau ambil dari sebelumnya? -->

                        <div class="step-3 d-none">
                          <div class="wd-100p d-flex justify-content-center mg-t-40">
                            <div class="pd-20" style="max-width: 575px;">
                              <!-- <div class="tx-poppins tx-16 tx-medium">
                                Masukkan detail cuti:
                              </div> -->
                              <div class="d-flex flex-column wd-100p">

                                <div class="wd-100p mg-b-10 pd-0 mg-0">
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">Anda membuat <span class="tx-medium">Cuti
                                        Tahunan</span> dengan data: </div>
                                  </div>
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">Keterangan</div>
                                  </div>
                                  <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                                    style="border-radius: 6px !important;">
                                    <input type="text" value="Cuti setelah hari raya" placeholder="Keterangan cuti"
                                      id="keterangan" class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
                                      style="border-radius: 10px; background-color: none !important; border: none !important; "
                                      readonly></input>
                                  </div>
                                </div>

                                <div class="row row-xs mg-b-0 mg-t-5">
                                  <div class="col-12 col-md-4">
                                    <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                                      <div class="col-12 pd-y-6">
                                        <div class="tx-color-01 tx-16" style="margin-left: -4px;">Tanggal awal</div>
                                      </div>
                                      <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                                        <input type="text" value="26 April 2023" id="tanggalmulaicek"
                                          name="tanggalmulaicek" class="mn-wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
                                          style="border-radius: 10px; background-color: none !important; border: none !important;"
                                          readonly></input>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-4">
                                    <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                                      <div class="col-12 pd-y-6">
                                        <div class="tx-color-01 tx-16" style="margin-left: -4px;">Tanggal akhir</div>
                                      </div>
                                      <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                                        <input type="text" value="28 April 2023" id="tanggalselesaicek"
                                          name="tanggalselesaicek" class="mn-wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
                                          style="border-radius: 10px; background-color: none !important; border: none !important;"
                                          readonly></input>
                                        <button
                                          class="btn btn-icon d-none align-items-center justify-content-center tx-color-01 pd-0 pos-absolute del-btn">
                                          <ion-icon name="close" class="tx-20"></ion-icon>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-4">
                                    <div class="row row-xs wd-100p mg-b-10 rounded-its-6 pd-0 mg-0">
                                      <div class="col-12 pd-y-6">
                                        <div class="tx-color-05 tx-16">Durasi cuti</div>
                                      </div>
                                      <div class="col-12 pd-x-4 pd-y-10 rounded-its-6 input-bg-color inside-border">
                                        <input type="text" value="3 Hari" id="durasiringkas" name="durasiringkas"
                                          placeholder="0 Jam 0 Menit"
                                          class="mn-wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
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

                                <div class="wd-100p mg-b-10 pd-0 mg-0 mg-t-5">
                                  <div class="pd-y-6">
                                    <div class="tx-color-01 tx-16">No Telp</div>
                                  </div>
                                  <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                                    style="border-radius: 6px !important;">
                                    <input type="text" value="082264717134" placeholder="08XXX" id="notelp"
                                      class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
                                      style="border-radius: 10px; background-color: none !important; border: none !important; "
                                      readonly></input>
                                  </div>
                                  <div class="wd-100p mg-b-10 pd-0 mg-0 mg-t-15">
                                    <div class="pd-y-6">
                                      <div class="tx-color-01 tx-16">Alamat</div>
                                    </div>
                                    <div class="pd-x-4 pd-y-10 input-bg-color inside-border pos-relative"
                                      style="border-radius: 6px !important;">
                                      <input type="text" value="Perum Griya Kencana Permai Blok C.22 Madiun"
                                        placeholder="Alamat anda selama cuti" id="keterangan"
                                        class="wd-100p tx-16 mg-l-4 tx-color-01 tx-medium"
                                        style="border-radius: 10px; background-color: none !important; border: none !important; "
                                        readonly></input>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="wd-100p d-flex justify-content-center mg-t-20 pos-relative">
                            <div class="wd-100p d-flex justify-content-between pos-relative" style="max-width: 540px;">
                              <button class="btn btn-primary back-btn pd-x-20 pd-y-10"
                                style="border-radius: 12px !important;">
                                <div class="tx-poppins tx-14 tx-medium">Sebelumnya</div>
                              </button>
                              <button class="btn btn-primary save-btn pd-x-20 pd-y-10 pos-relative"
                                style="border-radius: 12px !important;">
                                <div class="tx-poppins tx-14 tx-medium text-btn">Simpan</div>
                              </button>
                            </div>
                          </div>
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


    <!-- container -->
  </div>
  <?php include "../partial/footer.php" ?>
  <?php include "../partial/script.php" ?>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

  <!-- Pilih Cuti -->

  <!-- NEED TO MAKE RESETABLE STATE, OR FORCE RESET PAGE ON SAVE -->
  <script>
    $(function () {
      'use strict'

      let maxDate = new Date();
      let sisaCutiTahunan = 10;
      let stepId = 0;
      let selectedId;
      let states = [false, false, false]
      const days = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab']
      const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']

      checkAvailableCuti();

      $(".next-btn").click(function () {
        (stepId >= 3) ? stepId = 3 : stepId++;
        switchStep();
      })

      $(".back-btn").click(function () {
        (stepId <= 0) ? stepId = 0 : stepId--;
        switchStep();
      })

      $(".save-btn").click(function () {
        // settimeout untuk animasi saja, hapus di prod
        spin(this)
        setTimeout(function () {
          checkMark(".save-btn")
        }, 2200)
        setTimeout(function () {
          $('#modalCuti').modal('hide');
          resetCuti();
        }, 4600)
      })

      function resetCuti()  {
        stepId = 0;
        $(".inputform").val("");
        $(".step-2").removeClass("d-block").addClass("d-none");
        $(".step-3").removeClass("d-block").addClass("d-none");
        $(".step-1").removeClass("d-none").addClass("d-block");
        checkNextButton(states[0]);
      }

      function spin(btn) {
        $(btn).addClass("button--loading")
        $(btn).find(".text-btn").css("transition", "all 150ms").css("opacity", "0")
      }

      function checkMark(btn) {
        $(btn).removeClass("button--loading")
        // $(".presenpercent").css("width", "100%").css("background-color", "#32ba9e")
        $(btn).addClass("checkmark-sm").addClass("draw")
        $(".checkmark-sm").toggle()
        $(btn).css("pointer-events", "none");
        $('.back-btn').css("background-color", "#e6e9f0").css("border", "2px solid #e6e9f0").css("color", "#9c9ea3").css("pointer-events", "none");
      }

      function switchStep() {
        switch (stepId) {
          case 0:
            $(".step-1").removeClass("d-none").addClass("d-block")
            $(".step-2").removeClass("d-block").addClass("d-none")
            checkNextButton(states[0]);
            break;
          case 1:
            $(".step-1").removeClass("d-block").addClass("d-none")
            $(".step-2").removeClass("d-none").addClass("d-block")
            $(".step-3").removeClass("d-block").addClass("d-none")
            checkNextButton(states[1]);
            break;
          case 2:
            $(".step-2").removeClass("d-block").addClass("d-none");
            $(".step-3").removeClass("d-none").addClass("d-block");
            states[2] = true;
            checkNextButton(states[2]);
            break;
        }
      }

      // cek cuti tersedia
      function checkAvailableCuti() {
        let ids = [".cuti-select#tahunan", ".cuti-select#besar", ".cuti-select#sakit", ".cuti-select#melahirkan", ".cuti-select#alasanpenting", ".cuti-select#luartanggungan"]
        let flags = [true, false, true, true, true, true]

        function availableCuti(cid) {
          $(cid).addClass("bd").addClass("bd-2");
        }

        function disableCuti(cid) {
          $(cid).css("background-color", "#e6e9f0").css("border", "2px solid #e6e9f0").css("color", "#9c9ea3").css("pointer-events", "none");
        }

        for (let i = 0; i <= ids.length; i++) {
          flags[i] ? availableCuti(ids[i]) : disableCuti(ids[i])
        }
      }

      function checkNextButton(state) {
        state ? $(".next-btn").addClass("btn-primary").css("pointer-events", "auto").css("background-color", "#0168fa").css("color", "white")
          : $(".next-btn").removeClass("btn-primary").css("color", "#9c9ea3").css("background-color", "#e6e9f0").css("pointer-events", "none");
      }

      $('.inputform').change(function () {
        validateForm();
        checkNextButton(states[1]);
      })

      $("input[name='numonly']").on('input', function (e) {
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
      });

      function validateForm() {
        states[1] = true;
        $('.inputform').each(function () {
          if ($(this).val() === '')
            states[1] = false;
        });
        return;
      }

      $(".cuti-select").click(function () {
        $(this).css("border", "2px solid #408bfc").siblings().css("border", "2px solid #e6e9f0")
        selectedId = $(this).attr("id");
        switch (selectedId) {
          case "tahunan":
            let textSisa = '<span class="tx-normal">  dengan sisa cuti <span class="tx-medium">' + sisaCutiTahunan + ' Hari </span></span>'
            let textCuti = "Cuti Tahunan" + textSisa;
            $(".cuti-terpilih").html(textCuti);
            $(".is-sakit").removeClass("d-block").addClass("d-none");
            $("#sudok").removeClass('inputform');
            break;
          case "besar":
            $(".cuti-terpilih").html("Cuti Besar");
            $(".is-sakit").removeClass("d-block").addClass("d-none");
            $("#sudok").removeClass('inputform');
            break;
          case "sakit":
            $(".cuti-terpilih").html("Cuti Sakit");
            $(".is-sakit").removeClass("d-none").addClass("d-block");
            $("#sudok").addClass('inputform');
            break;
          case "melahirkan":
            $(".cuti-terpilih").html("Cuti Melahirkan");
            $(".is-sakit").removeClass("d-block").addClass("d-none");
            $("#sudok").removeClass('inputform');
            break;
          case "alasanpenting":
            $(".cuti-terpilih").html("Cuti Alasan Penting");
            $(".is-sakit").removeClass("d-block").addClass("d-none");
            $("#sudok").removeClass('inputform');
            break;
          case "luartanggungan":
            $(".cuti-terpilih").html("Cuti di Luar Tanggungan Negara");
            $(".is-sakit").removeClass("d-block").addClass("d-none");
            $("#sudok").removeClass('inputform');
            break;
        }
        states[0] = true;
        checkNextButton(states[0]);
      })

      let durasiHari;
      const awal = datepicker('#tanggalmulai', {
        id: 1,
        noWeekends: true,
        customDays: days,
        customMonths: months,
        // minDate: new Date(), //apa bisa sebelum hari ini? bisa
        formatter: (input, date, instance) => {
          const value = date.toLocaleDateString('id-ID')
          input.value = days[date.getDay()] + ", " + value // => '1/1/2099'
        },
        onSelect: function () {
          const durasi = awal.getRange();
          if (durasi.start != null && durasi.end != null) {
            durasiHari = (durasi.end.getDate() - durasi.start.getDate()) - (durasi.start.getDate() - durasi.start.getDate())
            setDurasi(durasiHari)
          }
        },
      })
      const akhir = datepicker('#tanggalselesai', {
        id: 1,
        noWeekends: true,
        customDays: days,
        customMonths: months,
        // minDate: new Date(), //apa bisa sebelum hari ini?
        formatter: (input, date, instance) => {
          const value = date.toLocaleDateString('id-ID')
          input.value = days[date.getDay()] + ", " + value // => '1/1/2099'
        },
        onSelect: function () {
          const durasi = akhir.getRange();
          if (durasi.start != null && durasi.end != null) {
            durasiHari = (durasi.end.getDate() - durasi.start.getDate()) - (durasi.start.getDate() - durasi.start.getDate())
            let startDay = durasi.start.getDay();
            let listDay = [];
            let dontCount = [0, 6]
            for (let i = 0; i <= durasiHari; i++) {
              if (startDay <= 6) {
                listDay.push(startDay++);
              } else {
                listDay.push(startDay = 0);
                startDay++;
              }
            }
            listDay = listDay.filter(item => !dontCount.includes(item))
            setDurasi(listDay.length)
          }
        },
      })

      function checkDurasi(x) {

      }

      function setDurasi(x) {
        $("#durasi").val(x + " Hari");
      }

      $('#sudok').change(function(e){
          var fileName = e.target.files[0].name;
          $(".file-name").html(fileName);
          $(".file-name").css("color","#000000")
        });

    })
  </script>

  <!-- Select2 -->
  <script>
    $(function () {
      'use strict'

      $('#unit-select').select2({
        placeholder: 'Bulan',
      });
      $('#area-select').select2({
        placeholder: 'Tahun'
      });
      $('#gedung-select').select2({
        placeholder: 'Jenis'
      });
      $('#pengelola-select').select2({
        placeholder: 'Pengelola area'
      });
    });
  </script>
  <!-- Select2 end -->

  <script>
    $(function () {
      'use strict'

      $('#daftarareatable').DataTable({
        // bAutoWidth: false,
        pageLength: 10,
        pagingType: 'full_numbers',
        language: {
          lengthMenu: '<select class="form-select new mg-r-10" style="width: 65px; cursor: pointer;">' +
            '<option value="10">10</option>' +
            '<option value="20">20</option>' +
            '<option value="30">30</option>' +
            '<option value="50">50</option>' +
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
        }],
        responsive: true,
      });

      $('#daftarareatable').DataTable().on('order.dt search.dt', function () {
        let i = 1;
        $('#daftarareatable').DataTable().cells(null, 0, {
          search: 'applied',
          order: 'applied'
        }).every(function (cell) {
          this.data('<div class="pd-y-4 pd-l-10 pd-r-5 mg-l-5">' + i++ + '</div>');
        });
      }).draw();

      $('#daftarareatable_filter').css("display", "none");
      $('#daftarareatable_info').css("display", "none");

      $("#search-key").on("keyup", function () {
        $('#daftarareatable').DataTable().search($("#search-key").val()).draw();
      })
      $('#custom-search').on('keyup click', function () {
        $('#daftarareatable').DataTable().search($("#search-key").val()).draw();
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