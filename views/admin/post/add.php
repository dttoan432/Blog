<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a  onclick="history.go(-1);"  class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tạo mới bài viết</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php?admin=admin&mod=&act=home">Bảng điều khiển</a></div>
              <div class="breadcrumb-item"><a href="index.php?admin=admin&mod=post&act=list">Quản lý bài viết</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Thông tin</h4>
                  </div>
                  <form action="index.php?admin=admin&mod=post&act=store" method="POST" enctype="multipart/form-data" class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tiêu đề</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Danh mục</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="category_id">
                          <?php foreach ($categories as $cate) { ?>
                          <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mô tả</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple form-control" style="height: 100px;" name="description" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ảnh mô tả</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="thumbnail" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nội dung</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple form-control" style="height: 300px;" name="content" required></textarea>
                        <input type="hidden" class="form-control" name="view_count" value="0">
                        <input type="hidden" class="form-control" name="user_id" value="<?= $_SESSION['user']['id'] ?>">
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