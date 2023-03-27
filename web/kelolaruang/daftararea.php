<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../partial/head.php"?>

  <style>

  </style>

</head>

<?php include "../partial/navbar.php"?>
<?php include "../partial/backtotop.php"?>

<body class="mn-ht-100v d-flex flex-column">


  <?php include "../partial/loading.php"?>


  <!-- DO NOT CHANGE -->
  <div class="content pd-0 mg-l-0" style="position: relative">
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start "
      style="min-height: calc(100vh - 80px); overflow: visible">
      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big">
        <?php include "../partial/sidebar.php"?>
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

                <div class="wd-100p pd-x-5" style="margin-bottom: 40px;">
                  <div
                    class="wd-100p content-div tx-color-02 pd-t-3 d-flex justify-content-between align-items-center flex-wrap"
                    id="overview">
                    <div>
                      <div class="tx-poppins tx-medium tx-30 tx-md-36 tx-color-01 mg-b-0">Daftar Area</div>
                      <div class="tx-18 tx-color-01 pd-x-2">Cari dan lihat informasi area dalam ITS</div>
                    </div>
                    <a href="./tambaharea.php">
                      <div class="pd-t-12 pd-y-md-8 pd-l-0 pd-l-md-8 edit-btn">
                        <button class="btn btn-primary pd-y-10 pd-x-20 tx-medium trans-all new-shadow-btn"
                          style="border-radius: 12px;">
                          <div class="tx-poppins tx-14">Tambah Area</div>
                        </button>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="wd-100p pd-x-1 mg-b-5">
                  <div class="wd-100p pd-0 mg-0 row row-xs content-div">



                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 col-mmxl-2 col-mxl-2 rounded-its-10"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="unit-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center"
                          padding-left: 12px;">
                          <option value="">Kapasitas</option>
                          <option value="dptsi">
                            <50</option> <option value="its">
                              <100</option> <option value="dptsi">
                                <200</option> <option value="riscen">
                                  <500</option> <option value="its">>500
                          </option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 col-mmxl-2 col-mxl-2 rounded-its-10"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="area-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center"
                          padding-left: 12px;">
                          <option value="">Jenis area</option>
                          <option value="dptsi">Ruang rapat</option>
                          <option value="riscen">Auditorium</option>
                          <option value="its">Ruang kantor</option>
                          <option value="its">Fas. Olaharaga</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 col-mmxl-2 col-mxl-2 rounded-its-10 bd-0"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="gedung-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center">
                          <option value="">Nama Gedung</option>
                          <option value="dptsi">Tower 1</option>
                          <option value="riscen">Research Center</option>
                          <option value="riscen">Tower 2</option>
                          <option value="its">GOR</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 col-mmxl-2 col-mxl-2 rounded-its-10"
                      style="padding: 4px;">
                      <div class="rounded-its-10 wd-100p" style="height: 44px;">
                        <select id="pengelola-select" class="wd-100p ht-100p rounded-its-10 d-flex align-items-center">
                          <option value="">Unit Organisasi</option>
                          <option value="dptsi">DPTSI</option>
                          <option value="its">ITS</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-mmxl-4 col-mxl-4 rounded-its-10 mg-t-4">
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

                <div class="wd-100p pd-r-10 mg-t-10 mg-t-md-0" style="margin-top: -3px;">
                  <div class="table-container rounded-its-10 d-flex wd-100p mg-l-4 pd-20 new-shadow card-bg-color"
                    style=" overflow: auto;">
                    <?php include "./table.php"?>

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
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>


  <!-- Select2 -->
  <script>
    $(function () {
      'use strict'

      $('#unit-select').select2({
        placeholder: 'Kapasitas',
      });
      $('#area-select').select2({
        placeholder: 'Jenis area'
      });
      $('#gedung-select').select2({
        placeholder: 'Nama gedung'
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