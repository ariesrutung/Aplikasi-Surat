<style>
    .pl-0 {
        padding-left: 0 !important;
    }

    .pl-3 {
        padding-left: 30px !important;
    }

    .content.col-xl-8.d-flex.align-items-stretch.pl-3 {
        padding-top: 0;
    }

    .content.col-xl-8.d-flex.align-items-stretch.pl {
        padding-bottom: 0;
    }

    section#tabs h3,
    h3.tujuan {
        font-weight: 700 !important;
        font-size: 34px !important;
        margin-bottom: 30px !important;
    }

    section#tabs li {
        padding: 5px 0;
    }

    h3.tujuan:after,
    h3:after {
        content: " " !important;
        position: relative;
        display: block;
        width: 50px;
        height: 3px;
        background: #00a8ff;
        bottom: 0;
        left: 0;
        margin-top: 10px;
    }

    #hero {
        clip-path: polygon(100% 0, 100% 90%, 0 100%, 0 0);
    }

    .testimonial-wrap {
        border: 1px solid #d1d1d1 !important;
        border-radius: 5px;
    }

    .swiper-slide {
        width: 50% !important;
    }

    .testimonials .testimonial-item {
        box-sizing: content-box;
        padding: 15px;
        margin: 15px;
        min-height: auto !important;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
        position: relative;
        background: #fff;
        border-radius: 15px;
    }

    .testimonials .testimonial-item p {
        font-style: normal !important;
        margin: 30px auto 15px auto;
    }

    .testimonials .testimonial-item p {
        font-style: normal !important;
        margin: 0;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
        width: 20px;
        height: 10px;
        background-color: #fff;
        opacity: 1;
        border: 1px solid #00a8ff;
        border-radius: 10px !important;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #00a8ff !important;
    }

    section#testimonials {
        padding-bottom: 0;
    }

    #services p.mt-3 {
        color: #999;
    }

    i.bi.bi-calendar-date-fill {
        font-size: 20px !important;
        margin-right: 10px;
        color: #999;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 0;
        border: 0;
        border-top: 2px solid rgb(255 255 255);
    }

    i.bi.bi-file-earmark-pdf-fill {
        font-size: 30px;
    }

    .btn.btn-more {
        color: #fff;
        background: transparent;
        border: 2px solid #00a8ff;
        border-radius: 30px;
    }

    a.btn.btn-more:hover {
        color: #fff;
        background-color: #00a8ff;
    }

    .btn.btn-danger {
        border-radius: 30px;
        border: 2px solid #00a8ff;
        background-color: #00a8ff;
    }

    a.btn.btn-danger:hover {
        border-radius: 30px;
        background-color: transparent;
        border: 2px solid #00a8ff;
        color: #212529;
    }

    #tabs img.w-100 {
        border-radius: 10px;
        margin: 10px 0;
        object-fit: cover;
        height: 400px !important;
        object-position: center top;
    }

    a:hover {
        color: #00a8ff;
    }

    a {
        color: #000;
    }


    section#about li {
        padding: 5px 0;
    }

    section#about ul i {
        font-size: 20px;
        padding-right: 4px;
        color: #00a8ff;
    }

    section#about ul {
        list-style: none;
        padding: 0;
    }

    section#about .w-100 {
        width: 100% !important;
        height: auto !important;
        object-fit: contain;
    }
</style>
<section id="hero" class="d-flex align-items-center py-0">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-xl-6">
                <h1>Sistem Manajemen Desa dan Persuratan Elektronik</h1>
                <h2>Membantu memudahkan urusan pengelolaan desa dan mendukung efektifitas kinerja di lingkungan pedesaan.</h2>
                <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
            </div>
        </div>
    </div>
</section>

<main id="main">

    <section id="services" class="services section-bg ">
        <div class="container" data-aos="fade-left">

            <div class="section-title mb-4">
                <h2>Pengumuman Hari ini</h2>
                <p>Dapatkan pengumuman terbaru per hari ini terkait kementerian desa.</p>
            </div>

            <div class="row">
                <?php foreach ($pengumuman_terbaru as $pg) : ?>
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <h4 class="ml-0"><a href="<?= base_url('frontend/informasi/detail_pengumuman/' . $pg->slug); ?>"><?= (strlen($pg->judul) > 100) ? substr($pg->judul, 0, 100) . '...' : $pg->judul; ?></a></h4>
                            <!-- <p><?= (strlen($pg->isi) > 100) ? substr($pg->isi, 0, 100) . '...' : $pg->isi; ?></p> -->
                            <hr>

                            <div class="row">
                                <div class="col-md-8">
                                    <p class="mt-3 ml-0"><i class="bi bi-calendar-date-fill"></i><?= $pg->lokasi; ?>, <?= $pg->tanggal; ?></p>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end align-items-center">
                                    <i class="bi bi-file-earmark-pdf-fill"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-start align-items-center">
                    <a class="btn btn-more" href="<?= base_url('frontend/informasi/pengumuman'); ?>">Pengumuman Lainnya</a>
                </div>
            </div>

        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-4">
                <h2><?= $title2; ?></h2>
                <p><?= $sub_title2; ?></p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach ($berita_terbaru as $info) : ?>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <a href="<?= base_url('frontend/informasi/detail_berita/' . $info->slug); ?>">
                                        <h6 class="mb-3"><?= (strlen($info->judul) > 50) ? substr($info->judul, 0, 50) . '...' : $info->judul; ?></h6>
                                    </a>
                                    <p>
                                        <a href="<?= base_url('frontend/informasi/detail_berita/' . $info->slug); ?>">
                                            <?= (strlen($info->isi) > 150) ? substr($info->isi, 0, 150) . '...' : $info->isi; ?>
                                        </a>
                                    </p>
                                    <h4 class="mt-3"><i class="bi bi-calendar-date-fill"></i><?= $info->lokasi; ?>, <?= $info->tanggal; ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex justify-content-start align-items-center">
                    <a class="btn btn-danger" href="<?= base_url('frontend/informasi/berita'); ?>">Berita Lainnya</a>
                </div>
            </div>

        </div>
    </section>

    <section id="about" class="section-bg tabs">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-4">
                <h2><?= $alur_masuk['judul']; ?></h2>
                <!-- <p><?= $alur_masuk['ket_gambar']; ?></p> -->
            </div>
            <div class="row no-gutters mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="content col-lg-7 d-flex align-items-stretch pl">
                    <div class="content">
                        <h3><?= $alur_masuk['ket_gambar']; ?></h3>
                        <p><?= $alur_masuk['isi']; ?></p>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-stretch">
                    <img class="w-100 ml-3" src="<?= base_url('uploads/informasi/' . $alur_masuk['gambar']); ?>" alt="Gambar Berita">
                </div>
            </div>

            <div class="row no-gutters" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <img class="w-100" src="<?= base_url('uploads/informasi/' . $alur_keluar['gambar']); ?>" alt="Gambar Berita">
                </div>

                <div class="content col-lg-7 d-flex align-items-stretch pl-3">
                    <div class="content">
                        <h3><?= $alur_keluar['ket_gambar']; ?></h3>
                        <p><?= $alur_keluar['isi']; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="tabs" class="tabs">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-4">
                <h2><?= $fungsi_tujuan['judul']; ?></h2>
                <p><?= $fungsi_tujuan['ket_gambar']; ?></p>
            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-9 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <p><?= $fungsi_tujuan['isi']; ?></p>
                        </div>
                        <div class="col-lg-3 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img class="w-100" src="<?= base_url('uploads/informasi/' . $fungsi_tujuan['gambar']); ?>" alt="Gambar Berita">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- 
    <section id="pricing" class="pricing section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>STRUKTUR ORGANISASI</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                </div>
            </div>

        </div>
    </section>

    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <ul class="faq-list accordion" data-aos="fade-up">

                <li>
                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="<?= base_url(); ?>assets/frontend/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="<?= base_url(); ?>assets/frontend/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="<?= base_url(); ?>assets/frontend/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="<?= base_url(); ?>assets/frontend/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section> -->

</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myListItems = document.querySelectorAll("section#tabs ul li");

        myListItems.forEach(function(item) {
            var iconElement = document.createElement("i");
            iconElement.className = "bi bi-check2-all";
            item.insertBefore(iconElement, item.firstChild);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var myListItems = document.querySelectorAll("section#about ul li");

        myListItems.forEach(function(item) {
            var iconElement = document.createElement("i");
            iconElement.className = "bi bi-check2-all";
            item.insertBefore(iconElement, item.firstChild);
        });
    });
</script>