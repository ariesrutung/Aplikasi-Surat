<style>
    .blog .entry .entry-title {
        font-size: 28px;
        font-weight: bold;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .entry-title {
        font-size: 28px;
        font-weight: bold;
        padding: 0;
        margin: 0 0 20px 0;
        color: #212529;
    }

    .w-100 {
        width: 100% !important;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    article.entry.entry-single {
        margin: -70px 20px 0 20px;
        background-color: #fff !important;
        z-index: 999;
        position: relative;
        border-radius: 20px;
        padding: 20px 20px 0 20px;
    }

    p.text-sm {
        font-size: 12px;
        text-transform: capitalize !important;
        font-weight: bold;
        font-style: italic;
        color: #e03a3c;
        margin-bottom: 30px;
    }

    .swiper-slide {
        border: 1px solid #999;
        border-radius: 10px;
        margin: 0 10px !important;
    }

    .testimonials .testimonial-item {
        box-sizing: content-box;
        padding: 0;
        margin: 20px 15px;
        min-height: 200px;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
        position: relative;
        background: #fff;
        border-radius: 15px;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid #000;
    }

    section#blog {
        padding-bottom: 0;
    }

    a:hover {
        color: #e03a3c;
    }

    a {
        color: #000;
    }

    section#testimonials {
        margin: 20px !important;
    }

    .testimonials .testimonial-item p {
        font-style: italic;
        margin: 10px auto 15px auto;
    }

    #testimonials h2::after {
        content: " ";
        position: relative;
        display: block;
        width: 50px;
        height: 3px;
        background: #e03a3c;
        bottom: 0;
        left: calc(50% - 25px px);
        margin-top: 10px;
    }
</style>
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 entries">
                <img class="w-100" src="<?= base_url('uploads/informasi/' . $detail['gambar']); ?>">
                <article class="entry entry-single">
                    <p class="text-sm"><?= $detail['ket_gambar']; ?></p>
                    <div class="entry-meta">
                        <h2 class="entry-title"><?= $detail['judul']; ?></h2>
                        <ul> <?php $data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array(); ?>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?= ucfirst($data['username']); ?></li>
                            <li class="d-flex align-items-center"><i class="bi bi-calendar-date-fill"></i><?= $detail['tanggal']; ?></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p><?= $detail['isi']; ?></p>
                    </div>
                </article>

                <hr>
            </div>
        </div>
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="entry-title">Berita Terkait</h2>
                    <div class="swiper-wrapper">
                        <?php foreach ($berita_terbaru as $info) : ?>
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <a href="<?= base_url('frontend/informasi/detail_berita/' . $info->slug); ?>">
                                            <h6 class="mb-3"><?= (strlen($info->judul) > 50) ? substr($info->judul, 0, 50) . '...' : $info->judul; ?></h6>
                                        </a>
                                        <p><?= (strlen($info->isi) > 150) ? substr($info->isi, 0, 150) . '...' : $info->isi; ?></p>
                                        <h4 class="mt-3"><i class="bi bi-calendar-date-fill"></i> <?= $info->lokasi; ?>, <?= $info->tanggal; ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </div>
</section>