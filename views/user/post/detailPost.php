<?php require_once('views/user/header.php'); ?>

<div class="eskimo-page-title">
                    <h1><span>Chi tiết bài viết</span></h1>
                    <div class="eskimo-page-title-meta">
                        <!-- <div class="eskimo-author-meta">
                            By <a class="author-meta" href="author.html">Egemenerd</a>
                        </div>
                        <div class="eskimo-cat-meta">
                            In <a href="category.html">Lifestyle</a>
                        </div>
                        <div class="eskimo-date-meta">May 25, 2018</div>
                        <div class="eskimo-reading-meta">3 min read</div> -->
                    </div>
                </div>
                <!-- FEATURED IMAGE -->
                <div class="eskimo-featured-img">
                    <img src="public/admin/img/thumbnail/<?= $post['thumbnail'] ?>" style="width: 100%;">
                </div>
                <div class="eskimo-page-content">
                    <h2 style="text-align: justify;"><?= $post['title'] ?></h2>
                </div>
                <!-- POST CONTENT -->
                <div class="eskimo-page-content">
                    <p style="text-align: justify;"><?= $post['content'] ?></p>
                </div>
                <div class="clearfix"></div>
                <hr>
            </div>
        </main>

<?php require_once('views/user/footer.php'); ?>