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
            <h2>Thêm mới thành viên</h2>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="sp_id" placeholder="Email" name="sp_id">
            </div>
            <div class="mb-3">     
              <input type="text" class="form-control" id="sp_ten" placeholder="Họ tên" name="sp_ten">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="sp_ncc" placeholder="Mật khẩu" name="sp_ncc">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_xx" placeholder="Địa chỉ" name="sp_xx">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_m" placeholder="Số điện thoại" name="sp_m">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_cl" placeholder="Ngày tạo" name="sp_cl">
              </div>
            <button type="submit" class="btn btn-primary btn-sm">Thêm mới</button>
            <button type="reset" class="btn btn-primary btn-sm">Nhập lại</button>
            <a href="admin_index.php?act=ds_danhmuc"><button type="button" class="btn btn-primary btn-sm">Danh sách</button></a>
          </form>
        </div>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
