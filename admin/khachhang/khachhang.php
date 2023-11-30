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
        <form action="admin_index.php?act=addkhachhang" method="POST">
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="kh_id" placeholder="Mã thành viên" name="kh_id">
            </div>
            <div class="mb-3">     
              <input type="text" class="form-control" id="kh_ten" placeholder="Họ tên" name="kh_ten">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="kh_email" placeholder="Email" name="kh_email">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_mk" placeholder="Mật khẩu" name="kh_mk">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_dc" placeholder="Địa chỉ" name="kh_dc">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_sdt" placeholder="Số điện thoại" name="kh_sdt">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_quyen" placeholder="Quyền" name="kh_quyen">
              </div>
            <button type="submit" class="btn btn-primary btn-sm" name="btn_them">Thêm mới</button>
            <button type="reset" class="btn btn-primary btn-sm">Nhập lại</button>
            <a href="admin_index.php?act=list_kh"><button type="button" class="btn btn-primary btn-sm">Danh sách</button></a>
          </form>
        </div>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
