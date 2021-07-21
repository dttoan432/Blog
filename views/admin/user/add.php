<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a  onclick="history.go(-1);" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tạo mới người dùng</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php?admin=admin&mod=&act=home">Bảng điều khiển</a></div>
              <div class="breadcrumb-item"><a href="index.php?admin=admin&mod=user&act=list">Quản lý người dùng</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Thông tin</h4>
                  </div>
                  <form action="index.php?admin=admin&mod=user&act=store" method="POST" enctype="multipart/form-data" class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="email" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mật khẩu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="password" class="form-control" name="password" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ảnh đại diện</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="avatar" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quyền hạn</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="permission" value="1">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Quản trị viên
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="permission" checked value="0">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Nhân viên
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Tạo mới</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php require_once('views/admin/footer.php'); ?>