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
    <nav class="navbar navbar-expand-sm bg-light" style="margin: auto; text-align: center;">
      <div class="container">
        <a href="admin_index.php" class="navbar-brand" style="color: black;">
          <img src="../image/logo.png" alt="Logo" class="rounded-circle" width="40px" height="40px">
          ADMIN
        </a>
        <a href="#" onclick="logout">Đăng xuất</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>   
        </div>
      </div>     
    </nav>
    <div class="container-fluid bg-white">
      <nav class="navbar navbar-expand-sm " style="font-size: 16px;" >
        <ul class="navbar-nav" style="margin: auto;">
          <li class="nav-item">
            <a href="admin_index.php" class="nav-link" style="color: black;"><b>TRANG CHỦ</b></a>
          </li>
          <li class="nav-item" style="margin-left: 140px;">
            <a href="admin_index.php?act=danhmuc" class="nav-link" style="color: black;"><b>DANH MỤC</b></a>
          </li>
          <li class="nav-item" style="margin-left: 140px;">
            <a href="admin_index.php?act=addsp" class="nav-link" style="color: black;"><b>SẢN PHẨM</b></a>
          </li>
          <li class="nav-item" style="margin-left: 140px;">
            <a href="admin_index.php?act=addkhachhang" class="nav-link" style="color: black;"><b>THÀNH VIÊN</b></a>
          </li>
          <li class="nav-item" style="margin-left: 140px;">
            <a href="admin_index.php?act=thongke" class="nav-link" style="color: black;"><b>THỐNG KÊ</b></a>
          </li>
        </ul>
      </nav>
      <hr style="margin-top: 5px;">
    </div>
    <script>
function logout() {
    window.location.href = "../index.php";
}
</script>
</head>