<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="index.php?admin=admin&mod=&act=back" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Thay đổi thông tin danh mục</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php?admin=admin&mod=&act=home">Bảng điều khiển</a></div>
              <div class="breadcrumb-item"><a href="index.php?admin=admin&mod=category&act=list">Quản lý danh mục</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Thông tin</h4>
                  </div>
                  <form action="index.php?admin=admin&mod=category&act=update&id=<?= $category['id']?>" method="POST" enctype="multipart/form-data" class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tên</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="<?= $category['name']?>" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Danh mục cha</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="parent_id">
                          <option value="NULL">NULL</option>
                          <?php foreach ($categories as $cate) { ?>
                          <option <?php if ($category['parent_id'] == $cate['id']) { echo "selected";} ?>  value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="slug" value="<?= $category['slug']?>" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mô tả</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple form-control" style="height: 100px;" name="description" required><?= $category['description']?></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Thay đổi</button>
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