<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Presento Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/frontend/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/frontend/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="<?= base_url() ?>assets/css/progress_bar.css" rel="stylesheet" />
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="<?= base_url('/'); ?>home">Presento<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= base_url('/'); ?>home" class="logo me-auto"><img src="<?= base_url(); ?>assets/frontend/assets/img/logo.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url('/'); ?>home">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profil Lembaga</a></li>
                            <li><a href="#">Struktur Organisasi</a></li>
                            <li><a href="#">Profil Pimpinan</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#about">Layanan</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Surat</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('suratonline') ?>">Pengaduan Surat</a></li>
                            <li><a href="<?= base_url('tracking') ?>">Tracking Surat</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url('') ?>admin/auth/login" class="get-started-btn scrollto">MASUK</a>
        </div>
    </header><!-- End Header -->