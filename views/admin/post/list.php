<?php require_once('views/admin/header.php') ?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Bài viết</h1>
            <div class="section-header-button">
              <a href="index.php?admin=admin&mod=post&act=create" class="btn btn-primary">Tạo mới</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php?admin=admin&mod=&act=home">Bảng điều khiển</a></div>
              <div class="breadcrumb-item"><a href="index.php?admin=admin&mod=post&act=list">Quản lý bài viết</a></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="float-left">
                      <div class="card-header">
                        <h4>Danh sách bài viết</h4>
                      </div>
                    </div>
                    <div class="float-right">
                      <form action="index.php?admin=admin&mod=post&act=findKeyWord" method="POST">
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
                          <th style="width: 5%;">STT</th>
                          <th style="width: 35%;">Tiêu đề</th>
                          <th style="width: 40%;">Mô tả</th>
                          <th style="width: 20%;">Ngày tạo</th>
                        </tr>

                        <?php $i=0; foreach ($posts as $post) { $i++; ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $post['title'] ?>
                            <div class="table-links">
                              <a href="index.php?admin=admin&mod=post&act=detail&id=<?= $post['id'] ?>">Chi tiết</a>
                              <div class="bullet"></div>
                              <?php if ($_SESSION['user']['id'] == $post['user_id'] || $_SESSION['user']['permission'] == 1) {
                                echo '<a href="index.php?admin=admin&mod=post&act=edit&id='.$post["id"].'" class="text-success">Sửa</a><div class="bullet"></div>';
                                echo '<a href="index.php?admin=admin&mod=post&act=destroy&id='.$post["id"].'" class="text-danger">Xóa</a>';
                              } ?>
                            </div>
                          </td>
                          <td><?= $post['description'] ?></td>
                          <td><?= $post['created_at'] ?></td>
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