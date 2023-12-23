    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <div class="row">
                        <?php foreach ($informasi as $info) : ?>
                            <div class="col-lg-6">
                                <article class="entry">
                                    <div class="entry-img">
                                        <?php if ($info['gambar']) : ?>
                                            <a href="<?= base_url('berita/detail/' . $info['slug']); ?>">
                                                <img class="w-100" src="<?= base_url('uploads/informasi/' . $info['gambar']); ?>" alt="Gambar Berita">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="<?= base_url('berita/detail/' . $info['slug']); ?>"><?= (strlen($info['judul']) > 60) ? substr($info['judul'], 0, 60) . '...' : $info['judul']; ?></a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <?php

                                                $data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

                                                ?>

                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?= ucfirst($data['username']); ?></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?= $info['tanggal']; ?></li>
                                        </ul>
                                    </div>

                                    <div class="entry-content">
                                        <p>
                                            <p><?= (strlen($info['isi']) > 150) ? substr($info['isi'], 0, 150) . '...' : $info['isi']; ?></p>
                                        </p>
                                    </div>

                                </article><!-- End blog entry -->
                            </div>
                        <?php endforeach; ?>


                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                        <!-- End blog entries list -->

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-recent-1.jpg" alt="">
                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-recent-2.jpg" alt="">
                                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-recent-3.jpg" alt="">
                                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-recent-4.jpg" alt="">
                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-recent-5.jpg" alt="">
                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->
            </div>
    </section><!-- End Blog Section -->