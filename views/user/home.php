<?php require_once('header.php'); ?>
<div class="eskimo-carousel-container eskimo-bg-loader">
                    <div id="eskimo-post-slider" class="eskimo-slider">
                        <!-- SLIDE 1 -->
                        <?php foreach ($slidePosts as $slide) { ?>
                        <div>
                            <a class="eskimo-slider-img" href="index.php?admin=user&mod=home&act=detail&id=<?= $slide['id'] ?>"></a>
                            <ul class="eskimo-slider-image-meta eskimo-image-meta-post">
                                <!-- <li><a href="single-post.html"><span class="badge badge-default">May 28, 2018</span></a></li>
                                <li><a href="category.html"><span class="badge badge-default">Food &amp; Drink</span></a></li> -->
                            </ul>
                            <div class="clearfix"></div>
                            <img src="public/admin/img/thumbnail/<?= $slide['thumbnail'] ?>" alt="Ketchup Flavored Ice Cream!" style="height: 500px;">
                            <div class="eskimo-slider-desc">
                                <div class="eskimo-slider-desc-inner">
                                    <h2 class="card-title"><?= $slide['title'] ?></h2>
                                    <p><?= $slide['description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- BLOG POSTS -->
                <!-- POST 1 -->
                <?php foreach ($posts as $post) { ?>
                <div class="card card-horizontal">
                    <div class="card-body">
                        <div class="card-horizontal-left">
                            <div class="card-category">
                               <!--  <a href="category.html">Food &amp; Drink</a>  --></div>
                            <h3 class="card-title"><a href="index.php?admin=user&mod=home&act=detail&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                            <div class="card-excerpt">
                                <p><?= $post['description'] ?></p>
                            </div>
                            <div class="card-horizontal-meta">
                                <!-- <div class="eskimo-author-meta">
                                    By <a class="author-meta" href="author.html">Egemenerd</a>
                                </div>
                                <div class="eskimo-date-meta">
                                    <a href="single-post.html">May 22, 2018</a>
                                </div>
                                <div class="eskimo-reading-meta">3 min read</div> -->
                            </div>
                        </div>
                        <div class="card-horizontal-right" data-img="public/admin/img/thumbnail/<?= $post['thumbnail'] ?>">
                            <a class="card-featured-img" href="index.php?admin=user&mod=home&act=detail&id=<?= $slide['id'] ?>"></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- VIEW ALL BUTTON -->
                <div class="eskimo-view-more">
                    <a class="btn btn-default" href="index.php?admin=user&mod=home&act=allPost">VIEW ALL POSTS</a>
                </div>
                
                <!-- DIVIDER -->
                <hr class="section-divider">

                <!-- CAROUSEL -->
                <div class="eskimo-widget-title">
                    <h3 class="eskimo-carousel-title"><span>Bài viết phổ biến</span></h3>
                </div>

                <div class="eskimo-carousel-container">
                    <div class="eskimo-carousel-view-more">
                        <a href="index.php?admin=user&mod=home&act=allPost">VIEW ALL</a>
                    </div>

                    <div id="eskimo-post-carousel" class="eskimo-carousel">
                        <!-- CAROUSEL ITEM 1 -->
                        <?php foreach ($slidePosts5 as $slide) { ?>
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="index.php?admin=user&mod=home&act=detail&id=<?= $slide['id'] ?>">
                                        <img class="card-vertical-img" src="public/admin/img/thumbnail/<?= $slide['thumbnail'] ?>" alt="Ketchup Flavored Ice Cream!" style="height: 200px;">   
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="index.php?admin=user&mod=home&act=detail&id=<?= $slide['id'] ?>">May 28, 2018</a>
                                            </div>
                                            <h5 class="card-title"><a href="index.php?admin=user&mod=home&act=detail&id=<?= $slide['id'] ?>"><?= $slide['title'] ?></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
<?php require_once('footer.php'); ?>