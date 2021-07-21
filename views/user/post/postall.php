<?php require_once('views/user/header.php'); ?>
<div class="eskimo-page-title">
                    <h1 class="no-border">Bài viết</h1>
                </div>
                <?php 

                 ?>
                <div class="eskimo-masonry-grid">
                    <div class="eskimo-two-columns" data-columns>
                        <!-- POST 1 -->
                        <?php foreach ($posts as $post) { ?>
                        <div class="card-masonry">
                            <div class="card">
                                <a href="index.php?admin=user&mod=home&act=detail&id=<?= $post['id'] ?>">
                                    <img class="card-vertical-img" src="public/admin/img/thumbnail/<?= $post['thumbnail'] ?>" alt="Ketchup Flavored Ice Cream!" style="height: 300px;"> 
                                </a>
                                <div class="card-border">
                                    <div class="card-body" style="height: 400px;">
                                        <div class="card-category">
                                            <span><a href="category.html">Food &amp; Drink</a></span>
                                        </div>
                                        <h3 class="card-title">
                                            <a href="index.php?admin=user&mod=home&act=detail&id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                                        </h3>
                                        <p style="overflow: hidden;"><?= $post['description'] ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="eskimo-author-meta">
                                            By <a class="author-meta" href="author.html">Egemenerd</a>
                                        </div>
                                        <div class="eskimo-date-meta">
                                            <a href="single-post.html">May 28, 2018</a>
                                        </div>
                                        <div class="eskimo-reading-meta">3 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    	<?php } ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </main>

<?php require_once('views/user/footer.php'); ?>