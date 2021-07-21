<footer id="eskimo-footer">
            <div class="container">
                <div class="row eskimo-footer-wrapper">
                    <!-- FOOTER WIDGET 1 -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <h5 class="eskimo-title-with-border"><span>Giới thiệu</span></h5>
                        <p>Được hàng nghìn khách hàng tin cậy, các chủ đề và plugin độc đáo của tôi giúp bạn tạo các trang web đáp ứng đẹp một cách dễ dàng.</p>
                        <p><a href="index.php?admin=user&mod=home&act=author" class="btn btn-default">Xem thêm</a></p>
                    </div>
                    <!-- FOOTER WIDGET 2 -->
                    <div class="col-12 col-lg-6">
                        <h5 class="eskimo-title-with-border"><span>Bản tin</span></h5>
                        <form method="post" action="index.html">
                            <label>Theo dõi tôi!</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your email address" required>
                                <div class="input-group-append"> 
                                    <input type="submit" value="Đăng ký" class="btn btn-default">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDITS -->
                <div class="eskimo-footer-credits">
                    <p>
                        Made with love by Tien Toan</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!-- GO TO TOP BUTTON -->
    <a id="eskimo-gototop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- SLIDE PANEL OVERLAY -->
    <div id="eskimo-overlay"></div>
    <!-- SLIDE PANEL -->
    <div id="eskimo-panels">
        <aside id="eskimo-panel" class="eskimo-panel">
            <div class="eskimo-panel-inner">
                <!-- CLOSE SLIDE PANEL BUTTON -->
                <a href="#" class="eskimo-panel-close"><i class="fa fa-times"></i></a>
                <!-- AUTHOR BOX -->
                <div class="eskimo-author-box eskimo-widget">
                    <div class="eskimo-author-img">
                        <img src="public/admin/img/avatar/avatar.jpg" alt="JOHN DOE" style="border-radius: 50% !important;">
                    </div>
                    <h3><span><?= $author[0]['name'] ?></span></h3>
                    <p class="eskimo-author-subtitle"><?= $author[0]['job'] ?></p>
                    <p class="eskimo-author-description"><?= $author[0]['introduce'] ?></p>
                    <div class="eskimo-author-box-btn">
                        <a class="btn btn-default" href="index.php?admin=user&mod=home&act=author">LIÊN HỆ</a>
                    </div>
                </div>
                <!-- RECENT POSTS -->
                
                <!-- CATEGORIES -->
                <div class="eskimo-categories eskimo-widget">
                    <h5 class="eskimo-title-with-border"><span>Categories</span></h5>
                    <ul>   
                        <?php foreach ($cates as $cate) { ?>
                        <li>
                            <a href="index.php?admin=user&mod=home&act=postCate&id=<?= $cate['id'] ?>" title="The best restaurants, cafes, bars and shops in town."><?= $cate['name'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- TAGS -->
                
            </div>
        </aside>
    </div>
    <!-- FULLSCREEN SEARCH -->
    <div id="eskimo-fullscreen-search">
        <div id="eskimo-fullscreen-search-content">
            <a href="#" id="eskimo-close-search"><i class="fa fa-times"></i></a>
            <form role="search" method="POST" action="index.php?admin=user&mod=home&act=findKeyWord" class="eskimo-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="keyWord">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- JS FILES -->
    <script src="public/user/js/jquery-3.3.1.min.js"></script>
    <script src="public/user/js/bootstrap.min.js"></script>
    <script src="public/user/js/salvattore.min.js"></script>
    <script src="public/user/js/slick.min.js"></script>
    <script src="public/user/js/panel.js"></script>
    <script src="public/user/js/reading-position-indicator.js"></script>
    <script src="public/user/js/custom.js"></script>
    <!-- POST SLIDER -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('#eskimo-post-slider').slick({
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    fade: true
                });
            });
            $(window).on('load', function() {
                $('#eskimo-post-slider').css('opacity', '1');
                $('#eskimo-post-slider').parent().removeClass('eskimo-bg-loader');
            });
        })(jQuery);
    </script>
    <!-- POST CAROUSEL -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('#eskimo-post-carousel').slick({
                    infinite: false,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false,
                    slidesToShow: 3,
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }]

                });
                $('#eskimo-post-carousel').css('opacity', '1');
            });
        })(jQuery);
    </script>
</body>

</html>