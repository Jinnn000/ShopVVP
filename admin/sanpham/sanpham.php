<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="../image/logo.png"/>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <div id="fb-root"></div>
    <title>Quản lý trang web</title>
    </head>
    <body>
        <div class="container bg-light">
            <h2>Thêm mới loại hàng</h2>
        <form action="admin_index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="sp_id" placeholder="Mã sản phẩm" name="sp_id">
            </div>
            <div class="mb-3">     
              <input type="text" class="form-control" id="sp_ten" placeholder="Tên sản phẩm" name="sp_ten">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="sp_ncc" placeholder="Nhà cung cấp" name="sp_ncc">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_xx" placeholder="Xuất xứ" name="sp_xx">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_m" placeholder="Màu" name="sp_m">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_cl" placeholder="Chất liệu" name="sp_cl">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_g" placeholder="Giá" name="sp_g">
              </div>
              <div class="mb-3">
                <p>Ngày nhập</p>
                <input type="datetime-local" class="form-control" id="sp_nn" placeholder="Ngày nhập" name="sp_nn" >
              </div>
              <div class="mb-3">
                <p>Ảnh</p>
                <input type="file" name="sp_anh" id="sp_anh" placeholder="Ảnh">
              </div>
              <div class="mb-3">
                <p>Danh mục</p>
                <select name="dm_id" >
                  <?php 
                      foreach ($listdm as $danhmuc ) {
                        extract($danhmuc);
                        echo'<option value="'.$danhmuc_id.'">'.$danhmuc_ten.'</option>';
                      }
                  ?>
                  
                </select>
              </div>
              
            <button type="submit" name="btn_themsp" class="btn btn-primary btn-sm">Thêm mới</button>
            <button type="reset" class="btn btn-primary btn-sm">Nhập lại</button>
            <a href="admin_index.php?act=listsp"><button type="button" class="btn btn-primary btn-sm">Danh sách</button></a>
          </form>
        </div>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
