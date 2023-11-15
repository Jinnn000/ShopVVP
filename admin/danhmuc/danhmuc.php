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
        <h2>Thêm mới loại hàng</h2>
        <form action="admin_index.php?act=danhmuc" method="POST">
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="dm_id" placeholder="Mã danh mục" name="dm_id">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="dm_ten" placeholder="Tên danh mục" name="dm_ten">
            </div>

            <button type="submit" class="btn btn-primary btn-sm" name="btn_them">Thêm mới</button>
            <button type="reset" class="btn btn-primary btn-sm">Nhập lại</button>
            <a href="admin_index.php?act=listdm"><button type="button" class="btn btn-primary btn-sm">Danh sách</button></a>
        </form>

    </div>

    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>