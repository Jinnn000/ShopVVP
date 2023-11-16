<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="../image/logo.png" />
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
  <div id="fb-root"></div>
  <title>Quản lý trang web</title>
</head>

<body>
  <div class="container bg-light">
    <h2>Quản lý sản phẩm</h2>
    <form action="admin_index.php?act=listsp" method="post">
      <div class="row">
        <div class="col-sm-12">
          <input type="text" class="form-control-sm" placeholder="Tên sản phẩm" name="tensp">
          <select name="dm_id" class="form-control-sm">
            <option value="0">Tất cả</option>
            <?php
            foreach ($listdm as $danhmuc) {
              extract($danhmuc);
              echo '<option value="' . $danhmuc_id . '">' . $danhmuc_ten . '</option>';
            }
            ?>

          </select>
          <button type="submit" name="btn_ok" class="btn btn-outline-primary btn-sm">Go</button>
        </div>
      </div>
    </form>
    <table class="table table-hover">
      <thead>
        <tr>
          <th></th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Ảnh</th>
          <th>Nhà cung cấp</th>
          <th>Xuất xứ</th>
          <th>Màu</th>
          <th>Giá</th>
          <th>Chất liệu</th>
          <th>Ngày nhập</th>
          <th>Khuyến mãi</th>
          <th></th>
        </tr>

      </thead>
      <tbody>
        <tr>
          <?php
          foreach ($list as $sanpham) {
            extract($sanpham);
            $suasp = "admin_index.php?act=suasp&sanpham_id=" . $sanpham_id;
            $xoasp = "admin_index.php?act=xoasp&sanpham_id=" . $sanpham_id;
            $img = "../image/" . $sanpham_anh;
            $hinh = "<img src='" . $img . "' height=80px>";
            echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $sanpham_id . '</td>
                    <td>' . $sanpham_ten . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $sanpham_tenncc . '</td>
                    <td>' . $sanpham_xuatxu . '</td>
                    <td>' . $sanpham_mau . '</td>
                    <td>' . $sanpham_gia . '</td>
                    <td>' . $sanpham_chatlieu . '</td>
                    <td>' . $sanpham_ngaynhap . '</td>
                    <td>' . $khuyenmai . '</td>
                    <td><a class="nav-link" href="' . $suasp . '"><input type="button" value="Sửa"></a> <a class="nav-link" href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                  </tr>';
          }
          ?>
      </tbody>
    </table>
    <button type="button" class="btn btn-outline-primary btn-sm">chọn tất cả</button>
    <button type="button" class="btn btn-outline-primary btn-sm">Bỏ chọn tất cả</button>
    <button type="button" class="btn btn-outline-primary btn-sm">Xóa các mục đã chọn</button>
    <a href="admin_index.php?act=addsp"><button type="button" class="btn btn-outline-primary btn-sm">Thêm mới</button></a>

  </div>
  <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>