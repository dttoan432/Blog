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
                        <h4>Chi tiết bài viết</h4>
                      </div>
                    </div>
                    <div class="float-right"></div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <style>
                          td{
                            text-align: justify;
                            padding: 10px !important;
                            vertical-align: top !important;
                          }
                          th:first-child~th{
                            width: 15%;
                          }
                          img{
                            border-radius: 10px;
                          }
                        </style>
                        <tr>
                          <th rowspan="9">ID: <?= $post['0']['id'] ?></th>
                          <th>Tiêu đề</th>
                          <td><?= $post['0']['title'] ?></td>
                        </tr>
                        <tr>
                          <th>Mô tả</th>
                          <td><?= $post['0']['description'] ?></td>
                        </tr>
                        <tr>
                          <th>Ảnh mô tả</th>
                          <td>
                            <img alt="<?= $post['0']['thumbnail'] ?>" src="public/admin/img/thumbnail/<?= $post['0']['thumbnail'] ?>" class="" width="50%" height="300" data-toggle="title" title="">
                          </td>
                        </tr>
                        <tr>
                          <th>Nội dung</th>
                          <td><?= $post['0']['content'] ?></td>
                        </tr>
                        <tr>
                          <th>Slug</th>
                          <td><?= $post['0']['slug'] ?></td>
                        </tr>
                        <tr>
                          <th>Lượt xem</th>
                          <td><?= $post['0']['view_count'] ?></td>
                        </tr>
                        <tr>
                          <th>Người viết</th>
                          <td><?= $post['0']['user'] ?></td>
                        </tr>
                        <tr>
                          <th>Danh mục</th>
                          <td><?= $post['0']['category'] ?></td>
                        </tr>
                        <tr>
                          <th>Ngày tạo</th>
                          <td><?= $post['0']['created_at'] ?></td>
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