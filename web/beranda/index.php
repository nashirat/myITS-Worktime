<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php"?>
</head>

<!-- Body -->

<body class="mn-ht-100v d-flex flex-column">
  <?php include "../partial/navbar.php"?>

  <?php include "../partial/loading.php"?>


  <div class="content pd-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start"
      style="min-height: calc(100vh - 80px); overflow: visible">


      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big"
        style="min-height: 100vh; overflow:visible;">

        <!-- Sidebar -->
        <?php include "../partial/sidebar.php"?>
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
                <div class="wd-100p d-flex justify-content-between align-items-center">
                  <div class="d-flex flex-column">
                    <div class="tx-poppins tx-14 tx-medium">Mulai kerja</div>
                    <div class="tx-poppins tx-14 startworktimeplus"></div>
                  </div>
                  <div class="tx-poppins tx-22 tx-medium startworktime" style="letter-spacing: -1px;"> --.--
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
                    <div class="tx-poppins tx-14 tx-medium">Lama kerja</div>
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
                  <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
                    style="z-index: 20 !important; padding-top: 11px; padding-bottom: 11px;">
                    <div class="tx-poppins tx-18 presentx"
                      style="letter-spacing: -1px; color: white; line-height: 1.2;">Mulai kerja
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <ion-icon name="time" class="tx-16 mg-r-4 pd-b-1" style="color: rgba(255,255,255,0.9);">
                      </ion-icon>
                      <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">Waktu
                        masuk normal</div>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
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
            <div class="d-lg-none wd-100p card static bd-0 mg-t-15"
              style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-20 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Rencana Kerja</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="rc1 wd-100p card-bg-color"
                  style="border-radius: 20px; padding: 15px !important; padding-top: 0px !important;">
                  <div class="wd-100p d-flex flex-column"
                    style="background-color: #f4f4f4; border-radius: 20px; padding: 10px; gap: 8px;">
                    <div class="btn wd-100p card static bd-0"
                      style="box-shadow: rgba(17, 12, 46, 0.045) 0px 4px 28px 0px; border-radius: 15px; padding: 10px; text-align: left; color: black;">
                      <div class="d-flex align-items-center ht-100p pd-l-4">
                        <div class="rkstatus d-flex align-items-center justify-content-center"
                          style="border-radius: 50%; background-color: #ff994d; height: 12px; width: 12px; min-height: 12px; min-width: 12px;">
                        </div>
                        <div class="wd-100p pd-x-10 d-flex">
                          <div class="tx-poppins tx-medium tx-14">
                            Dashoard myITS Worktime
                          </div>
                        </div>
                        <div class="wd-20 d-flex align-items-center">
                          <ion-icon name="ellipsis-vertical"></ion-icon>
                        </div>
                      </div>
                    </div>
                    <div class="btn wd-100p card static bd-0 d-flex"
                      style="box-shadow: rgba(17, 12, 46, 0.045) 0px 4px 28px 0px; border-radius: 15px; padding: 10px; text-align: left; color: black;">
                      <div class="d-flex align-items-center ht-100p pd-l-4">
                        <div class="rkstatus d-flex align-items-center justify-content-center"
                          style="border-radius: 50%; background-color: #0168fa; height: 12px; width: 12px; min-height: 12px; min-width: 12px;">
                        </div>
                        <div class="wd-100p pd-x-10 d-flex">
                          <div class="tx-poppins tx-medium tx-14">
                            Website dokumentasi myITS Design System
                          </div>
                        </div>
                        <div class="wd-20 d-flex align-items-center">
                          <ion-icon name="ellipsis-vertical"></ion-icon>
                        </div>
                      </div>
                    </div>
                    <div class="btn wd-100p card static bd-0 d-flex"
                      style="box-shadow: rgba(17, 12, 46, 0.045) 0px 4px 28px 0px; border-radius: 15px; padding: 10px; text-align: left; color: black;">
                      <div class="d-flex align-items-center ht-100p pd-l-4">
                        <div class="rkstatus d-flex align-items-center justify-content-center"
                          style="border-radius: 50%; background-color: #ff994d; height: 12px; width: 12px; min-height: 12px; min-width: 12px;">
                        </div>
                        <div class="wd-100p pd-x-10 d-flex">
                          <div class="tx-poppins tx-medium tx-14">
                            myITS Design System
                          </div>
                        </div>
                        <div class="wd-20 d-flex align-items-center">
                          <ion-icon name="ellipsis-vertical"></ion-icon>
                        </div>
                      </div>
                    </div>
                    <div class="btn wd-100p card static bd-0"
                      style="box-shadow: rgba(17, 12, 46, 0.045) 0px 4px 28px 0px; border-radius: 15px; padding: 10px; text-align: left; color: black;">
                      <div class="d-flex align-items-center ht-100p pd-l-4">
                        <div class="rkstatus d-flex align-items-center justify-content-center"
                          style="border-radius: 50%; background-color: #1fe2bb; height: 12px; width: 12px; min-height: 12px; min-width: 12px;">
                        </div>
                        <div class="wd-100p pd-x-10 d-flex">
                          <div class="tx-poppins tx-medium tx-14">
                            Frontend aplikasi myITS Space Management
                          </div>
                        </div>
                        <div class="wd-20 d-flex align-items-center">
                          <ion-icon name="ellipsis-vertical"></ion-icon>
                        </div>
                      </div>
                    </div>
                    


                  </div>
                  
                  <!-- <div class="wd-100p d-flex mg-t-15">
                    <div class="wd-100p d-flex pd-r-10">
                      <div class="wd-100p"
                        style="background-color: #f7f7f7; border-radius: 15px; box-shadow: rgba(17, 12, 46, 0.01) 0px 4px 20px 0px inset; height: 45px;">
                      </div>

                    </div>
                    <div class="btn d-flex justify-content-center align-items-center"
                      style="min-height: 45px; min-width: 45px; height: 45px; width: 45px; border-radius: 15px; background-color: white;">
                      <ion-icon name="add" class="wd-30 ht-30" style="color: black;"></ion-icon></div>
                  </div> -->

                  <div class="wd-100p ht-150"></div>
                  
                </div>
              </div>
            </div>

            <!-- <div class="mg-l-10 d-flex align-items-center justify-content-between mg-b-15 mg-t-20 ht-50">
              <div class="d-flex align-items-center justify-content-start">
                
              </div>
            </div> -->

            <div class="d-lg-none wd-100p card static bd-0 mg-t-15"
              style="border-radius: 30px; padding: 0px !important;">
              <div class="wd-100p pd-20 d-flex justify-content-between align-items-center">
                <div class="tx-poppins tx-20 tx-medium" style="letter-spacing: -1px;">Informasi Cuti</div>
                <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                  title="Menuju modul absensi"
                  style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                  <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                </div>
              </div>
              <div class="wd-100p d-flex flex-column">
                <div class="rc1 wd-100p ht-600 card-bg-color"
                  style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.07) 0px 12px 45px 0px;"></div>
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
              <div class="d-none d-lg-block wd-100p pd-r-15">
                <div class="tx-poppins tx-26 tx-medium mg-b-10 pd-l-5" style="letter-spacing: -1px;">
                  Informasi
                </div>
                <div class="wd-100p bd-0 d-flex" style="border-radius: 30px; margin: 0px; padding: 0px;">
                  <div class="wd-100p pd-r-8">
                    <div class="card static bd-0" style=" border-radius: 30px; height: 250px;"></div>
                  </div>
                  <div class="wd-100p pd-l-8">
                    <div class="card static bd-0" style=" border-radius: 30px; height: 250px;"></div>
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
                        <div class="tx-poppins tx-14 tx-medium">Lama kerja</div>
                      </div>
                      <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px;">
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
                          <div class="tx-poppins tx-14 tx-light presentxsub" style="color: rgba(255,255,255, 0.9);">6
                            menit
                            sebelum
                            terlambat</div>
                        </div>
                      </div>
                      <div
                        class="d-flex flex-column justify-content-center align-items-center pos-absolute presenpercent"
                        style="background-color: #ff6f7a; padding-top: 11px; padding-bottom: 15px; width: 60%; height: 100%; transition: all 500ms ease-out;">
                      </div>
                    </div>
                  </div> -->
                  <div class="pd-x-15 pd-b-15 pd-t-15">
                    <div
                      class="btn mainpresenbtn presenbtn pd-0 mg-0 d-flex flex-column justify-content-center align-items-start pos-relative"
                      style="border-radius: 20px; background-color: #eec2c5; width: 100%; overflow: hidden; border: solid 2px white">
                      <div class="wd-100p d-flex flex-column justify-content-center align-items-center"
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

                <div class="d-none d-lg-block wd-100p card static bd-0 mg-t-15"
                  style="border-radius: 30px; padding: 0px !important; max-width: 370px; min-width: 370px;">
                  <div class="wd-100p pd-20 d-flex justify-content-between align-items-center">
                    <div class="tx-poppins tx-22 tx-medium" style="letter-spacing: -1px;">Rencana Kerja</div>
                    <div class="btn ht-40 wd-40 card-bg-color d-flex justify-content-center align-items-center"
                      title="Menuju modul absensi"
                      style="border-radius: 12px; box-shadow: rgba(17, 12, 46, 0.045) 0px 8px 30px 0px; padding: 8px; color: black; z-index: 10 !important;">
                      <ion-icon class="tx-16 wd-20 ht-30" name="chevron-forward"></ion-icon>
                    </div>
                  </div>
                  <div class="wd-100p d-flex flex-column">
                    <div class="rc1 wd-100p ht-350 card-bg-color"
                      style="border-radius: 20px; box-shadow: rgba(17, 12, 46, 0.07) 0px 12px 45px 0px;"></div>
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
      $(".mainpresenbtn").click(function () {

        if ($(this).hasClass("presenbtn")) {
          $(".presenbg").css("background-color", "#fc5260")
          $(".presenpercent").css("width", "100%").css("background-color", "#fc5260")
          $(".presentx").text("Akhiri kerja");
          $(".presentxsub").text("Akhiri kerja anda sekarang");
          $(this).removeClass("presenbtn").addClass("endpresenbtn")
        } else {
          $(".presenbg").css("background-color", "white")
          $(".presenpercent").css("width", "100%").css("background-color", "#0168fa")
          $(".presentx").text("Mulai kerja");
          $(".presentxsub").text("Waktu kerja normal");
          $(this).removeClass("endpresenbtn").addClass("presenbtn");
        }
      })

    })
  </script>

  <script>
    $(function () {
      'use strict'

      let minuteToday;
      let minuteStartWork;

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

      function startWork() {
        const start = new Date()
        let h = start.getHours();
        let m = start.getMinutes();
        // dev
        h = 7;
        m = 32;
        // prod
        // h = checkTime(h);
        // m = checkTime(m);
        $('.startworktime').html(h + "." + m + " WIB");
        minuteStartWork = Math.floor(h * 60) + parseInt(m);
        let startTimeSurplus = minuteStartWork - 450;
        $('.startworktimeplus').html("+" + startTimeSurplus + " menit");
      }

      function workLong() {
        let howLong = minuteToday - minuteStartWork;
        let workHour = Math.floor(howLong / 60)
        let workMinute = Math.floor(howLong % 60)
        $('.worklong').html(workHour + " jam " + workMinute + " menit")
        setTimeout(workLong, 1000);
      }

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i
        };
        return i;
      }

      $(window).on('load', function () {
        startTime();
        getDate();
        $('.presenbtn').click(function () {
          startWork();
          workLong();
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