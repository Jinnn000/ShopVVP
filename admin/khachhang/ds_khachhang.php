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
            <h2>Quản lý danh mục</h2>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>Mã thành viên</th>
                    <th> Họ Tên thành viên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Ngày tạo</th>
                    <th>Quyền</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                   foreach ($list as $khachhang) {
                    extract($khachhang); 
                    $suakh="admin_index.php?act=suakh&khachhang_id=".$khachhang_id;
                    $xoakh="admin_index.php?act=xoakh&khachhang_id=".$khachhang_id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $khachhang_id . '</td>
                    <td>' . $khachhang_hoten . '</td>
                    <td>' . $khachhang_email. '</td>
                    <td>' . $khachhang_mk . '</td>
                    <td>' . $khachhang_diachi . '</td>
                    <td>' . $khachhang_sodt . '</td>
                    <td>' . $khachhang_ngaytao . '</td>
                    <td>' . $khachhang_quyen . '</td>
                   
                    <td><a class="nav-link" href="'.$suakh.'"><input type="button" value="Sửa"></a> <a class="nav-link" href="'.$xoakh.'"><input type="button" value="Xóa"></a></td>
                  </tr>';
                   }
                   ?>
                  
                  
                </tbody>
              </table>
                <button type="button" class="btn btn-outline-primary btn-sm" >chọn tất cả</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Bỏ chọn tất cả</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Xóa các mục đã chọn</button>
                <a href="admin_index.php?act=khachhang" ><button type="button" class="btn btn-outline-primary btn-sm">Thêm mới</button></a>
            
        </div>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
