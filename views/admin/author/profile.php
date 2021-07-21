<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Hồ sơ</h1>
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="public/admin/img/avatar/avatar.jpg" class="rounded-circle profile-widget-picture" style="width: 120px; height: 120px;">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Bài viết</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Người theo dõi</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><?= $author[0]['name'] ?> <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> <?= $author[0]['job'] ?></div></div>
                    <?= $author[0]['introduce'] ?>
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow <?= $author[0]['name'] ?></div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="" action="index.php?admin=admin&mod=author&act=update&id=<?= $author[0]['id'] ?>">
                    <div class="card-header">
                      <h4>Chỉnh sửa hồ sơ</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="name" value="<?= $author[0]['name'] ?>" required>
                            <div class="invalid-feedback">
                              Vui lòng nhập đầy đủ
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $author[0]['email'] ?>" required>
                            <div class="invalid-feedback">
                             Vui lòng nhập đầy đủ
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Số điện thoại</label>
                            <input type="tel" class="form-control" name="phone" value="<?= $author[0]['phone'] ?>">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Giới thiệu</label>
                            <textarea class="form-control summernote-simple" name="introduce" style="height: 100px;"><?= $author[0]['introduce'] ?></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Thay đổi</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
<?php require_once('views/admin/footer.php') ?>