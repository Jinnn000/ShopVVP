<!DOCTYPE html>
<html lang="en">
<?php 
    if(is_array($kh)){
        extract($kh);
    }
?>
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
        <h2>Sửa khách hàng</h2>
        <form action="admin_index.php?act=updatekh" method="POST">
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="kh_id" placeholder="Mã khach hang" name="kh_id" value="<?=$khachhang_id ?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="kh_ten" placeholder="Tên khách hàng" name="kh_ten" value="<?=$khachhang_hoten ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="kh_email" placeholder="Email" value="<?=$khachhang_email ?>" name="kh_email">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_mk" placeholder="Mật khẩu" value="<?=$khachhang_mk ?>" name="kh_mk">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_dc" placeholder="Địa chỉ" value="<?=$khachhang_diachi ?>" name="kh_dc">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_sdt" placeholder="Số điện thoại" value="<?=$khachhang_sodt ?>" name="kh_sdt">
              </div>
              <div class="mb-3">
                <input type="date" class="form-control" id="kh_nt" placeholder="Ngày tạo" value="<?=$khachhang_ngaytao ?>" name="kh_nt">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="kh_quyen" placeholder="Quyền" value="<?=$khachhang_quyen ?>" name="kh_quyen">
              </div>
            <input type="hidden" name="dm_id" value="<?php if (isset($khachhang_id) && ($khachhang_id != "")) echo $khachhang_id;?>">
            <button type="submit" class="btn btn-primary btn-sm" name="btn_sua">Cập nhật</button>
            <button type="reset" class="btn btn-primary btn-sm">Nhập lại</button>
            <a href="admin_index.php?act=list_kh"><button type="button" class="btn btn-primary btn-sm">Danh sách</button></a>
        </form>

    </div>

    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>