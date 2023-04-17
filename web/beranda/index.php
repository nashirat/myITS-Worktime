<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php" ?>
</head>

<!-- Body -->

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar.php" ?>
  <?php include "../partial/loading.php" ?>


  <div class="content pd-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start"
      style="min-height: calc(100vh - 80px); overflow: visible">


      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big"
        style="min-height: 100vh; overflow:visible;">

        <!-- Sidebar -->
        <?php include "../partial/sidebar.php" ?>
        <!-- Sidebar End -->


        <!-- Content -->
        <div class="flex-1 mg-0 pd-0 mg-t-80 mg-xl-r-30 mg-xl-l-5 pd-lg-x-0 pd-xl-x-0 bg-0 mg-xl-t-100" id="content">
          <div class="row row-xs bg-0 mg-0 pd-0">

            <div class="d-lg-none wd-100p card static bd-0 mg-b-15"
              style="padding: 0px !important; border-radius: 30px; background-color: white; transition: all 500ms ease-out;">
              <div class="wd-100p d-flex pd-20 justify-content-center align-items-center">
                <div class="prof"
                  style="background-color: grey; border-radius: 100%; min-height: 60px; min-width: 60px; height: 60px; width: 60px; overflow: hidden;">
                  <img src="../../assets/img/picture.png"
                    style="min-height: 60px; min-width: 60px; height: 60px; width: 60px; object-fit:cover;"></img>
                </div>
                <div class="d-flex flex-column wd-100p pd-l-15">
                  <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px; line-height: 1.2;">Sulthon Nashir
                  </div>
                  <div class="tx-poppins tx-14" style="line-height: 1.2; color: #a3a3a3;">nashir1187@gmail.com</div>
                </div>
              </div>
            </div>

            <div class="d-lg-none wd-100p card static bd-0 presenbg"
              style="padding: 0px !important; border-radius: 30px; background-color: white; transition: all 500ms ease-out;">

              <div class="ht-200 wd-100p card-bg-color d-flex flex-column justify-content-center align-items-center"
                style="margin-bottom: -35px; border-radius: 20px;">
                <div class="d-flex justify-content-between align-items-center wd-100p pd-x-15"
                  style="margin-top: -45px;">
                  <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                    title="Lihat rekap absensi"
                    style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.06) 0px 8px 30px 0px; padding: 8px; color: black;">
                    <ion-icon class="tx-16 wd-20 ht-30" name="list"></ion-icon>
                  </div>
                  <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                    title="Menuju modul absensi"
                    style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.06) 0px 8px 30px 0px; padding: 8px; color: black;">
                    <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                  </div>
                </div>

                <div class=" tx-poppins tx-38 txtime" style="letter-spacing: -1px; font-weight: 600;"></div>
                <div class="tx-poppins tx-16 txdate" style="letter-spacing: -1px;"></div>
              </div>
              <div class="wd-100p d-flex flex-column card-bg-color"
                style="background-color: white; border-radius: 20px; padding: 20px; box-shadow: rgba(17, 12, 46, 0.07) 0px 14px 40px 0px;">
                <div class="wd-100p d-flex justify-content-between align-items-center" style="min-height: 42px;">
                  <div class="d-flex flex-column">
                    <div class="tx-poppins tx-14 tx-medium">Mulai kerja</div>
                    <div class="tx-poppins tx-14 startworktimeplus"></div>
                  </div>
                  <div class="tx-poppins tx-22 tx-medium startworktime" style="letter-spacing: -1px;"> --.--
                  </div>
                </div>
                <div class="wd-100p d-flex justify-content-between align-items-center mg-t-10"
                  style="min-height: 42px;">
                  <div class="d-flex flex-column">
                    <div class="tx-poppins tx-14 tx-medium">Selesai kerja</div>
                    <div class="tx-poppins tx-14 endworktimeplus"></div>
                  </div>
                  <div class="tx-poppins tx-22 tx-medium endworktime" style="letter-spacing: -1px;">
                    --.--
                  </div>
                </div>
                <div class="wd-100p d-flex justify-content-between align-items-center mg-t-10"
                  style="min-height: 42px;">
                  <div class="d-flex flex-column">
                    <div class="tx-poppins tx-14 tx-medium">Durasi kerja</div>
                  </div>
                  <div class="tx-poppins tx-22 tx-medium worklong" style="letter-spacing: -1px;">
                    --.--
                  </div>
                </div>
              </div>

              <!-- <div class="pd-x-15 pd-b-15 pd-t-15">
                <div
                  class="btn presenbtn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative"
                  style="border-radius: 20px; background-color: #eec2c5; width: 100%; overflow: hidden; border: solid 2px white">
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18 presentx"
                      style="letter-spacing: -1px; color: white; line-height: 1.2;">Segera mulai kerja!
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: rgba(255,255,255,0.9);">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">6 menit
                        sebelum
                        terlambat</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
                    style="background-color: #ff6f7a; padding-top: 11px; padding-bottom: 15px; width: 60%; height: 100%; transition: all 500ms ease-out;">
                  </div>
                </div>
              </div> -->
              <div class="pd-x-15 pd-b-15 pd-t-15">
                <div
                  class="btn mainpresenbtn presenbtn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative"
                  style="border-radius: 20px; background-color: #eec2c5; width: 100%; overflow: hidden; border: solid 2px white">
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center presenbtncontent"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18 presentx"
                      style="letter-spacing: -1px; color: white; line-height: 1.2;">Mulai kerja
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1 ionicon" style="color: rgba(255,255,255,0.9);">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">Waktu
                        masuk normal</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
                    style="background-color: #408bfc; padding-top: 11px; padding-bottom: 15px; width: 100%; height: 100%; transition: all 500ms ease-out;">
                  </div>
                </div>
              </div>
              <!-- <div class="pd-15">
                <div
                  class="btn presenbtn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative"
                  style="border-radius: 20px; background-color: #eec2c5; width: 100%; overflow: hidden; border: solid 2px white">
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18 presentx"
                      style="letter-spacing: -1px; color: white; line-height: 1.2;">Mulai kerja
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: rgba(255,255,255,0.9);">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">Waktu masuk normal</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
                    style="background-color: #0178fa; padding-top: 11px; padding-bottom: 15px; width: 100%; height: 100%; transition: all 500ms ease-out;">
                  </div>
                </div>
              </div> -->
              <!-- <div class="pd-15">
                <div
                  class="btn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative new-shadow-btn"
                  style="border-radius: 20px; background-color: white; width: 100%; overflow: hidden;">
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18" style="letter-spacing: -1px; color: #0168fa; line-height: 1.2;">Akhiri kerja
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: #0168fa;">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light" style="color: #0168fa;">6 menit sebelum
                        terlambat</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute"
                    style="background-color: white; padding-top: 11px; padding-bottom: 15px; width: 60%; height: 100%;">
                  </div>
                </div>
              </div> -->
            </div>

            <div class="d-lg-none wd-100p card static bd-0 mg-t-15 "
              style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Realisasi Kerja</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="wd-100p"
                  style="border-radius: 30px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                  <div class="wd-100p d-flex flex-column mg-b-5">
                    <div class="rc1 wd-100p card-bg-color" style="border-radius: 20px; padding-top: 0px !important;">
                      <div class="wd-100p d-flex flex-column">

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div class="rkstatus d-flex align-items-center justify-content-around mg-r-10 mg-l-2 pd-x-8"
                              style="border-radius: 12px; background-color: #e7f0ff; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                              <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                              <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                              <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16">
                                Template myITS Worktime
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                Dalam Pengerjaan
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div class="rkstatus d-flex align-items-center justify-content-around mg-r-10 mg-l-2 pd-x-8"
                              style="border-radius: 12px; background-color: #e7f0ff; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                              <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                              <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                              <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16">
                                Website myITS Design System
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                Dalam Pengerjaan
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div class="rkstatus d-flex align-items-center justify-content-center mg-r-10 mg-l-2 pd-x-8"
                              style="border-radius: 12px; background-color: #fff6d9; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                              <div class="wd-6 mg-r-2"
                                style="background-color: #ed9d59da; border-radius: 4px; height: 16px;"></div>
                              <div class="wd-6 mg-l-2"
                                style="background-color: #ed9d59da; border-radius: 4px; height: 16px;"></div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                NEXT.js Frontend Interaction Space Management
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                Belum Dimulai
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div
                              class="rkstatus d-flex align-items-center justify-content-center mg-r-10 mg-l-2 pd-x-8 pos-relative"
                              style="border-radius: 12px; background-color: #cbf8ef; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                              <div class="wd-6 mg-r-2 pos-absolute"
                                style="top: 21px; left: 16px; background-color: #32ba9e; border-radius: 4px; height: 12px; transform: rotate(-45deg)">
                              </div>
                              <div class="wd-6 mg-l-2 pos-absolute"
                                style="right: 18px; background-color: #32ba9e; border-radius: 4px; height: 23px; transform: rotate(45deg)">
                              </div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                Template myITS Space Management
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                Selesai
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0;">
                          <div class="d-flex align-items-center pd-l-0">
                            <div
                              class="rkstatus d-flex align-items-center justify-content-center mg-r-10 mg-l-2 pd-x-8 pos-relative"
                              style="border-radius: 12px; background-color: #cbf8ef; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                              <div class="wd-6 mg-r-2 pos-absolute"
                                style="top: 21px; left: 16px; background-color: #32ba9e; border-radius: 4px; height: 12px; transform: rotate(-45deg)">
                              </div>
                              <div class="wd-6 mg-l-2 pos-absolute"
                                style="right: 18px; background-color: #32ba9e; border-radius: 4px; height: 23px; transform: rotate(45deg)">
                              </div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                myITS Design System Figma
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03 mg-t-2">
                                Selesai
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
                <div class="btn wd-100p pd-20 d-flex justify-content-center align-items-center" style="color: black;">
                  <div class="d-flex justify-content-center align-items-center mg-r-8"
                    style="background-color: #408bfc; border-radius: 50%; height: 20px; width: 20px;">
                    <ion-icon name="add" class="tx-14" style="color: white;"></ion-icon>
                  </div>
                  <div class="tx-poppins tx-14 tx-medium">
                    Tambah RK Baru
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modalRK" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-color" style="border-radius: 20px; padding: 20px;">
                  <div class="tx-poppins tx-14 tx-normal" style="line-height: 1;">
                    Realisasi Kerja
                  </div>
                  <div class="tx-poppins tx-18 tx-medium mg-b-10">
                    Dashborad myITS Worktime
                  </div>

                  <div class="wd-100p mg-b-10">
                    <button class="accordion">Detail</button>
                    <div class="panel">
                      <p>Lorem ipsum...</p>
                    </div>

                    <button class="accordion">Delegasi</button>
                    <div class="panel">
                      <p>Lorem ipsum...</p>
                    </div>

                    <button class="accordion">Jadikan Sub RK</button>
                    <div class="panel">
                      <p>Lorem ipsum...</p>
                    </div>
                  </div>

                  <div class="wd-100p d-flex mg-t-5">
                    <button class="mg-l-auto btn btn-text-dark">
                      <div class="tx-poppins tx-14 tx-normal" data-dismiss="modal">Batal</div>
                    </button>
                    <button class="btn btn-primary" style="border-radius: 12px !important;">
                      <div class="tx-poppins tx-14 tx-normal" style="color: white;">Simpan</div>
                    </button>
                  </div>
                  <!-- <div class="row row-xs wd-100p">
                    <div class="col-4 pd-10" style="border-radius: 12px; background-color: red;">
                      Dalam pengerjaan
                    </div>
                    <div class="col-4 pd-10" style="border-radius: 12px; background-color: red;">
                      Dalam pengerjaan
                    </div>
                    <div class="col-4 pd-10" style="border-radius: 12px; background-color: red;">
                      Dalam pengerjaan
                    </div>
                  </div> -->

                </div>
              </div>
            </div>



            <!-- <div class="mg-l-10 d-flex align-items-center justify-content-between mg-b-15 mg-t-20 ht-50">
              <div class="d-flex align-items-center justify-content-start">
                
              </div>
            </div> -->
            <div class="d-block d-lg-none wd-100p pd-20 mg-t-10">
              <div class="tx-poppins tx-26 tx-medium pd-l-5" style="letter-spacing: -1px;">
                Informasi
              </div>
            </div>

            <div class="d-lg-none wd-100p card static bd-0" style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Presensi</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="d-flex wd-100p ht-200 justify-content-between align-items-start pd-20"
                  style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">

                </div>
              </div>
            </div>

            <div class="d-lg-none wd-100p card static bd-0 mg-t-15 "
              style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Cuti</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="d-flex wd-100p ht-200"
                  style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                  <div class="tx-poppins tx-40 tx-medium"></div>
                </div>
              </div>
            </div>

            <div class="d-lg-none wd-100p card static bd-0 mg-t-15 "
              style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Shift</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="wd-100p"
                  style="border-radius: 30px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                  <div class="wd-100p d-flex flex-column mg-b-5">
                    <div class="rc1 wd-100p card-bg-color" style="border-radius: 20px; padding-top: 0px !important;">
                      <div class="wd-100p d-flex flex-column">

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div
                              class="rkstatus d-flex flex-column align-items-center justify-content-center mg-r-10 mg-l-2"
                              style="border-radius: 12px; background-color: #32ba9e; height: 50px; width: 60px;">
                              <!-- <div class="tx-poppins tx-14">Kam</div> -->
                              <div class="tx-poppins tx-20 tx-medium" style="font-weight: 600; color: white">31</div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                Parkir lapangan utama ITS sebelah utara
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                14.00 - 22.00 WIB
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div
                              class="rkstatus d-flex flex-column align-items-center justify-content-center mg-r-10 mg-l-2"
                              style="border-radius: 12px; background-color: #408bfc; height: 50px; width: 60px;">
                              <!-- <div class="tx-poppins tx-14">Kam</div> -->
                              <div class="tx-poppins tx-20 tx-medium" style="font-weight: 600; color: white">1</div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                Direktorat Pusat ITS
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                14.00 - 22.00 WIB
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div
                              class="rkstatus d-flex flex-column align-items-center justify-content-center mg-r-10 mg-l-2"
                              style="border-radius: 12px; background-color: #ff6370; height: 50px; width: 60px;">

                              <div class="tx-poppins tx-20 tx-medium" style="font-weight: 600; color: white">2</div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-center"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                Tidak ada shift
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                          style="padding: 20px; text-align: left; color: black; border-radius: 0;">
                          <div class="d-flex align-items-center ht-100p pd-l-0">
                            <div
                              class="rkstatus d-flex flex-column align-items-center justify-content-center mg-r-10 mg-l-2"
                              style="border-radius: 12px; background-color: #408bfc; height: 50px; width: 60px;">
                              <!-- <div class="tx-poppins tx-14">Kam</div> -->
                              <div class="tx-poppins tx-20 tx-medium" style="font-weight: 600; color: white">3</div>
                            </div>
                            <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                              style="min-height: 42px;">
                              <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                Gerbang utama ITS
                              </div>
                              <div class="tx-poppins tx-14 tx-color-03">
                                06.00 - 13.00 WIB
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="wd-100p d-flex"></div>
                </div>
              </div>
            </div>


            <div class="d-lg-none wd-100p card static bd-0 mg-t-15 "
              style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Perjalanan Dinas</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="rc1 wd-100p ht-200"
                  style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                </div>
              </div>

            </div>
            <!-- 
            <div class="wd-100p card static bd-0 mg-b-10 mg-t-10"
              style="padding: 0px !important; border-radius: 30px; background-color: white; transition: all 500ms ease-out;">
              <div class="wd-100p d-flex pd-20 justify-content-center align-items-center">
                <div class="prof"
                  style="background-color: grey; border-radius: 100%; min-height: 60px; min-width: 60px; height: 60px; width: 60px; overflow: hidden;">
                  <img src="../../assets/img/picture.png"
                    style="min-height: 60px; min-width: 60px; height: 60px; width: 60px; object-fit:cover;"></img>
                </div>
                <div class="d-flex flex-column wd-100p pd-l-15">
                  <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px; line-height: 1.2;">Sulthon Nashir
                  </div>
                  <div class="tx-poppins tx-14" style="line-height: 1.2; color: #a3a3a3;">nashir1187@gmail.com</div>
                </div>
              </div>
            </div> -->


            <div class="wd-100p d-flex justify-content-end">
              <div class="d-none d-lg-block wd-100p">
                <div class="tx-poppins tx-26 tx-medium mg-b-10 pd-l-5" style="letter-spacing: -1px;">
                  Informasi
                </div>
                <div class="wd-100p bd-0 row row-xs mg-0 pd-r-6" style="border-radius: 30px; margin: 0px;">
                  <div class="wd-100p col-6 mg-b-10">
                    <div class="card static bd-0" style=" border-radius: 30px; box-shadow: none !important;">
                      <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                        <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Presensi</div>
                        <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                          title="Menuju modul absensi"
                          style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                          <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                        </div>
                      </div>
                      <div class="wd-100p d-flex flex-column">
                        <div class="d-flex wd-100p ht-200 justify-content-between align-items-start pd-20"
                          style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="wd-100p col-6 mg-b-10">
                    <div class="card static bd-0" style=" border-radius: 30px;">
                      <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                        <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Cuti</div>
                        <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                          title="Menuju modul absensi"
                          style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                          <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                        </div>
                      </div>
                      <div class="wd-100p d-flex flex-column">
                        <div class="d-flex wd-100p ht-200 justify-content-between align-items-start pd-20"
                          style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="wd-100p col-6 mg-b-10">
                    <div class="card static bd-0" style=" border-radius: 30px;">
                      <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                        <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Shift</div>
                        <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                          title="Menuju modul absensi"
                          style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                          <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                        </div>
                      </div>
                      <div class="wd-100p d-flex flex-column">
                        <div class="d-flex wd-100p ht-200 justify-content-between align-items-start pd-20"
                          style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="wd-100p col-6 mg-b-10">
                    <div class="card static bd-0" style=" border-radius: 30px;">
                      <div class="wd-100p pd-x-20 pd-t-20 pd-b-15 d-flex justify-content-between align-items-center">
                        <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Perjalanan Dinas</div>
                        <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                          title="Menuju modul absensi"
                          style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                          <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                        </div>
                      </div>
                      <div class="wd-100p d-flex flex-column">
                        <div class="d-flex wd-100p ht-200 justify-content-between align-items-start pd-20"
                          style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="d-flex flex-column">
                <div class="d-none wd-100p card static bd-0 mg-b-10"
                  style="padding: 0px !important; border-radius: 30px; background-color: white; transition: all 500ms ease-out; max-width: 370px; min-width: 370px;">
                  <div class="wd-100p d-flex pd-20 justify-content-center align-items-center">
                    <div class="prof"
                      style="background-color: grey; border-radius: 100%; min-height: 60px; min-width: 60px; height: 60px; width: 60px; overflow: hidden;">
                      <img src="../../assets/img/picture.png"
                        style="min-height: 60px; min-width: 60px; height: 60px; width: 60px; object-fit:cover;"></img>
                    </div>
                    <div class="d-flex flex-column wd-100p pd-l-15">
                      <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px; line-height: 1.2;">Sulthon
                        Nashir
                      </div>
                      <div class="tx-poppins tx-14" style="line-height: 1.2; color: #a3a3a3;">nashir1187@gmail.com</div>
                    </div>
                  </div>
                </div>

                <div class="d-none d-lg-block wd-100p card static bd-0 presenbg"
                  style="padding: 0px !important; border-radius: 30px; background-color: white; transition: all 500ms ease-out; max-width: 370px; min-width: 370px;">

                  <div class="ht-200 wd-100p card-bg-color d-flex flex-column justify-content-center align-items-center"
                    style="margin-bottom: -35px; border-radius: 20px;">
                    <div class="d-flex justify-content-between align-items-center wd-100p pd-x-15"
                      style="margin-top: -45px;">
                      <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                        title="Lihat rekap absensi"
                        style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.06) 0px 8px 30px 0px; padding: 8px; color: black;">
                        <ion-icon class="tx-16 wd-20 ht-30" name="list"></ion-icon>
                      </div>
                      <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                        title="Menuju modul absensi"
                        style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.06) 0px 8px 30px 0px; padding: 8px; color: black;">
                        <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                      </div>
                    </div>

                    <div class=" tx-poppins tx-38 txtime" style="letter-spacing: -1px; font-weight: 600;"></div>
                    <div class="tx-poppins tx-16" style="letter-spacing: -1px;">Senin, 20/03/2023</div>
                  </div>
                  <div class="wd-100p d-flex flex-column card-bg-color"
                    style="background-color: white; border-radius: 20px; padding: 20px; box-shadow: rgba(17, 12, 46, 0.07) 0px 14px 40px 0px;">
                    <div class="wd-100p d-flex justify-content-between align-items-center">
                      <div class="d-flex flex-column">
                        <div class="tx-poppins tx-14 tx-medium">Mulai kerja</div>
                        <div class="tx-poppins tx-14">+8 Menit</div>
                      </div>
                      <div class="tx-poppins tx-22 tx-medium startworktime" style="letter-spacing: -1px;">
                      </div>
                    </div>
                    <div class="wd-100p d-flex justify-content-between align-items-center mg-t-10">
                      <div class="d-flex flex-column">
                        <div class="tx-poppins tx-14 tx-medium">Selesai kerja</div>
                        <div class="tx-poppins tx-14"></div>
                      </div>
                      <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px;">
                        --.--
                      </div>
                    </div>
                    <div class="wd-100p d-flex justify-content-between align-items-center mg-t-10">
                      <div class="d-flex flex-column">
                        <div class="tx-poppins tx-14 tx-medium">Durasi kerja</div>
                      </div>
                      <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px;">
                        --.--
                      </div>
                    </div>
                  </div>

                  <div class="pd-x-15 pd-b-15 pd-t-15">
                    <div
                      class="btn mainpresenbtn presenbtn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative"
                      style="border-radius: 20px; background-color: #eec2c5; width: 100%; overflow: hidden; border: solid 2px white">
                      <div class="wd-100p d-flex flex-column justify-content-center align-items-center presenbtncontent"
                        style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                        <div class="tx-poppins tx-18 presentx"
                          style="letter-spacing: -1px; color: white; line-height: 1.2;">Mulai kerja
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                          <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: rgba(255,255,255,0.9);">
                          </ion-icon>
                          <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">
                            Waktu
                            masuk normal</div>
                        </div>
                      </div>
                      <div
                        class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
                        style="background-color: #0168fa; padding-top: 11px; padding-bottom: 15px; width: 100%; height: 100%; transition: all 500ms ease-out;">
                      </div>
                    </div>
                  </div>
                  <!-- <div class="pd-15">
                <div
                  class="btn presenbtn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative"
                  style="border-radius: 20px; background-color: #eec2c5; width: 100%; overflow: hidden; border: solid 2px white">
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18 presentx"
                      style="letter-spacing: -1px; color: white; line-height: 1.2;">Mulai kerja
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: rgba(255,255,255,0.9);">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">Waktu masuk normal</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
                    style="background-color: #0178fa; padding-top: 11px; padding-bottom: 15px; width: 100%; height: 100%; transition: all 500ms ease-out;">
                  </div>
                </div>
              </div> -->
                  <!-- <div class="pd-15">
                <div
                  class="btn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative new-shadow-btn"
                  style="border-radius: 20px; background-color: white; width: 100%; overflow: hidden;">
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18" style="letter-spacing: -1px; color: #0168fa; line-height: 1.2;">Akhiri kerja
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: #0168fa;">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light" style="color: #0168fa;">6 menit sebelum
                        terlambat</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute"
                    style="background-color: white; padding-top: 11px; padding-bottom: 15px; width: 60%; height: 100%;">
                  </div>
                </div>
              </div> -->
                </div>

                <div class="d-none d-lg-block wd-100p card static bd-0 mg-t-10"
                  style="border-radius: 30px; padding: 0px !important; max-width: 370px; min-width: 370px;">
                  <div class="wd-100p pd-20 d-flex justify-content-between align-items-center">
                    <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px;">Realisasi Kerja</div>
                    <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                      title="Menuju modul absensi"
                      style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                      <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                    </div>
                  </div>
                  <div class="wd-100p d-flex flex-column">
                    <div class="wd-100p"
                      style="border-radius: 30px; box-shadow: rgba(17, 12, 46, 0.04) 0px 4px 50px 0px; background-color: white;">
                      <div class="wd-100p d-flex flex-column mg-b-5">
                        <div class="rc1 wd-100p card-bg-color"
                          style="border-radius: 20px; padding-top: 0px !important;">
                          <div class="wd-100p d-flex flex-column">

                            <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                              style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                              <div class="d-flex align-items-center ht-100p pd-l-0">
                                <div
                                  class="rkstatus d-flex align-items-center justify-content-around mg-r-10 mg-l-2 pd-x-8"
                                  style="border-radius: 12px; background-color: #e7f0ff; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                                  <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                                  <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                                  <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                                </div>
                                <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                                  style="min-height: 42px;">
                                  <div class="tx-poppins tx-medium tx-16">
                                    Template myITS Worktime
                                  </div>
                                  <div class="tx-poppins tx-14 tx-color-03">
                                    Dalam Pengerjaan
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                              style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                              <div class="d-flex align-items-center ht-100p pd-l-0">
                                <div
                                  class="rkstatus d-flex align-items-center justify-content-around mg-r-10 mg-l-2 pd-x-8"
                                  style="border-radius: 12px; background-color: #e7f0ff; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                                  <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                                  <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                                  <div class="ht-8 wd-8" style="background-color: #408bfc; border-radius: 50%;"></div>
                                </div>
                                <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                                  style="min-height: 42px;">
                                  <div class="tx-poppins tx-medium tx-16">
                                    Website myITS Design System
                                  </div>
                                  <div class="tx-poppins tx-14 tx-color-03">
                                    Dalam Pengerjaan
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                              style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                              <div class="d-flex align-items-center ht-100p pd-l-0">
                                <div
                                  class="rkstatus d-flex align-items-center justify-content-center mg-r-10 mg-l-2 pd-x-8"
                                  style="border-radius: 12px; background-color: #fff6d9; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                                  <div class="wd-6 mg-r-2"
                                    style="background-color: #ed9d59da; border-radius: 4px; height: 16px;"></div>
                                  <div class="wd-6 mg-l-2"
                                    style="background-color: #ed9d59da; border-radius: 4px; height: 16px;"></div>
                                </div>
                                <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                                  style="min-height: 42px;">
                                  <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                    NEXT.js Frontend Interaction Space Management
                                  </div>
                                  <div class="tx-poppins tx-14 tx-color-03">
                                    Belum Dimulai
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                              style="padding: 20px; text-align: left; color: black; border-radius: 0; border-bottom: 1px solid #f0f0f0">
                              <div class="d-flex align-items-center ht-100p pd-l-0">
                                <div
                                  class="rkstatus d-flex align-items-center justify-content-center mg-r-10 mg-l-2 pd-x-8 pos-relative"
                                  style="border-radius: 12px; background-color: #cbf8ef; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                                  <div class="wd-6 mg-r-2 pos-absolute"
                                    style="top: 21px; left: 16px; background-color: #32ba9e; border-radius: 4px; height: 12px; transform: rotate(-45deg)">
                                  </div>
                                  <div class="wd-6 mg-l-2 pos-absolute"
                                    style="right: 18px; background-color: #32ba9e; border-radius: 4px; height: 23px; transform: rotate(45deg)">
                                  </div>
                                </div>
                                <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                                  style="min-height: 42px;">
                                  <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                    Template myITS Space Management
                                  </div>
                                  <div class="tx-poppins tx-14 tx-color-03">
                                    Selesai
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="btn wd-100p" data-toggle="modal" data-target="#modalRK"
                              style="padding: 20px; text-align: left; color: black; border-radius: 0;">
                              <div class="d-flex align-items-center pd-l-0">
                                <div
                                  class="rkstatus d-flex align-items-center justify-content-center mg-r-10 mg-l-2 pd-x-8 pos-relative"
                                  style="border-radius: 12px; background-color: #cbf8ef; height: 50px; width: 50px; min-width: 50px; min-height: 50px;">
                                  <div class="wd-6 mg-r-2 pos-absolute"
                                    style="top: 21px; left: 16px; background-color: #32ba9e; border-radius: 4px; height: 12px; transform: rotate(-45deg)">
                                  </div>
                                  <div class="wd-6 mg-l-2 pos-absolute"
                                    style="right: 18px; background-color: #32ba9e; border-radius: 4px; height: 23px; transform: rotate(45deg)">
                                  </div>
                                </div>
                                <div class="wd-100p pd-x-10 d-flex flex-column justify-content-between"
                                  style="min-height: 42px;">
                                  <div class="tx-poppins tx-medium tx-16 mg-b-2" style="line-height: 1.1;">
                                    myITS Design System Figma
                                  </div>
                                  <div class="tx-poppins tx-14 tx-color-03 mg-t-2">
                                    Selesai
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="btn wd-100p pd-20 d-flex justify-content-center align-items-center"
                      style="color: black;">
                      <div class="d-flex justify-content-center align-items-center mg-r-8"
                        style="background-color: #408bfc; border-radius: 50%; height: 20px; width: 20px;">
                        <ion-icon name="add" class="tx-14" style="color: white;"></ion-icon>
                      </div>
                      <div class="tx-poppins tx-14 tx-medium">
                        Tambah RK Baru
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="wd-100p ht-30"></div>








          </div>
        </div>
        <!-- Content End -->


      </div>
      <!-- Container Flex End -->




    </div>

    <!-- Footer -->
    <?php include "../partial/footer.php" ?>
    <!-- Footer end -->

  </div>
  <!-- viewport end -->



  <!-- Scripts -->
  <?php include "../partial/script.php" ?>

  <script>
    $(function () {
      'use strict'
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }

    })
  </script>

  <script>
    $(function () {
      'use strict'

      let minuteToday;
      let minuteStartWork;
      let minuteEndWork;
      let wt;
      let wtt;
      const alrdyPres = false;

      const today = new Date();
      let h = today.getHours();
      let m = today.getMinutes();
      let s = today.getSeconds();

      function getDate() {
        const weekdays = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const today = new Date();
        const day = weekdays[today.getDay()]
        const date = today.getDate();
        const month = today.getMonth() + 1;
        const year = today.getFullYear();
        $('.txdate').html(day + ", " + date + "/" + month + "/" + year)
      }

      function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        $('.txtime').html(h + ":" + m + ":" + s)
        setTimeout(startTime, 1000);
        minuteToday = Math.floor(h * 60) + parseInt(m);
      }

      function endTime() {
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        $('.endworktime').html(h + "." + m + " WIB");
        minuteEndWork = Math.floor(h * 60) + parseInt(m);
        let endTimeSurplus = minuteEndWork - 900;
        if (endTimeSurplus < 0) {
          $('.endworktimeplus').html(endTimeSurplus + " menit");
        } else {
          $('.endworktimeplus').html("+" + endTimeSurplus + " menit");
        }
      }

      function startWork() {
        const start = new Date()
        let h = start.getHours();
        let m = start.getMinutes();
        // dev
        h = checkTime(7);
        m = checkTime(35);
        // prod
        // h = checkTime(h);
        // m = checkTime(m);
        $('.startworktime').html(h + "." + m + " WIB");
        minuteStartWork = Math.floor(h * 60) + parseInt(m);
        let startTimeSurplus = minuteStartWork - 450;
        if (startTimeSurplus < 0) {
          $('.startworktimeplus').html(startTimeSurplus + " menit");
        } else {
          $('.startworktimeplus').html("+" + startTimeSurplus + " menit");
        }
      }

      function workLong() {
        let howLong = minuteToday - minuteStartWork;
        let workHour = Math.floor(howLong / 60)
        let workMinute = Math.floor(howLong % 60)
        $('.worklong').html(workHour + " jam " + workMinute + " menit")
        wt = setTimeout(workLong, 1000);
      }

      function checkLateTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        const early = 450;
        const late = 465;
        wtt = setTimeout(checkLateTime, 1000)


        if (!alrdyPres) {
          if ((minuteToday <= early)) {
            $(".presenpercent").css("width", "100%").css("background-color", "#408bfc")
            $(".presentx").text("Mulai kerja");
            $(".presentxsub").text("Waktu masuk normal");
          }
          else if ((minuteToday > early) && (minuteToday <= late)) {
            let tolTime = minuteToday - early;
            let x = (100 / 15) * (tolTime - 15) + 100;
            let btWidth = x + "%"
            $(".presenpercent").css("width", btWidth).css("background-color", "#ff6370")
            $(".presentx").text("Segera mulai kerja!");
            $(".presentxsub").text((15 - tolTime) + " menit sebelum terlambat");
          }
          else if ((minuteToday > late)) {
            let tolTime = minuteToday - early;
            let x = (100 / 15) * (tolTime - 15) + 100;
            let btWidth = x + "%"
            $(".presenpercent").css("width", "100%").css("background-color", "#ff6370")
            $(".presentx").text("Mulai kerja sekarang!");
            $(".presentxsub").text((tolTime - 15) + " menit terlambat");
          }
        } else {
          clearTimeout(wtt);
          $(".mainpresenbtn").css("pointer-events", "none")
          $(".presenpercent").css("width", "100%").css("background-color", "grey").css("pointer-events", "none")
          $(".presentx").text("Anda telah mengakhiri kerja");
          $(".presentxsub").text("");
        }
      }

      function endTimeout() {
        clearTimeout(wt);
        clearTimeout(wtt);
      }

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i
        };
        return i;
      }

      function spin() {
        $(".mainpresenbtn").addClass("button--loading")
        $(".presenbtncontent").css("opacity", "0")
        $(".presenpercent").css("width", "100%")
      }

      function checkMark() {
        $(".mainpresenbtn").removeClass("button--loading")
        $(".presenpercent").css("width", "100%").css("background-color", "#32ba9e")
        $(".mainpresenbtn").addClass("checkmark").addClass("draw")
        $(".checkmark").toggle()
      }

      function changeColorRed() {
        startWork();
        workLong();
        $(".mainpresenbtn").removeClass("checkmark").removeClass("draw")
        $(".presenbtncontent").css("opacity", "1")
        $(".presenbg").css("background-color", "white")
        $(".presenpercent").css("width", "100%").css("background-color", "#ff6370")
        $(".presentx").text("Akhiri kerja");
        $(".presentxsub").text("Akhiri kerja anda hari ini");
        $(".mainpresenbtn").removeClass("presenbtn").addClass("endpresenbtn")
      }

      function changeButtonDone() {
        $(".mainpresenbtn").removeClass("checkmark").removeClass("draw")
        $(".presenbtncontent").css("opacity", "1")
        $(".mainpresenbtn").css("pointer-events", "none")
        $(".presenpercent").css("width", "100%").css("background-color", "grey").css("pointer-events", "none")
        $(".presentx").text("Kerja diakhiri")
        $(".ionicon").attr("name", "happy")
        $(".presentxsub").text("Selamat beristirahat")

      }

      $(window).on('load', function () {
        startTime();
        getDate();
        checkLateTime();

        $(".mainpresenbtn").click(function () {
          if ($(this).hasClass("presenbtn")) {
            clearTimeout(wtt);
            spin();
            // settimeout cuma dipake buat simulasi animasi
            setTimeout(function () {
              checkMark();
            }, 2200);
            setTimeout(function () {
              changeColorRed();
            }, 4000);
          } else {
            endTime();
            endTimeout();
            spin();
            // settimeout cuma dipake buat simulasi animasi
            setTimeout(function () {
              checkMark();
            }, 1200);
            setTimeout(function () {
              changeButtonDone();
            }, 3000);
          }
        })
      })
    })
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
  <!-- Scripts end -->

</body>
<!-- Body End -->

</html>