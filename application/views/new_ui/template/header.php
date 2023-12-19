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
    <title><?= $title; ?></title>
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
    <style>
        .col-2 {
            flex: 0 0 auto;
            width: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .col-2 img {
            border-radius: 100%;
            height: auto;
            width: 50%;
        }

        .col-10 {
            flex: 0 0 auto;
            width: 90%;
            display: flex;
            align-items: self-start;
            justify-content: center;
            flex-direction: column;
            padding: 0;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?= base_url('admin/dashboard') ?>">
                <span class="font-weight-bold d-flex justify-content-center">PANEL ADMIN</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">

        <!-- Bagian yang menampilkan gambar profil di header panel admin -->
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($this->uri->segment(2) == 'dashboard') ? 'active' : ''; ?>" href="<?= base_url('admin/dashboard') ?>">
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
                    <a class="nav-link <?php echo ($this->uri->segment(3) == 'pengajuan') ? 'active' : ''; ?>" href="<?= base_url('admin/surat/pengajuan') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengajuan Surat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($this->uri->segment(3) == 'surat_masuk' || $this->uri->segment(3) == 'editSuratMasuk' || $this->uri->segment(3) == 'tambah_surat_masuk') ? 'active' : ''; ?>" href="<?= base_url('admin/surat/surat_masuk') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Masuk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($this->uri->segment(3) == 'surat_keluar' || $this->uri->segment(3) == 'editSuratKeluar' || $this->uri->segment(3) == 'tambah_surat_keluar') ? 'active' : ''; ?>" href="<?= base_url('admin/surat/surat_keluar') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Surat Keluar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($this->uri->segment(3) == 'surat_keterangan' || $this->uri->segment(3) == 'editSuratKeterangan' || $this->uri->segment(3) == 'tambah_surat_keterangan') ? 'active' : ''; ?>" href="<?= base_url('admin/surat/surat_keterangan') ?>">
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
                    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link <?php echo ($this->uri->segment(2) == 'profil' || $this->uri->segment(3) == 's_kelurahan' || $this->uri->segment(3) == 's_lpm' || $this->uri->segment(3) == 's_linmas' || $this->uri->segment(3) == 's_pemuda' || $this->uri->segment(3) == 'rt_rw') ? 'active' : ''; ?>" aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Konten</span>
                    </a>
                    <div class="collapse <?php echo ($this->uri->segment(2) == 'profil' || $this->uri->segment(3) == 's_kelurahan' || $this->uri->segment(3) == 's_lpm' || $this->uri->segment(3) == 's_linmas' || $this->uri->segment(3) == 's_pemuda' || $this->uri->segment(3) == 'rt_rw') ? 'show' : ''; ?>" id="pagesExamples">
                        <ul class="nav ms-4">
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($this->uri->segment(2) == 'profil') ? 'active' : ''; ?>" href="<?= base_url('admin/profil') ?>">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Profil Kelurahan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($this->uri->segment(3) == 's_kelurahan') ? 'active' : ''; ?>" href="<?= base_url('admin/galery/s_kelurahan') ?>">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Struktur Kelurahan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($this->uri->segment(3) == 's_lpm') ? 'active' : ''; ?>" href="<?= base_url('admin/galery/s_lpm') ?>">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Struktur LPM </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($this->uri->segment(3) == 's_linmas') ? 'active' : ''; ?>" href="<?= base_url('admin/galery/s_linmas') ?>">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Struktur Linmas </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($this->uri->segment(3) == 's_pemuda') ? 'active' : ''; ?>" href="<?= base_url('admin/galery/s_pemuda') ?>">
                                    <span class="sidenav-mini-icon text-xs"> R </span>
                                    <span class="sidenav-normal"> Pemuda Kelurahan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($this->uri->segment(3) == 'rt_rw') ? 'active' : ''; ?>" href="<?= base_url('admin/galery/rt_rw') ?>">
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
                    <a class="nav-link <?php echo ($this->uri->segment(2) == 'penduduk') ? 'active' : ''; ?>" href="<?= base_url('admin/penduduk') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Penduduk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($this->uri->segment(2) == 'pegawai') ? 'active' : ''; ?>" href="<?= base_url('admin/pegawai') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Aparat Desa</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('level') == 'administrator') : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($this->uri->segment(2) == 'user') ? 'active' : ''; ?>" href="<?= base_url('admin/user') ?>">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Pengelola Website</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-2">
                            <?php
                            $data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
                            $gambarPath = 'uploads/profil_pengelola/' . $data['gambar'];

                            // Periksa apakah gambar tersedia
                            if (!empty($data['gambar']) && file_exists($gambarPath)) :
                            ?>
                                <img class="text-center" src="<?= base_url($gambarPath); ?>" alt="Profil Pengguna">
                            <?php else : ?>
                                <img class="text-center" src="<?= base_url('assets/img/default-avatar.png') ?>" alt="Profil Pengguna Default">
                            <?php endif; ?>
                        </div>


                        <div class="col-10">
                            <h5 class="m-0 text-white">Hi,<span>
                                    <?php

                                    $data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

                                    ?>
                                    <?= ucfirst($data['username']); ?>
                                </span></h5><span class="text-sm text-white">Selamat Datang</span>
                        </div>
                    </div>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <!-- <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div> -->
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <!-- <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li> -->
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>

                        <?php if ($this->session->userdata('id_user') == TRUE) : ?>

                            <li class="d-flex align-items-center">
                                <a class="text-white" href="<?= base_url() ?>logout">
                                    <i class="bi bi-power"></i>
                                    Logout
                                </a>
                            </li>

                        <?php else : ?>

                            <li>
                                <a href="<?= base_url() ?>auth/login">
                                    <i class="material-icons">login</i>
                                    <p>Login</p>
                                </a>
                            </li>

                        <?php endif; ?>

                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-power cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="<?= base_url() ?>assets/argon/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="<?= base_url() ?>assets/argon/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->