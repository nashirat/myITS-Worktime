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

<body class="mn-ht-100v d-flex flex-column">



  <div class="content pd-0 mg-l-0" style="position: relative">
    <!-- Konten dihapus -->
    <div class="content-body pd-0 mg-0 d-flex justify-content-center align-items-start "
      style="min-height: calc(100vh - 80px); overflow: visible">


      <div class="pd-0 mg-0 d-flex justify-content-center align-items-start container-big">
        <?php include "../partial/sidebar.php"?>

        <div class="flex-1 mg-0 pd-x-10 mg-xl-r-50  pd-lg-x-0 pd-xl-x-0 bg-0 pos-relative"
          style="background: none; position: relative;" id="content">
          <div class="d-flex mg-t-90 wd-100p justify-content-between align-items-start pos-relative"
            style="position: relative;">

            <!-- Content -->

            <div id="content-canvas" class="row row-xs bg-0 mg-0 mg-lg-x-10 pd-0 flex-1">



              <div class="wd-100p">
                <div class="pd-x-1">
                  <div class="wd-100p content-div mg-b-50 tx-color-05" id="overview">
                    <div>
                      <div class="tx-poppins tx-medium tx-36 tx-color-01">Warna</div>
                    </div>
                    <div class="tx-roboto tx-24 tx-color-01 mg-b-10">
                      <div class="mg-l-1">Macam warna dan penggunaannya.
                      </div>
                    </div>
                    <div class="wd-100p ht-300 rounded-its-10 align-self-center mg-t-20 mg-b-25"
                      style="background-color: grey;">
                    </div>

                    <!-- Mobile content nav -->
                    <div class="d-lg-none" style="margin-top: 10px; margin-bottom: 22px;">
                      <ul class="sidebar-nav top-nav mg-0 pd-0">
                        <div class="tx-color-03 tx-poppins tx-12" style="padding: 8px 4px; margin: 0px;">Di halaman ini
                        </div>
                        <li class="nav-item top-nav-item" title=""><a href="#tipe"
                            class="nav-link-mobile top-nav-link d-flex justify-content-start align-items-center"
                            style="padding: 8px 4px;"><span class="tx-poppins">Tipe</span></a>
                        </li>
                        <li class="nav-item top-nav-item" title=""><a href="#pg"
                            class="nav-link-mobile top-nav-link d-flex justify-content-start align-items-center"
                            style="padding: 8px 4px;"><span class="tx-poppins  ">Penggunaan</span></a>
                        </li>
                        <li class="nav-item top-nav-item" title=""><a href="#gaya"
                            class="nav-link-mobile top-nav-link d-flex justify-content-start align-items-center"
                            style="padding: 8px 4px;"><span class="tx-poppins  ">Gaya</span></a>
                        </li>
                        <li class="nav-item top-nav-item" title=""><a href="#code"
                            class="nav-link-mobile top-nav-link d-flex justify-content-start align-items-center"
                            style="padding: 8px 4px;"><span class="tx-poppins">Code</span></a>
                        </li>
                      </ul>
                    </div>


                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-y-15 line-height-17">
                      Badge digunakan untuk memberikan suatu informasi yang pendek dan penting kepada user. Informasi
                      ini bisa berupa label, angka, atau sekedar titik merah.
                    </p>

                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-y-15 line-height-17">
                      Informasi yang dapat disajikan dalam badge dapat berupa:
                    </p>
                    <ul>
                      <li>
                        <p class="tx-roboto tx-18 mg-0 pd-0 line-height-17">
                          <a class="tx-medium tx-color-01">Status.</a><a> Status pendek seperti disetujui, ditolak,
                            dsb.</a>
                        </p>
                      </li>
                      <li>
                        <p class="tx-roboto tx-18 mg-0 pd-0 line-height-17">
                          <a class="tx-medium tx-color-01">Angka.</a><a> Menunjukkan jumlah notifikasi baru.</a>
                        </p>
                      </li>
                      <li>
                        <p class="tx-roboto tx-18 mg-0 pd-0 line-height-17">
                          <a class="tx-medium tx-color-01">Simbol.</a><a> Checkmark, X (seperti huruf x), dan lain-lain
                            yang secara umum mudah dikenali.</a>
                        </p>
                      </li>
                      <li>
                        <p class="tx-roboto tx-18 mg-0 pd-0 line-height-17">
                          <a class="tx-medium tx-color-01">Warna.</a><a> Bentuk khusus dari sistem yaitu warna merah
                            bulat dengan outline putih.</a>
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="wd-100p">
                <div class="pd-x-1">
                  <div class="wd-100p content-div mg-b-50 tx-color-05" id="tipe">
                    <div>
                      <div class="tx-poppins tx-medium tx-36 tx-color-01">Tipe</div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 mg-t-10 line-height-17">
                      Badge hanya dibedakan dengan warna, untuk mempermudah asosiasi badge di banyak komponen badge
                      tersebut dipakai.
                    </p>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 mg-t-10 line-height-17">
                      Penggunaan warna badge selayaknya disesuaikan dengan informasi yang secara umum diasosiasikan
                      dengan warna tersebut. Contoh yaitu badge "disetujui" menggunakan warna hijau, badge "menunggu"
                      menggunakan warna kuning, "ditolak" merah, dsb.
                    </p>
                    <div class="row">
                      <div class="col-4 mg-t-10 mg-b-25">
                        <div class="ht-120 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                      <div class="col-4 mg-t-10 mg-b-25">
                        <div class="ht-120 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                      <div class="col-4 mg-t-10 mg-b-25">
                        <div class="ht-120 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 line-height-17">
                      Tidak seperti button, badge sebaiknya tidak diberikan kostumisasi yang berbeda dari yang tersedia.
                    </p>
                  </div>
                </div>
              </div>

              <div class="wd-100p">
                <div class="pd-x-1">
                  <div class="wd-100p content-div mg-b-50 tx-color-05" id="pg">
                    <div>
                      <div class="tx-poppins tx-medium tx-36 tx-color-01">Penggunaan</div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 mg-t-10 line-height-17 ">
                      Badge dapat digunakan di hampir semua komponen-komponen lain, yang bersifat sebagai wadah (card,
                      topbar, label, dsb).

                    </p>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 mg-t-10 line-height-17 ">
                      Peletakan badge tergantung dari bentuk dan jenis data yang ada pada badge. Badge dapat berada
                      disamping sebuah label, ada di bawah card tertentu, atau titik merah di pojok kanan icon.
                    </p>
                    <div class="row">
                      <div class="col-6 mg-t-10 mg-b-25">
                        <div class="ht-250 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                      <div class="col-6 mg-t-10 mg-b-25">
                        <div class="ht-250 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                      <div class="col-6 mg-t-10 mg-b-25">
                        <div class="ht-250 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                      <div class="col-6 mg-t-10 mg-b-25">
                        <div class="ht-250 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 line-height-17 ">
                      Perlu diperhatikan, jika banyak badge pada satu halaman/komponen, maka hanya beri badge pada
                      informasi yang masih dapat berganti saja. Seperti jika label data sudah disetujui tidak perlu
                      diberi badge, tetapi jika masih menunggu/ditolak perlu diberi badge.
                    </p>
                    <div class="row">
                      <div class="col-6 mg-t-10 mg-b-25">
                        <div class="ht-150 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                      <div class="col-6 mg-t-10 mg-b-25">
                        <div class="ht-150 rounded-its-10" style="background-color: grey;"></div>
                      </div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 line-height-17 ">
                      Info "disetujui" dapat diberikan pada card dimana label tersebut terletak, atau notifikasi singkat
                      ketika data berubah.
                    </p>

                  </div>
                </div>
              </div>

              <div class="wd-100p">
                <div class="pd-x-1">
                  <div class="wd-100p content-div mg-b-50 tx-color-05" id="gaya">
                    <div>
                      <div class="tx-poppins tx-medium tx-36 tx-color-01">Gaya</div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 mg-t-10 line-height-17">
                      Seluruh data terkait gaya visual badge.
                    </p>

                    <div class="wd-100p ht-600 rounded-its-10 align-self-center mg-t-10 mg-b-25"
                      style="background-color: grey;">
                    </div>


                  </div>
                </div>
              </div>

              <div class="wd-100p">
                <div class="pd-x-1">
                  <div class="wd-100p content-div mg-b-50 tx-color-05" id="code">
                    <div>
                      <div class="tx-poppins tx-medium tx-36 tx-color-01">Code</div>
                    </div>
                    <p class="tx-roboto tx-18 mg-0 pd-0 mg-b-15 mg-t-10 line-height-17">
                      HTML Code untuk setiap jenis badge.
                    </p>

                    <div class="wd-100p ht-600 rounded-its-10 align-self-center mg-t-10 mg-b-25"
                      style="background-color: grey;">
                    </div>


                  </div>
                </div>
              </div>







            </div>



            <!-- </div> -->

            <!-- Right Nav -->
            <div class="d-none d-lg-block mg-r-15 mg-t-0" style="position: sticky; top: 90px;">
              <ul class="sidebar-nav right-nav mg-0 pd-0">
                <div class="tx-color-03 tx-poppins tx-12" style="padding: 8px 10px; margin: 0px;">Di halaman ini</div>
                <li class="nav-item right-nav-item" title=""><a id="overviewP" href="#overview"
                    class="nav-link-its active right-nav-link d-flex justify-content-start align-items-center"
                    style="padding: 8px 10px; margin: 0px;"><span class="tx-poppins">Pratinjau</span></a>
                </li>
                <li class="nav-item right-nav-item" title=""><a id="tipeP" href="#tipe"
                    class="nav-link-its right-nav-link d-flex justify-content-start align-items-center"
                    style="padding: 8px 10px; margin: 0px;"><span class="tx-poppins">Tipe</span></a>
                </li>
                <li class="nav-item right-nav-item" title=""><a id="pgP" href="#pg"
                    class="nav-link-its right-nav-link d-flex justify-content-start align-items-center"
                    style="padding: 8px 10px; margin: 0px;"><span class="tx-poppins">Penggunaan</span></a>
                </li>
                <li class="nav-item right-nav-item" title=""><a id="gayaP" href="#gaya"
                    class="nav-link-its right-nav-link d-flex justify-content-start align-items-center"
                    style="padding: 8px 10px; margin: 0px;"><span class="tx-poppins">Gaya</span></a>
                </li>
                <li class="nav-item right-nav-item ht-10" title=""><a id="codeP" href="#code"
                    class="nav-link-its right-nav-link d-flex justify-content-start align-items-center"
                    style="padding: 8px 10px; margin: 0px;"><span class="tx-poppins">Code</span></a>
                </li>
              </ul>
            </div>
          </div>







        </div><!-- row -->
      </div>


    </div>
    <!-- 
      <div class="new-sidebar mg-t-0" style="z-index: 1030; border-radius: 10px; position: sticky; top: 90px; ">
        <ul class="sidebar-nav mg-r-20" style="min-height: 600px; max-height: 90vh; overflow-y: auto;">
          
        </ul>
      </div> -->

    <!-- container -->
  </div>
  <?php include "../partial/footer.php" ?>
  <?php include "../partial/script.php" ?>

  <script>
    $(function () {
      'use strict'

      /**
       * Define global variable
       * @threshold for saving threshold values for observer
       * @centry for saving the active class target
       * @myList for saving intersectionRatio of all oberserved entries
       */
      var threshold = []
      var centry = null
      var myList = []

      for (var i = 0; i <= 100; i++) {
        threshold.push(i / 100)
      }

      let options = {
        root: null,
        rootMargin: '0px',
        threshold: [0, 1, 0.2, 0.4, 0.5, 0.6, 0.7, 0.8, 1.0]
      }

      let callback = (entries, observer) => {
        entries.forEach((entry) => {
          myList[entry.target.id] = entry
        });

      }
      let content_observer = new IntersectionObserver(callback, options);

      let content_list = document.querySelectorAll(".content-div")
      content_list.forEach((content, idx) => {
        content_observer.observe(content)
      });

      function doneScroll() {
        var key = null
        for (key in myList) {
          let entry = myList[key]
          if (centry === null) {
            centry = entry
          } else {
            if (entry.intersectionRatio >= centry.intersectionRatio || entry.intersectionRatio >= 0.6) centry =
              entry
          }
        }

        let menuTgt = "#" + centry.target.id + "P";
        $(".right-nav-link").removeClass("active");
        $(".right-nav-link").removeClass("active");
        $(menuTgt).addClass("active");
      }

      var scrollTimer = -1
      $(window).scroll(function () {
        if (scrollTimer != -1) {
          clearTimeout(scrollTimer);
        }
        scrollTimer = window.setTimeout(doneScroll, 10)
      });

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

</body>

</html>