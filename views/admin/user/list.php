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
                        <h4>Danh sách người dùng</h4>
                        <?php if (isset($_COOKIE['nof'])) {
                        echo '
                        <div class="alert alert-primary">'. $_COOKIE['nof'] . '</div>
                        ';
                      } ?>
                      </div>
                    </div>
                    <div class="float-right">
                      <form action="index.php?admin=admin&=admin&mod=user&act=findKeyWord" method="POST">
                        <div class="input-group">
                          <input type="text" class="form-control" name="keyword" placeholder="Search">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th>STT</th>
                          <th>Tên</th>
                          <th>Email</th>
                          <th>Ảnh đại diện</th>
                          <th>Ngày tạo</th>
                        </tr>

                        <?php $i=0; foreach ($users as $user) { $i++; ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $user['name'] ?>
                            <div class="table-links">
                              <a href="index.php?admin=admin&mod=user&act=detail&id=<?= $user['id'] ?>">Chi tiết</a>
                              <div class="bullet"></div>
                              <a href="index.php?admin=admin&mod=user&act=edit&id=<?= $user['id'] ?>">Sửa</a>
                              <div class="bullet"></div>
                              <a href="index.php?admin=admin&mod=user&act=destroy&id=<?= $user['id'] ?>" class="text-danger">Xóa</a>
                            </div>
                          </td>
                          <td><?= $user['email'] ?></td>
                          <td>
                              <img alt="image" src="public/admin/img/avatar/<?= $user['avatar'] ?>" class="" width="100" height="100" data-toggle="title" title="" style="margin: 5px 0; border-radius: 5px;">
                          </td>
                          <td><?= $user['created_at'] ?></td>
                        </tr>
                        <?php } ?>
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