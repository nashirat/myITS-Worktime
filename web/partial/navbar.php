<header
    class="navbar navbar-header navbar-header-fixed pos-fixed z-index-10 wd-100p t-0 d-flex flex-column blur-transparent justify-content-center align-items-center"
    style="max-height: 100vh; height: auto;">
    <div id="navbar" class="d-flex justify-content-between wd-100p mg-0 mg-xl-r-30 pd-y-13">

        <div class="d-flex align-items-center">

            <a href="../beranda" class="d-flex justify-content-center align-items-center">
                <img src="../../assets/img/logo-myits-blue.svg" class="wd-55 mg-t-5">
                <p class="tx-poppins tx-medium tx-20 tx-color-01 mg-b-0 mg-l-8">Worktime</p>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div class="d-lg-none">
                <a class="tx-color-01" type="button" data-bs-toggle="collapse" data-bs-target="#mobilemenu"
                    aria-expanded="false" aria-controls="komponen">
                    <div class="dropdown nav-menu">
                        <ion-icon name="chevron-down" class="tx-26 mg-t-5"></ion-icon>
                    </div>
                </a>
            </div>
            <div class="d-none d-lg-block">
            </div>
        </div>
    </div>
    <div class="collapse" id="mobilemenu" style="border-bottom: solid 0.6px #424242">
        <div class="d-flex justify-content-center pd-l-10 pd-r-15 pd-b-20 wd-100p"
            style="max-height: calc(100vh - 121px); overflow: auto;">
            <ul class="sidebar-nav wd-100p" style="border-radius: 10px;">
                <li class="nav-item" title=""><a href="../beranda"
                        class="nav-link-its d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/icon/home.svg" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Beranda</span></a>
                </li>

                <div class="pos-relative">
                    <li class="nav-item" title=""><a href="../kelolaruang"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/icon/kelolaruang.png" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Kelola Ruang</span></a>
                    </li>
                    <button
                        class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p d-flex align-items-center pos-absolute"
                        style="top: 4px; right: 4px;" type="button" data-bs-toggle="collapse" data-bs-target="#komponen"
                        aria-expanded="false" aria-controls="komponen" title="Collapse">
                        <ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon>
                    </button>
                </div>
                <div class="collapse pos-relative" id="komponen">
                    <li class="nav-item"><a href="../kelolaruang/daftararea.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Daftar Area</span></a></li>
                    <li class="nav-item"><a href="../kelolaruang/tambaharea.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Tambah Area</span></a></li>
                    
                </div>
                <div class="pos-relative">
                    <li class="nav-item" title=""><a href="../reservasi"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/icon/reservasi.png" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Reservasi</span></a>
                    </li>
                    
                </div>
                

                <div class="pos-relative">
                    <li class="nav-item" title=""><a href="../rekap"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/icon/rekap.png" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Rekap</span></a>
                    </li>
                   
                </div>
               
            </ul>
        </div>
    </div>




</header>