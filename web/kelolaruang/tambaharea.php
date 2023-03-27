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
<?php include "./editmodal.php"?>

<body class="mn-ht-100v d-flex flex-column">


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
              <div class="min-height-fix write-content-here wd-100p">

                <!-- DO NOT CHANGE END -->
                <!-- Write Content Starts Here -->

                <div class="wd-100p pd-l-5" style="margin-bottom: 38px;">
                  <div class="d-flex wd-100p align-items-center justify-content-between content-div tx-color-02 pd-t-3"
                    id="overview">
                    <div class="mg-r-15">
                      <div>
                        <div class="tx-poppins tx-medium tx-30 tx-lg-36 tx-color-01 mg-b-4" style="line-height: 1.2;">
                          Tambah Area Baru</div>
                      </div>
                      <div class="tx-18 tx-color-01 pd-x-2">Tambahkan area baru pada myITS Space Management</div>
                    </div>
                  </div>
                </div>


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
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Nama area selengkapnya"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                            <!-- <div class=" ht-100p mg-l-8">Auditorium Research Center</div> -->

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Kode area</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Kode area jika ada"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Nama gedung</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Nama gedung tempat area berada"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Jenis area</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Auditorium, ruang rapat, ruang kantor, dsb"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Unit organisasi</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Unit pengelola area"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Pengelola</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="PIC area"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Lokasi</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Longitute dan latitude"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>


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
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <textarea type="text" rows="2" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Alamat area selengkap mungkin"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></textarea>

                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Kapasitas</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Kapasitas maksimal area"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>


                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Luas (m)</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <input type="text" value="" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Luas area dalam m2"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></input>


                          </div>
                        </div>
                        <div class="row row-xs wd-100p mg-b-10 rounded-its-10 pd-0 mg-0">
                          <div class="col-12 col-lg-3 pd-y-10">
                            <div class=" ht-100p tx-color-02">Deskripsi</div>
                          </div>
                          <div class="col-12 col-lg-9 pd-y-10 rounded-its-10 input-bg-color inside-border">
                            <textarea type="text" rows="8" class="wd-100p  tx-14 mg-l-4 tx-color-01 tx-medium"
                              placeholder="Deskirpsi area seperlunya"
                              style="border-radius: 10px; background-color: none !important; border: none !important;"></textarea>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="d-flex wd-100p pd-0 pd-t-20 pd-b-10 pd-x-20 mg-0 mg-b-15">
                    <div class="tx-16 tx-poppins tx-medium tx-color-01">Foto Area</div>
                  </div>
                  <div class="wd-100p row row-xs mg-0 pd-x-20 mg-b-15">
                    <div class="col-12 col-md-6 col-lg-3 mg-0 mg-t-15 mg-lg-t-0 pd-0">
                      <div class="wd-100p rounded-its-10 ht-200 d-flex justify-content-center align-items-center">
                        <div
                          class="rounded-its-10 wd-100p ht-100p justify-content-center align-items-center edit-pic trans-all d-flex"
                          style="background-color: rgba(0,0,0,0.06);">
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
                  <div class="d-flex wd-100p pd-0 pd-t-20 pd-b-10 pd-x-20 mg-0 ">
                    <div class="tx-16 tx-poppins tx-medium tx-color-01">Fasilitas Area</div>
                  </div>
                  <div class="rounded-its-10 d-flex wd-100p mg-l-4 pd-0 pd-t-5 pd-x-20 mg-b-10  table-container">
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


                      </tbody>
                    </table>

                  </div>

                </div>

                <div class="wd-100p pd-t-20 pd-b-10 pd-x-20 card static bd-0 add-fas">
                  <div class="tx-poppins tx-14 tx-medium tx-color-01 mg-b-10">Tambah Fasilitas</div>
                  <div class="row row-xs mg-0 pd-0 wd-100p mg-b-5">
                    <div class="col-12 col-md-6 col-lg-2 mg-t-10 mg-t-lg-0">
                      <div class="pd-y-10 rounded-its-10 wd-100p inside-border input-bg-color">
                        <input type="text" value="" placeholder="Nama Barang" class="wd-100p mg-l-8 tx-color-01"
                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 mg-t-10 mg-t-lg-0">
                      <div class="pd-y-10 rounded-its-10 wd-100p inside-border input-bg-color">
                        <input type="text" value="" placeholder="Tipe Barang" class="wd-100p mg-l-8 tx-color-01"
                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 mg-t-10 mg-t-lg-0">
                      <div class="pd-y-10 rounded-its-10 wd-100p inside-border input-bg-color">
                        <input type="text" value="" placeholder="Jumlah" class="wd-100p mg-l-8 tx-color-01"
                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 mg-t-10 mg-t-lg-0">
                      <div class="pd-y-10 rounded-its-10 wd-100p inside-border input-bg-color">
                        <input type="text" value="" placeholder="Keterangan" class="wd-100p mg-l-8 tx-color-01"
                          style="border-radius: 10px; background-color: none !important; border: none !important;"></input>
                      </div>
                    </div>
                    <div class="col-4 col-md-2 col-lg-1 mg-0 pd-y-2 mg-t-15 mg-lg-t-10 mg-b-10 mg-l-auto mg-lg-l-0">
                      <div
                        class="btn btn-primary rounded-its-10 tx-poppins tx-12 wd-100p ht-100p text-align-center vertical-align-middle d-flex align-items-center justify-content-center">
                        Tambah
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="wd-100p d-flex mg-0 mg-b-50 pd-0 justify-content-end mg-t-20 mg-t-lg-0">
                <div class="">

                  <button class="btn btn-danger pd-y-10 pd-x-20 mg-l-10 tx-medium trans-all new-shadow-btn"
                    style="border-radius: 12px;">
                    <div class="tx-poppins tx-14">Batal</div>
                  </button>


                  <button class="btn btn-success pd-y-10 pd-x-20 mg-l-10 tx-medium trans-all new-shadow-btn"
                    style="border-radius: 12px;">
                    <div class="tx-poppins tx-14">Simpan Area</div>
                  </button>

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
      $('.pick-btn').on("click", function () {
        $(this).children('input.uploadfile')[0].click();
      })
    })
  </script>

  <script>
    $(function () {
      'use strict'

      $('.edit-btn').click(function () {
        $('.del-btn').removeClass("d-none").addClass("d-flex");
        $('.edit-pic').removeClass("d-none").addClass("d-flex");
        $('.add-fas').removeClass("d-none");
        $('textarea').attr("", false);
        $('input[type="text"]').attr("", false);
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
        $('textarea').attr("", true);
        $('input[type="text"]').attr("", true);
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
        // bAutoWidth: false,
        // pageLength: 10,
        // pagingType: 'full_numbers',
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