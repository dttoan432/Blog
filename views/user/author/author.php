<?php require_once('views/user/header.php'); ?>

<div class="eskimo-page-title">
                    <h1><span><?= $author[0]['name'] ?></span></h1>
                    <p class="eskimo-page-subtitle"><?= $author[0]['job'] ?></p>
                </div>
                <!-- ABOUT ME -->
                <div class="row">
                    <div class="col-12 col-lg-7 order-2 order-lg-1">
                        <p><?= $author[0]['introduce'] ?></p>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>PHP</span> 100%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>WordPress</span> 85%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>Javascript</span> 65%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>ASP</span> 50%</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
                        <img src="public/admin/img/avatar/avatar.jpg" alt="Jane Doe" class="img-fluid mx-auto d-block eskimo-img-shadow">
                    </div>
                </div>
                <hr>
                <h2>LIÊN HỆ</h2>
                <p>Chúng tôi có thể từ những lá thư đã từng sử dụng, nhưng anh ấy không có lý do một số, từ các nhà sản xuất, tuy nhiên, không có chúng tôi không thể, từ đó ai đó phải trả tiền, những người sáng suốt trong họ, không phải những gì tôi là một số từ anh ấy là một nỗ lực tuyệt vời, tôi cung cấp cho công thức của nostrud excepteur.</p>
                <!-- CONTACT FORM -->
                <form id="ajax-form" action="mailer.php" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p>
                                <label>Họ tên</label><br>
                                <input type="text" name="sendername" id="sendername" class="form-control" required="required" maxlength="50">
                            </p>
                            <p>
                                <label>Email</label><br>
                                <input type="email" name="senderemail" id="senderemail" class="form-control" required="required" maxlength="50">
                            </p>
                            <p>
                                <label>Số điện thoại</label><br>
                                <input type="text" name="senderphone" id="senderphone" class="form-control" maxlength="50">
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p>
                                <label>Nội dung</label><br>
                                <textarea name="sendermessage" id="sendermessage" required="required" class="form-control form-fixed-height"></textarea>
                            </p>
                            <button id="sendbutton" type="submit" class="btn btn-lg w-100">Gửi</button>
                        </div>
                    </div>
                </form>
                <div id="form-messages"></div>
            </div>
        </main>

<?php require_once('views/user/footer.php'); ?>