<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "../partial/head.php"?>
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
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
                <a href="index.php" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center mg-r-5 mg-btn-back"><ion-icon name="arrow-back-outline" class="mg-y-2 tx-22"></ion-icon></a>
                <h4 class="tx-poppins tx-medium mg-b-0">Perubahan Rekening</h4>
              </div>
              <div>
                <!-- Kalau ada button di kanan -->
              </div>
            </div>
          </div>
          <!-- Untuk judul halaman. Hanya dipakai jika diperlukan -->

          <div class="row row-sm">

            <!-- Konten buat myITS Payroll -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-20 d-flex align-items-center justify-content-start">
              <a href="#ajuan-update" class="btn btn-its-3 tx-poppins tx-medium d-flex justify-content-center" data-toggle="modal" data-animation="effect-scale"><ion-icon name="add" class="mg-y-1 tx-18 mg-r-5"></ion-icon>Ajukan Perubahan</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-b-10 mg-md-b-20">
              <div class="card bd-0">
                <div class="card-header bd-0 pd-b-5 pd-t-20 d-flex align-items-center justify-content-between">
                  <h5 class="tx-poppins tx-medium mg-b-0">Ajuan Slip Gaji Anda</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive pd-b-10">
                    <table id="example1" class="table table-hover" style="width:100%">
                      <thead>
                        <tr>
                          <th class="table-its wd-10p">No</th>
                          <th class="table-its wd-15p">Tanggal Ajuan</th>
                          <th class="table-its wd-15p">Periode Gaji</th>
                          <th class="table-its wd-15p">Jenis</th>
                          <th class="table-its wd-20p">Keperluan</th>
                          <th class="table-its wd-15p">Status</th>
                          <th class="table-its wd-10p">Unduh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="table-its">1</td>
                          <td class="table-its">10 October 2022</td>
                          <td class="table-its">January 2022</td>
                          <td class="table-its">Slip Gaji</td>
                          <td class="table-its">Tess</td>
                          <td class="table-its"><span class="badge badge-info-transparent tx-12 pd-x-10 pd-y-5 rounded-pill">Diproses</span></td>
                          <td class="table-its">
                            -
                          </td>
                        </tr>
                        <tr>
                          <td class="table-its">2</td>
                          <td class="table-its">10 October 2022</td>
                          <td class="table-its">January 2022</td>
                          <td class="table-its">Slip Gaji</td>
                          <td class="table-its">Tess</td>
                          <td class="table-its"><span class="badge badge-success-transparent tx-12 pd-x-10 pd-y-5 rounded-pill">Disetujui</span></td>
                          <td class="table-its">
                            <form>
                              <button type="submit" class="btn btn-icon pd-0"><div class="avatar" title="Unduh"><span class="avatar-initial rounded-circle btn-its-custom-2 tx-color-01"><ion-icon name="arrow-down" class="tx-18"></ion-icon></span></div></button>
                            </form>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Konten buat myITS Payroll -->

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php include "../partial/footer.php" ?>

    <div class="modal fade effect-scale" id="ajuan-update" tabindex="-1" role="dialog" aria-labelledby="ajuan-update" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tabs-animated">
          <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
            <h5 class="tx-poppins tx-medium mg-b-0">Perubahan Nomor Rekening</h5>
            <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close-sharp" class="mg-y-2 tx-18"></ion-icon></button>
          </div>
          <form>
            <div class="modal-body pd-x-0 pd-b-0">
              <div class="ht-500 ht-md-450 ht-xl-500 ht-xxl-600 pd-x-10 pd-md-x-15" style="overflow-y: auto;">
                <div class="bg-its-icon rounded-its-4 pd-15 mg-b-15">
                  <p class="mg-b-0">Template surat pernyataan. <a href="#" class="tx-medium">Unduh di sini</a>.</p>
                </div>
                <p class="tx-poppins tx-medium tx-15">Informasi Rekening</p>
                <div class="form-group form-floating">
                  <select class="form-select" id="bulan" name="aa" required>
                    <option value="">Pilih bank</option>
                    <option value="1">BNI</option>
                    <option value="2">BSI</option>
                  </select>
                  <label for="bulan">Bank Terbaru</label>
                </div>
                <div class="form-group form-floating">
                  <input type="number" class="form-control" id="no-rek" placeholder="Aa" name="no-rek" required>
                  <label for="no-rek">Nomor Rekening Terbaru</label>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="atas-nama" placeholder="Aa" name="atas-nama" required>
                  <label for="atas-nama">Atas Nama Rekening</label>
                </div>
                <p class="tx-poppins tx-medium tx-15 mg-b-2">Berkas</p>
                <p>Upload Berkas Surat Pernyataan & Screenshot Nomor Buku Rekening Ajuan</p>
                <div class="custom-file mg-b-10">
                  <input type="file" class="custom-file-input" id="filee" accept=".pdf" required>
                  <label class="custom-file-label" for="filee">Pilih berkas</label>
                </div>
                <p class="tx-13 tx-color-03 mg-b-0">*semua berkas dijadikan 1 dalam format PDF, maks 1 mb</p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Ajukan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <?php include "../partial/script.php" ?>
    <script src="../../lib/select2/js/select2.min.js"></script>
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Cari',
            sSearch: '',
            lengthMenu: '_MENU_ data/halaman',
            zeroRecords: 'Tidak ada data.',
            infoEmpty: 'Tidak ada data.',
            info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
            infoFiltered: '(filtered from _MAX_ total records)',
            paginate: { 'first': '<i class="fas fa-angle-double-left"></i>',
                        'last': '<i class="fas fa-angle-double-right"></i>',
                        'next': '<i class="fas fa-angle-right"></i>',
                        'previous': '<i class="fas fa-angle-left"></i>'
                      },
          },
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });

    </script>

  </body>
</html>
