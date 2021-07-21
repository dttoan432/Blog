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
                        <h4>Danh sách danh mục</h4>
                      </div>
                      <?php if (isset($_COOKIE['nof'])) {
                        echo '
                        <div class="alert alert-primary">
                        <strong>'. $_COOKIE['nof'] . '</strong>
                        </div>
                        ';
                      } ?>
                    </div>
                    <div class="float-right">
                      <form action="index.php?admin=admin&mod=category&act=findKeyWord" method="POST">
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
                          <th>Ngày tạo</th>
                        </tr>

                        <?php $i=0; foreach ($categories as $cate) { $i++; ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $cate['name'] ?>
                            <div class="table-links">
                              <a href="index.php?admin=admin&mod=category&act=detail&id=<?= $cate['id'] ?>">Chi tiết</a>
                              <div class="bullet"></div>
                              <?php if ($_SESSION['user']['id'] == $cate['user_id'] || $_SESSION['user']['permission'] == 1) {
                                echo '<a href="index.php?admin=admin&mod=category&act=edit&id='.$cate["id"].'" class="text-success">Sửa</a><div class="bullet"></div>';
                                echo '<a href="index.php?admin=admin&mod=category&act=destroy&id='.$cate["id"].'" class="text-danger">Xóa</a>';
                              } ?>
                            </div>
                          </td>
                          <td><?= $cate['created_at'] ?></td>
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