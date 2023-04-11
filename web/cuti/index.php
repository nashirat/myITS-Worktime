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

                <div class="wd-100p pd-x-5 d-flex justify-content-between align-items-center"
                  style="margin-bottom: 40px;">
                  <div class="content-div tx-color-02 pd-t-3">
                    <div>
                      <div class="tx-poppins tx-medium tx-30 tx-md-36 tx-color-01 mg-b-0">Manajemen Cuti</div>
                    </div>
                    <div class="tx-16 tx-md-18 tx-color-01 pd-x-2">Buat dan lihat data cuti anda</div>
                  </div>
                  <a>
                    <div class="btn btn-primary pd-x-20 pd-y-10" style="border-radius: 15px;" data-bs-toggle="modal"
                      data-bs-target="#modalRK">
                      <div class="tx-poppins tx-14">Buat cuti baru</div>
                    </div>
                  </a>
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

                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-mmxl-6 col-mxl-6 rounded-its-10 mg-t-4">
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
                <div class="modal fade" id="modalRK" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" data-backdrop="static" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen modal-fullscreen-its">
                    <div class="modal-content bg-color pd-20 pos-relative">
                      <div class="pos-absolute r-50 t-45">
                        <ion-icon name="close" class="tx-16 btn btn-text-dark" data-bs-dismiss="modal"></ion-icon>
                      </div>
                      <div class="d-flex justify-content-center tx-poppins tx-36 tx-medium mg-t-80 wd-100p">
                        Pembuatan Cuti Baru
                      </div>
                      <div class="d-flex justify-content-center tx-poppins tx-16 mg-b-60 wd-100p">
                        Ikuti langkah-langkah berikut untuk membuat pengajuan cuti baru
                      </div>

                      <!-- <div class="wd-100p d-flex gap-2 flex-wrap justify-content-start align-items-center mg-t-10 mg-b-30">
                    <div class="btn btn-text-dark pd-10 wd-100p bd" style="border-radius: 8px;"><div class="tx-poppins tx-14 tx-medium">Cuti Tahunan</div></div>
                    <div class="btn btn-text-dark pd-10 wd-100p bd" style="border-radius: 8px;"><div class="tx-poppins tx-14 tx-medium">Cuti Besar</div></div>
                    <div class="btn btn-text-dark pd-10 wd-100p bd" style="border-radius: 8px;"><div class="tx-poppins tx-14 tx-medium">Cuti Sakit</div></div>
                    <div class="btn btn-text-dark pd-10 wd-100p bd" style="border-radius: 8px;"><div class="tx-poppins tx-14 tx-medium">Cuti Melahirkan</div></div>
                    <div class="btn btn-text-dark pd-10 wd-100p bd" style="border-radius: 8px;"><div class="tx-poppins tx-14 tx-medium">Cuti Alasan Penting</div></div>
                    <div class="btn btn-text-dark pd-10 wd-100p bd" style="border-radius: 8px;"><div class="tx-poppins tx-14 tx-medium">Cuti di Luar Tanggungan Negara</div></div>
                  </div> -->

                      <div class="wd-100p d-flex justify-content-center mg-b-30">
                        <div class="pd-20" style="border-radius: 20px; max-width: 575px;">
                          <div class="tx-poppins tx-16">
                            Pilih jenis cuti:
                          </div>
                          <div
                            class="wd-100p d-flex gap-2 flex-wrap justify-content-start align-items-center mg-t-10 mg-b-30 pos-relative">
                            <div id="tahunan" class="btn btn-text-dark cuti-select pd-10 wd-100p bd bd-2 pos-relative"
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
                              <div class="tx-poppins tx-14 tx-medium pos-relative">Cuti di Luar Tanggungan Negara</div>
                            </div>
                          </div>
                        </div>
                      </div>




                      <div class="wd-100p d-flex mg-t-5 justify-content-center">
                        <!-- <button class="btn btn-text-dark">
                          <div class="tx-poppins tx-14 tx-medium" data-bs-dismiss="modal">Batal</div>
                        </button> -->
                        <button class="btn btn-secondary cuti-select-btn" style="border-radius: 15px !important;"
                          disabled>
                          <div class="tx-poppins tx-14 tx-medium" style="color: white;">Selanjutnya</div>

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

  <script>
    $(function () {
      'use strict'

      $(".cuti-select").click(function () {
      
        $(this).addClass("buttonselect--loading").siblings().removeClass("buttonselect--loading");

        // case bila tidak dapat ambil cuti

        let id = $(this).attr("id");
        let ids = ".cuti-select#" + id

        if (id == "tahunan") {

          setTimeout(function () {
            $(ids).removeClass("buttonselect--loading").css("background-color", "#e6e9f0").css("border", "2px solid #e6e9f0").css("color", "#9c9ea3").css("pointer-events", "none")
          }, 2200)

        } else {

          setTimeout(function () {
            $(ids).removeClass("buttonselect--loading");
            $(ids).css("border", "2px solid #408bfc").siblings().css("border", "2px solid #e6e9f0")
            $(".cuti-select-btn").removeClass("btn-secondary").addClass("btn-primary");
          }, 2200)


        }

      })





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