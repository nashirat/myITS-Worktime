<!-- Sidebar -->
<div class="d-flex flex-column justify-content-start pos-relative"
    style="position: sticky; top: 95px; height: calc(100vh - 120px); overflow:visible;">

    <!-- Profile Widget -->
    <div class="d-none d-lg-block rounded-its-10" style="margin-left: 13px;">
        <div class="profile mg-b-15 pd-0 pd-l-4 pd-y-4 d-flex justify-content-start align-items-center pos-relative dropdown-link-profile"
            style="width: 226px; border-radius: 10px;">
            <div class="dropdown dropdown-profile wd-100p ht-50 d-flex justify-content-start align-items-center help">
                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="d-flex flex-fill ht-50 dropdown-link">
                    <div class="avatar mg-l-4" style="width: 42px; height: 42px; min-width: 42px;">
                        <img src="../../assets/img/profile-default.png" class="rounded-circle" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-start mg-l-15 btn-side dropdown-side"
                        style="margin-top: -5px;">
                        <div class="tx-color-03 tx-poppins mg-0 tx-12 pd-0 profile-acc" style="line-height: 1.72;">
                            Administrator
                        </div>
                        <div class="tx-color-01 tx-poppins tx-medium tx-14 pd-0 profile-name" style="line-height: 1;">
                            Sulthon Nashir
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item item-sidebar tx-color-01 tx-medium tx-14 rounded-its-10"
                        style="padding: 7px 10px;" margin: 0px;" href="#">
                        <ion-icon name="person-circle" class="tx-24" style="margin-right: 12px;"></ion-icon>Profil Saya
                    </a>
                    <a class="dropdown-item item-sidebar tx-color-01 tx-medium tx-14 rounded-its-10"
                        style="padding: 7px 10px;" href="#">
                        <ion-icon name="finger-print" class="tx-24" style="margin-right: 12px;"></ion-icon>Ubah Akses
                    </a>
                    <a class="dropdown-item item-sidebar tx-color-01 tx-medium tx-14 rounded-its-10"
                        style="padding: 7px 10px;" href="#">
                        <ion-icon name="log-out" class="tx-24" style="margin-right: 12px;"></ion-icon>Keluar
                    </a>

                </div>
            </div>
            <button
                class="btn btn-icon btn-sm btn-its-custom-1 change d-flex tx-color-01 rounded-its-50 align-items-center mg-l-auto mg-r-15 pos-absolute bd-0"
                style="right: -10px; padding: 3px; top: 14px;" type="button" data-toggle="collapse" data-target=""
                aria-expanded="false" aria-controls="" title="Collapse">
                <img src="../../assets/img/chevback.png" style="width: 23px;"></img>
            </button>
        </div>
    </div>
    <!-- Profile Widget End -->

    <!-- Menu Items -->
    <div class="new-sidebar d-none d-lg-block mg-r-20 mg-t-0"
        style="border-radius: 10px; position: sticky; top: 95px; width: 261px; height: 100vh; overflow-y: overlay;">
        <ul class="sidebar-nav mg-l-15" style="overflow: visible; position: relative;">

            <li class="nav-item" title=""><a id="beranda-select" href="../beranda"
                    class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                        src="../../assets/img/icon/home.svg" class="wd-20 mg-r-15"><span
                        class="tx-poppins  text-truncate">Beranda</span></a>
            </li>

            <div class="pos-relative">
                <li class="nav-item" title=""><a id="kelolaruang-select" href="../kelolaruang"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/icon/kelolaruang.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Presensi</span></a>
                </li>
                <button
                    class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p btn-side d-flex align-items-center pos-absolute"
                    style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#kelolaruang"
                    aria-expanded="false" aria-controls="kelolaruang">
                    <ion-icon name="chevron-down" class="mg-y-2 tx-18 animate-this dropdown-side"></ion-icon>
                </button>
            </div>
            <div class="collapse pos-relative" id="kelolaruang">
                <li class="nav-item"><a href="../kelolaruang/daftararea.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Daftar Area</span></a></li>
                <li class="nav-item"><a href="../kelolaruang/tambaharea.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Tambah Area</span></a></li>


            </div>

            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../reservasi"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/icon/reservasi.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Realisasi Kerja</span></a>
                </li>

            </div>


            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../reservasi"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/icon/reservasi.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Cuti</span></a>
                </li>

            </div>

            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../rekap"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/icon/rekap.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Shift</span></a>
                </li>

            </div>
            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../rekap"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/icon/rekap.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Perjalanan Dinas</span></a>
                </li>

            </div>


        </ul>
    </div>
    <!-- Menu Items End -->

</div>

<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
</div>