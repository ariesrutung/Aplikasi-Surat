    <style>
        .user-card-full {
            overflow: hidden;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            border: none;
            margin-bottom: 30px;
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px;
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263);
        }

        .user-profile {
            padding: 20px 0;
        }

        .card-block {
            padding: 1.25rem;
        }

        .card .card-block p {
            line-height: 25px;
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px;
            }
        }

        .card-block {
            padding: 1.25rem 1.25rem 0 1.25rem;
        }

        .card .card-block p {
            line-height: 25px;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .section-bg {
            padding: 0;
            color: #fff;
        }

        img.w-100.img-fluid {
            border-radius: 10px;
        }

        .section-bg:before {
            content: "";
            background: transparent;
            position: absolute;
            bottom: 60px;
            top: 60px;
            left: 0;
            right: 0;
            transform: none;
        }

        img.w-100 {
            border-radius: 10px;
        }
    </style>
    </head>

    <section id="team" class="team section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-0">
                            <div class="col-lg-4 col-sm-12 bg-c-lite-green user-profile m-0 py-0">
                                <div class="card-block text-center text-white">
                                    <div class="m-2">
                                        <?php if (!empty($detail['gambar'])) : ?>
                                            <img class="w-100" src="<?= base_url('/uploads/aparatdesa/' . $detail['gambar']); ?>">
                                        <?php else : ?>
                                            <img class="w-100" src="<?= base_url('/assets/img/default-avatar.png') ?>" alt="Profil Default">
                                        <?php endif; ?>
                                    </div>
                                    <h4 class="f-w-600"><?= $detail['nama_lengkap'] ?></h4>
                                    <p class="m-0"><?= $detail['jabatan'] ?></p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <div class="card-block py-0">

                                    <h4 class="mt-3">Tugas & Fungsi</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <p class="mb-3 f-w-600"><?= $detail['tugas'] ?></p>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <p class="mb-3 f-w-600"><?= $detail['fungsi'] ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>