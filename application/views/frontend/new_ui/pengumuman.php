<style>
    /*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
    .blog {
        padding: 40px 0 20px 0;
    }

    .blog .entry {
        padding: 5px;
        margin-bottom: 60px;
        /* box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1); */
    }

    .blog .entry .entry-img {
        max-height: 340px;
        /* margin: -30px -30px 20px -30px; */
        margin: 0;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .blog .entry .entry-title {
        font-size: 20px;
        font-weight: bold;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .blog .entry .entry-title a {
        color: #111111;
        transition: 0.3s;
    }

    .blog .entry .entry-title a:hover {
        color: #e03a3c;
    }

    .blog .entry .entry-meta {
        margin-bottom: 15px;
        color: #777777;
    }

    .blog .entry .entry-meta ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .blog .entry .entry-meta ul li+li {
        padding-left: 20px;
    }

    .blog .entry .entry-meta i {
        font-size: 16px;
        margin-right: 8px;
        line-height: 0;
    }

    .blog .entry .entry-meta a {
        color: #777777;
        font-size: 14px;
        display: inline-block;
        line-height: 1;
    }

    .blog .entry .entry-content p {
        line-height: 24px;
    }

    .blog .entry .entry-content .read-more {
        -moz-text-align-last: right;
        text-align-last: right;
    }

    .blog .entry .entry-content .read-more a {
        display: inline-block;
        background: #e03a3c;
        color: #fff;
        padding: 6px 20px;
        transition: 0.3s;
        font-size: 14px;
        border-radius: 4px;
    }

    .blog .entry .entry-content .read-more a:hover {
        background: #e35052;
    }

    .blog .entry .entry-content h3 {
        font-size: 22px;
        margin-top: 30px;
        font-weight: bold;
    }

    .blog .entry .entry-content blockquote {
        overflow: hidden;
        background-color: #fafafa;
        padding: 60px;
        position: relative;
        text-align: center;
        margin: 20px 0;
    }

    .blog .entry .entry-content blockquote p {
        color: #444444;
        line-height: 1.6;
        margin-bottom: 0;
        font-style: italic;
        font-weight: 500;
        font-size: 22px;
    }

    .blog .entry .entry-content blockquote::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background-color: #111111;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .blog .entry .entry-footer {
        padding-top: 10px;
        border-top: 1px solid #e6e6e6;
    }

    .blog .entry .entry-footer i {
        color: #5e5e5e;
        display: inline;
    }

    .blog .entry .entry-footer a {
        color: #1e1e1e;
        transition: 0.3s;
    }

    .blog .entry .entry-footer a:hover {
        color: #e03a3c;
    }

    .blog .entry .entry-footer .cats {
        list-style: none;
        display: inline;
        padding: 0 20px 0 0;
        font-size: 14px;
    }

    .blog .entry .entry-footer .cats li {
        display: inline-block;
    }

    .blog .entry .entry-footer .tags {
        list-style: none;
        display: inline;
        padding: 0;
        font-size: 14px;
    }

    .blog .entry .entry-footer .tags li {
        display: inline-block;
    }

    .blog .entry .entry-footer .tags li+li::before {
        padding-right: 6px;
        color: #6c757d;
        content: ",";
    }

    .blog .entry .entry-footer .share {
        font-size: 16px;
    }

    .blog .entry .entry-footer .share i {
        padding-left: 5px;
    }

    .blog .entry-single {
        margin-bottom: 30px;
    }

    .blog .blog-author {
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .blog-author img {
        width: 120px;
        margin-right: 20px;
    }

    .blog .blog-author h4 {
        font-weight: 600;
        font-size: 22px;
        margin-bottom: 0px;
        padding: 0;
        color: #111111;
    }

    .blog .blog-author .social-links {
        margin: 0 10px 10px 0;
    }

    .blog .blog-author .social-links a {
        color: rgba(17, 17, 17, 0.5);
        margin-right: 5px;
    }

    .blog .blog-author p {
        font-style: italic;
        color: #b7b7b7;
    }

    .blog .blog-comments {
        margin-bottom: 30px;
    }

    .blog .blog-comments .comments-count {
        font-weight: bold;
    }

    .blog .blog-comments .comment {
        margin-top: 30px;
        position: relative;
    }

    .blog .blog-comments .comment .comment-img {
        margin-right: 14px;
    }

    .blog .blog-comments .comment .comment-img img {
        width: 60px;
    }

    .blog .blog-comments .comment h5 {
        font-size: 16px;
        margin-bottom: 2px;
    }

    .blog .blog-comments .comment h5 a {
        font-weight: bold;
        color: #444444;
        transition: 0.3s;
    }

    .blog .blog-comments .comment h5 a:hover {
        color: #e03a3c;
    }

    .blog .blog-comments .comment h5 .reply {
        padding-left: 10px;
        color: #111111;
    }

    .blog .blog-comments .comment h5 .reply i {
        font-size: 20px;
    }

    .blog .blog-comments .comment time {
        display: block;
        font-size: 14px;
        color: #2b2b2b;
        margin-bottom: 5px;
    }

    .blog .blog-comments .comment.comment-reply {
        padding-left: 40px;
    }

    .blog .blog-comments .reply-form {
        margin-top: 30px;
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .blog-comments .reply-form h4 {
        font-weight: bold;
        font-size: 22px;
    }

    .blog .blog-comments .reply-form p {
        font-size: 14px;
    }

    .blog .blog-comments .reply-form input {
        border-radius: 4px;
        padding: 10px 10px;
        font-size: 14px;
    }

    .blog .blog-comments .reply-form input:focus {
        box-shadow: none;
        border-color: #ee9293;
    }

    .blog .blog-comments .reply-form textarea {
        border-radius: 4px;
        padding: 10px 10px;
        font-size: 14px;
    }

    .blog .blog-comments .reply-form textarea:focus {
        box-shadow: none;
        border-color: #ee9293;
    }

    .blog .blog-comments .reply-form .form-group {
        margin-bottom: 25px;
    }

    .blog .blog-comments .reply-form .btn-primary {
        border-radius: 4px;
        padding: 10px 20px;
        border: 0;
        background-color: #111111;
    }

    .blog .blog-comments .reply-form .btn-primary:hover {
        background-color: #1e1e1e;
    }

    .blog .blog-pagination {
        color: #444444;
    }

    .blog .blog-pagination ul {
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .blog .blog-pagination li {
        margin: 0 5px;
        transition: 0.3s;
    }

    .blog .blog-pagination li a {
        color: #111111;
        padding: 7px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blog .blog-pagination li.active,
    .blog .blog-pagination li:hover {
        background: #e03a3c;
    }

    .blog .blog-pagination li.active a,
    .blog .blog-pagination li:hover a {
        color: #fff;
    }

    .blog .sidebar {
        padding: 0 30px;
        margin: 0 0 60px 20px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .sidebar .sidebar-title {
        font-size: 20px;
        font-weight: 700;
        padding: 0 0 0 0;
        margin: 0 0 15px 0;
        color: #111111;
        position: relative;
    }

    .blog .sidebar .sidebar-item {
        margin-bottom: 30px;
    }

    .blog .sidebar .search-form form {
        background: #fff;
        border: 1px solid #ddd;
        padding: 3px 10px;
        position: relative;
    }

    .blog .sidebar .search-form form input[type=text] {
        border: 0;
        padding: 4px;
        border-radius: 4px;
        width: calc(100% - 40px);
    }

    .blog .sidebar .search-form form button {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 15px;
        margin: -1px;
        background: #e03a3c;
        color: #fff;
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
        line-height: 0;
    }

    .blog .sidebar .search-form form button i {
        line-height: 0;
    }

    .blog .sidebar .search-form form button:hover {
        background: #e34c4d;
    }

    .blog .sidebar .categories ul {
        list-style: none;
        padding: 0;
    }

    .blog .sidebar .categories ul li+li {
        padding-top: 10px;
    }

    .blog .sidebar .categories ul a {
        color: #111111;
        transition: 0.3s;
    }

    .blog .sidebar .categories ul a:hover {
        color: #e03a3c;
    }

    .blog .sidebar .categories ul a span {
        padding-left: 5px;
        color: #aaaaaa;
        font-size: 14px;
    }

    .blog .sidebar .recent-posts .post-item+.post-item {
        margin-top: 15px;
    }

    .blog .sidebar .recent-posts img {
        width: 80px;
        float: left;
    }

    .blog .sidebar .recent-posts h4 {
        font-size: 15px;
        margin-left: 95px;
        font-weight: bold;
    }

    .blog .sidebar .recent-posts h4 a {
        color: #111111;
        transition: 0.3s;
    }

    .blog .sidebar .recent-posts h4 a:hover {
        color: #e03a3c;
    }

    .blog .sidebar .recent-posts time {
        display: block;
        margin-left: 95px;
        font-style: italic;
        font-size: 14px;
        color: #aaaaaa;
    }

    .blog .sidebar .tags {
        margin-bottom: -10px;
    }

    .blog .sidebar .tags ul {
        list-style: none;
        padding: 0;
    }

    .blog .sidebar .tags ul li {
        display: inline-block;
    }

    .blog .sidebar .tags ul a {
        color: #515151;
        font-size: 14px;
        padding: 6px 14px;
        margin: 0 6px 8px 0;
        border: 1px solid #c4c4c4;
        display: inline-block;
        transition: 0.3s;
    }

    .blog .sidebar .tags ul a:hover {
        color: #fff;
        border: 1px solid #e03a3c;
        background: #e03a3c;
    }

    .blog .sidebar .tags ul a span {
        padding-left: 5px;
        color: #aaaaaa;
        font-size: 14px;
    }

    .col-lg-8.entries {
        padding: 0;
    }

    .col-lg-8.entries .col-lg-6 {
        padding: 5px;
    }
</style>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="section-title">
                <h2>Berita</h2>
                <p>Silakan lengkapi data-data yang diminta di bawah ini ketika mengajukan pengurusan surat secara online.</p>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <div class="row">
                        <div class="col-lg-6">
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-1.jpg" alt="" class="w-100">
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                        Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut.
                                    </p>
                                </div>

                            </article><!-- End blog entry -->
                        </div>

                        <div class="col-lg-6">
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-2.jpg" alt="" class="w-100">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                        Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut.
                                    </p>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
                        <div class="col-lg-6">
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-3.jpg" alt="" class="w-100">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                        Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut.
                                    </p>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
                        <div class="col-lg-6">
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="<?= base_url(); ?>assets/frontend/assets/img/blog/blog-4.jpg" alt="" class="w-100">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                        Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut.
                                    </p>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
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

</main><!-- End #main -->