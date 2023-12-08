<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/argon/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/argon/assets/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets/argon/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/argon/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/argon/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>assets/argon/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= base_url('admin/dashboard') ?>">
                <span class="ms-1 font-weight-bold">PANEL ADMIN</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('admin/dashboard') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manajemen Surat</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/surat/pengajuan') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengajuan Surat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/surat/surat_masuk') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Masuk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/surat/surat_keluar') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Keluar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/surat/surat_keterangan') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Keterangan</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manajemen Website</h6>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link collapsed" aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Konten</span>
                    </a>
                    <div class="collapse" id="pagesExamples" style="">
                        <ul class="nav ms-4">
                            <li class="nav-item">
                                <a class="nav-link " href="../../pages/pages/users/reports.html">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Struktur Kelurahan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../../pages/pages/users/reports.html">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Struktur LPM </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../../pages/pages/users/reports.html">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Struktur Linmas </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../../pages/pages/users/reports.html">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Pemuda Kelurahan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../../pages/pages/users/reports.html">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Ketua RT/RW </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manajemen Users</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/penduduk') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-people text-success"></i>
                        </div>
                        <span class="nav-link-text ms-1">Penduduk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/pegawai') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-people text-info"></i>
                        </div>
                        <span class="nav-link-text ms-1">Aparat Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/surat/surat_keterangan') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-people text-danger"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengelola Website</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <ul class="navbar-nav justify-content-between">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>

                        <?php if ($this->session->userdata('id_user') == TRUE) : ?>

                            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                                <a href="<?= base_url() ?>logout">
                                    <i class="bi bi-power text-white"> Keluar</i>
                                </a>
                            </li>

                        <?php else : ?>

                            <li>
                                <a href="<?= base_url() ?>auth/login">
                                    <i class="bi bi-user">Masuk</i>
                                </a>
                            </li>

                        <?php endif; ?>

                        <!-- <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-power"></i> Keluar

                    </a>
                    </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->