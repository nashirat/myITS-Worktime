<header
    class="navbar navbar-header navbar-header-fixed pos-fixed z-index-10 wd-100p t-0 d-flex flex-column blur-transparent justify-content-center align-items-center"
    style="max-height: 100vh; height: auto;">
    <div id="navbar" class="d-flex justify-content-between wd-100p mg-0 mg-xl-r-30 pd-y-13">

        <div class="d-flex align-items-center">
            <!-- <a href="#menu-sidebar" class="btn btn-icon btn-its-custom-1 off-canvas-menu rounded-its-50p d-flex align-items-center"><ion-icon name="menu" class="mg-y-2 tx-18"></ion-icon></a> -->
            <a href="../beranda" class="d-flex justify-content-center align-items-center">
                <img src="../../assets/img/logo-myits-blue.svg" class="wd-55 mg-t-5">
                <!-- <img src="../../assets/img/logo-myits-white1.svg" class="wd-55 mg-t-5"> -->
                <p class="tx-poppins tx-medium tx-20 tx-color-01 mg-b-0 mg-l-8">Design System</p>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div class="d-lg-none">
                <a class="tx-color-01" type="button" data-toggle="collapse" data-target="#mobilemenu"
                    aria-expanded="false" aria-controls="komponen">
                    <div class="dropdown nav-menu">
                        <ion-icon name="chevron-down" class="tx-26 mg-t-5"></ion-icon>
                    </div>
                </a>
            </div>
            <!-- <div class="d-none d-lg-block">
                <div class="dropdown dropdown-profile">
                    <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                        <div class="avatar avatar-sm"><img src="../../assets/img/profile-default.png"
                                class="rounded-circle" alt=""></div>
                        <ion-icon name="settings" class="tx-20 tx-color-03"></ion-icon>
                    </a>
                </div>
            </div> -->
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
                    <li class="nav-item" title=""><a href="../komponen"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/icon/apps.svg" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Komponen</span></a>
                    </li>
                    <button
                        class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p d-flex align-items-center pos-absolute"
                        style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#komponen"
                        aria-expanded="false" aria-controls="komponen" title="Collapse">
                        <ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon>
                    </button>
                </div>
                <div class="collapse pos-relative" id="komponen">
                    <li class="nav-item"><a href="../komponen/button.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Button</span></a></li>
                    <li class="nav-item"><a href="../komponen/dialog.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Dialog</span></a></li>
                    <li class="nav-item"><a href="../komponen/badge.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Badge</span></a></li>
                    <li class="nav-item"><a href="../komponen/card.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Card</span></a></li>
                    <li class="nav-item"><a href="../komponen/selector.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Selector</span></a></li>
                    <li class="nav-item"><a href="../komponen/tab.php" href="tab.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Tab</span></a></li>
                    <li class="nav-item"><a href="../komponen/topbar.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Topbar</span></a></li>
                    <li class="nav-item"><a href="../komponen/sidemenu.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Sidemenu</span></a></li>
                    <li class="nav-item"><a href="../komponen/inputfield.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Input Field</span></a></li>
                    <li class="nav-item"><a href="../komponen/table.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Table</span></a></li>
                </div>
                <div class="pos-relative">
                    <li class="nav-item" title=""><a href="../styles"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/icon/paintbrush.png" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Style</span></a>
                    </li>
                    <button
                        class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p d-flex align-items-center pos-absolute"
                        style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#styles"
                        aria-expanded="false" aria-controls="komponen" title="Collapse">
                        <ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon>
                    </button>
                </div>
                <div class="collapse pos-relative " id="styles">
                    <li class="nav-item"><a href="../styles/warna.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Warna</span></a></li>
                    <li class="nav-item"><a href="../styles/tifografi.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Tifografi</span></a></li>
                    <li class="nav-item"><a href="../styles/ikonografi.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Ikonografi</span></a></li>
                    <li class="nav-item"><a href="../styles/elevasi.php"
                            class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Elevasi</span></a></li>
                </div>

                <div class="pos-relative">
                    <li class="nav-item" title=""><a href="../pattern"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/icon/pattern.png" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Pattern</span></a>
                    </li>
                    <button
                        class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p d-flex align-items-center pos-absolute"
                        style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#pattern"
                        aria-expanded="false" aria-controls="pattern" title="Collapse">
                        <ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon>
                    </button>
                </div>
                <div class="collapse pos-relative" id="pattern">
                    <li class="nav-item"><a class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Input Data</span></a></li>
                    <li class="nav-item"><a class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Setting</span></a></li>
                </div>
                <div class="pos-relative">
                    <li class="nav-item" title=""><a href="../foundations"
                            class="nav-link-its d-flex justify-content-start align-items-center"><img
                                src="../../assets/img/foundations.png" class="wd-20 mg-r-15"><span
                                class="tx-poppins  text-truncate">Foundations</span></a>
                    </li>
                    <button
                        class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p d-flex align-items-center pos-absolute"
                        style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#foundations"
                        aria-expanded="false" aria-controls="pattern" title="Collapse">
                        <ion-icon name="chevron-down" class="mg-y-2 tx-18"></ion-icon>
                    </button>
                </div>
                <div class="collapse pos-relative" id="foundations">
                    <li class="nav-item"><a class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Sizing</span></a></li>
                    <li class="nav-item"><a class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Scaling</span></a></li>
                    <li class="nav-item"><a class="nav-link-its d-flex justify-content-start align-items-center"><span
                                class="tx-poppins tx-medium text-truncate mg-l-35">Responsiveness</span></a></li>
                </div>
            </ul>
        </div>
    </div>




</header>