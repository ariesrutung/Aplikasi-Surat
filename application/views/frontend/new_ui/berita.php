<style>
    img.w-100 {
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
    }
</style>
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 entries">
                <div class="row">
                    <?php foreach ($informasi as $info) : ?>
                        <div class="col-lg-4">
                            <article class="entry">
                                <div class="entry-img">
                                    <?php if ($info['gambar']) : ?>
                                        <a href="<?= base_url('frontend/informasi/detail_berita/' . $info['slug']); ?>">
                                            <img class="w-100" src="<?= base_url('uploads/informasi/' . $info['gambar']); ?>" alt="Gambar Berita">
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <h2 class="entry-title">
                                    <a href="<?= base_url('frontend/informasi/detail_berita/' . $info['slug']); ?>"><?= (strlen($info['judul']) > 50) ? substr($info['judul'], 0, 50) . '...' : $info['judul']; ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <?php

                                            $data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

                                            ?>

                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?= ucfirst($data['username']); ?></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-calendar-date-fill"></i><?= $info['tanggal']; ?></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        <p><?= (strlen($info['isi']) > 150) ? substr($info['isi'], 0, 150) . '...' : $info['isi']; ?></p>
                                    </p>
                                </div>

                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</section>