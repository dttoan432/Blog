<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Người dùng</h1>
            <div class="section-header-button">
              <a href="index.php?admin=admin&mod=user&act=create" class="btn btn-primary">Tạo mới</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php?admin=admin&mod=&act=home">Bảng điều khiển</a></div>
              <div class="breadcrumb-item"><a href="index.php?admin=admin&mod=user&act=list">Quản lý người dùng</a></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="float-left">
                      <div class="card-header">
                        <h4>Chi tiết người dùng</h4>
                      </div>
                    </div>
                    <div class="float-right"></div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Email</th>
                          <th>Ảnh đại điện</th>
                          <th>Quyền hạn</th>
                          <th>Ngày tạo</th>
                        </tr>

                        <tr>
                          <td><?= $user['id'] ?></td>
                          <td><?= $user['name'] ?></td>
                          <td><?= $user['email'] ?></td>
                          <td>
                              <img alt="image" src="public/admin/img/avatar/<?= $user['avatar'] ?>" class="" width="100" height="100" data-toggle="title" title="" style="margin: 5px 0; border-radius: 5px;">
                          </td>
                          <td><?= ($user['permission'] == 1) ? 'Quản trị viên' : 'Nhân viên' ?></td>
                          <td><?= $user['created_at'] ?></td>
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