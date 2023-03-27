<!-- Sidebar -->
<div class="d-flex flex-column justify-content-start pos-relative"
    style="position: sticky; top: 95px; height: calc(100vh - 120px);">

    <!-- Profile Widget -->
    <div class="d-none d-lg-block">
        <div class="profile pd-b-15 pd-t-5 d-flex justify-content-start align-items-center pos-relative"
            style="padding-left: 4px; width: 224px;">
            <div class="dropdown dropdown-profile">
                <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                    <div class="avatar" style="width: 42px; height: 42px;"><img
                            src="../../assets/img/profile-default.png" class="rounded-circle" alt=""></div>
                </a>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-start mg-l-15 btn-side dropdown-side">
                <div class="tx-color-03 tx-poppins mg-0 tx-12 pd-0" style="line-height: 1.72;">
                    Administrator
                </div>
                <div class="tx-color-01 tx-poppins tx-medium tx-14 pd-0" style="line-height: 1;">
                    Sulthon Nashir
                </div>
            </div>
            <button
                class="btn btn-icon btn-sm btn-its-custom-1 change d-flex tx-color-01 rounded-its-50 align-items-center mg-l-auto mg-r-15 pos-absolute bd-0"
                style="right: -14px; padding: 3px;" type="button" data-toggle="collapse" data-target=""
                aria-expanded="false" aria-controls="" title="Collapse">
                <img src="../../assets/img/chevback.png" style="width: 23px;"></img>
            </button>
        </div>
    </div>
    <!-- Profile Widget End -->

    <!-- Menu Items -->
    <div class="new-sidebar d-none d-lg-block mg-r-20 mg-t-0"
        style="border-radius: 10px; position: sticky; top: 95px; width: 246px; max-height: 90vh; overflow-y: overlay; height: calc(100vh - 120px);">
        <ul class="sidebar-nav" style="border-radius: 10px; position: sticky; top: 0;">

            <li class="nav-item" title=""><a id="beranda-select" href="../beranda"
                    class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                        src="../../assets/img/icon/home.svg" class="wd-20 mg-r-15"><span
                        class="tx-poppins  text-truncate">Beranda</span></a>
            </li>
            <li class="nav-item" title=""><a id="beranda-select" href="../beranda"
                    class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                        src="../../assets/img/berkas.png" class="wd-20 mg-r-15"><span
                        class="tx-poppins  text-truncate">Berkas</span></a>
            </li>

            <div class="pos-relative">
                <li class="nav-item" title=""><a id="komponen-select" href="../komponen"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/beasiswa.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Beasiswa</span></a>
                </li>
                <button
                    class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p btn-side d-flex align-items-center pos-absolute"
                    style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#komponen"
                    aria-expanded="false" aria-controls="komponen">
                    <ion-icon name="chevron-down" class="mg-y-2 tx-18 animate-this dropdown-side"></ion-icon>
                </button>
            </div>
            <div class="collapse pos-relative" id="komponen">
                <li class="nav-item"><a href="../komponen/badge.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Informasi</span></a></li>
                <li class="nav-item"><a href="../komponen/button.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Tawaran</span></a></li>
                <li class="nav-item"><a href="../komponen/card.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Kelola</span></a></li>
                <li class="nav-item"><a href="../komponen/dialog.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Surat</span></a></li>



            </div>
            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../styles"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/kewirausahaan.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Kewirausahaan</span></a>
                </li>
                <button
                    class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p btn-side d-flex align-items-center pos-absolute dropdown-side "
                    style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#styles"
                    aria-expanded="false" aria-controls="komponen" title="Collapse">
                    <ion-icon name="chevron-down" class="mg-y-2 tx-18 dropdown-side"></ion-icon>
                </button>
            </div>
            <div class="collapse pos-relative " id="styles">
                <li class="nav-item"><a href="../styles/warna.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Kegiatan</span></a></li>
                <li class="nav-item"><a href="../styles/tifografi.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Dana Hibah</span></a></li>
                <li class="nav-item"><a href="../styles/ikonografi.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Jadwal SKIM</span></a></li>
            </div>

            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../pattern"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/magang.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Magang</span></a>
                </li>
                <button
                    class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p btn-side d-flex align-items-center pos-absolute dropdown-side"
                    style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#pattern"
                    aria-expanded="false" aria-controls="pattern" title="Collapse">
                    <ion-icon name="chevron-down" class="mg-y-2 tx-18 animate-this dropdown-side"></ion-icon>
                </button>
            </div>
            <div class="collapse pos-relative " id="pattern">
                <li class="nav-item"><a href="../pattern/inputdata.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Beranda</span></a></li>
                <li class="nav-item"><a href="../pattern/dashboard.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Riwayat</span></a></li>

            </div>
            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../foundations"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/portofolio.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">Portofolio</span></a>
                </li>
                <button
                    class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p btn-side d-flex align-items-center pos-absolute dropdown-side"
                    style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#foundations"
                    aria-expanded="false" aria-controls="pattern" title="Collapse">
                    <ion-icon name="chevron-down" class="mg-y-2 tx-18 animate-this dropdown-side"></ion-icon>
                </button>
            </div>
            <div class="collapse pos-relative " id="foundations">
                <li class="nav-item"><a href="../foundations/sizing.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Vaksin COVID-19</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Kompetisi</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Wirausaha</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Magang</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Olahraga</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Kegiatan</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Organisasi Mahasiswa</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Pelatihan</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Pengabdian Masyarakat</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Pertukaran Mahasiswa</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Studi Independen</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Sertifikasi</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Karya Ilmiah</span></a></li>
                <li class="nav-item"><a href="../foundations/scaling.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Buku</span></a></li>
                <li class="nav-item"><a href="../foundations/responsiveness.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">HKI</span></a></li>
            </div>
            <div class="pos-relative">
                <li class="nav-item" title=""><a href="../assets"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><img
                            src="../../assets/img/skem.png" class="wd-20 mg-r-15"><span
                            class="tx-poppins  text-truncate">SKEM</span></a>
                </li>
                <button
                    class="btn btn-icon btn-sm btn-its-custom-1 rounded-its-20p btn-side d-flex align-items-center pos-absolute dropdown-side"
                    style="top: 4px; right: 4px;" type="button" data-toggle="collapse" data-target="#assets"
                    aria-expanded="false" aria-controls="pattern" title="Collapse">
                    <ion-icon name="chevron-down" class="mg-y-2 tx-18 animate-this dropdown-side"></ion-icon>
                </button>
            </div>
            <div class="collapse pos-relative " id="assets">
                <li class="nav-item"><a href="../assets/iconlibrary.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Beranda</span></a></li>
                <li class="nav-item"><a href="../assets/imagelibrary.php"
                        class="nav-link-its nav-link-its-desktop d-flex justify-content-start align-items-center"><span
                            class="tx-poppins tx-medium text-truncate mg-l-35">Lampiran SKI</span></a></li>
            </div>
        </ul>
    </div>
    <!-- Menu Items End -->

</div>