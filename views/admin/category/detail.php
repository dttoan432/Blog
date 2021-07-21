<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Danh mục</h1>
            <div class="section-header-button">
              <a href="index.php?admin=admin&mod=category&act=create" class="btn btn-primary">Tạo mới</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php?admin=admin&mod=&act=home">Bảng điều khiển</a></div>
              <div class="breadcrumb-item"><a href="index.php?admin=admin&mod=category&act=list">Quản lý danh mục</a></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="float-left">
                      <div class="card-header">
                        <h4>Chi tiết danh mục</h4>
                      </div>
                    </div>
                    <div class="float-right"></div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Danh mục cha</th>
                          <th>Slug</th>
                          <th>Mô tả</th>
                          <th>Người tạo</th>
                          <th>Ngày tạo</th>
                        </tr>

                        <tr>
                          <td><?= $categories['id'] ?></td>
                          <td><?= $categories['name'] ?></td>
                          <td><?= ($categories['parent_id'] != NULL) ? $categories['parent_id'] : 'NULL' ?></td>
                          <td><?= $categories['slug'] ?></td>
                          <td><?= $categories['description'] ?></td>
                          <td><?= $categories['user_id'] ?></td>
                          <td><?= $categories['created_at'] ?></td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php require_once('views/admin/footer.php'); ?>