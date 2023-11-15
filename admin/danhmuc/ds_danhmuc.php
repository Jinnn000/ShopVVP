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
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                   foreach ($list as $danhmuc) {
                    extract($danhmuc); 
                    $suadm="admin_index.php?act=suadm&danhmuc_id=".$danhmuc_id;
                    $xoadm="admin_index.php?act=xoadm&danhmuc_id=".$danhmuc_id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$danhmuc_id.'</td>
                    <td>'.$danhmuc_ten.'</td>
                    <td><a class="nav-link" href="'.$suadm.'"><input type="button" value="Sửa"></a> <a class="nav-link" href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                  </tr>';
                   }
                   ?>
                  
                  
                </tbody>
              </table>
                <button type="button" class="btn btn-outline-primary btn-sm" >chọn tất cả</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Bỏ chọn tất cả</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Xóa các mục đã chọn</button>
                <a href="admin_index.php?act=danhmuc" ><button type="button" class="btn btn-outline-primary btn-sm">Thêm mới</button></a>
            
        </div>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
