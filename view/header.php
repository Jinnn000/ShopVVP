<!DOCTYPE html>
<html lang="en">
  <?php 
    include("model/pdo.php");
    include("model/danhmuc.php");
    include("model/khachhang.php");
    
    $listdm=load_danhmuc();
  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="icon" href="image/logo.png"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <div id="fb-root"></div>
    <script src="assets/Jquery/Jquery3.7.1.js"></script>
    <script src="assets/Javascript/js2.js"></script>
    <title>TẠP HÓA VĂN PHÒNG PHẨM</title>
    <nav class="navbar navbar-expand-sm bg-light" style="margin: auto; text-align: center;">
      <div class="container">
        <a href="index.php" class="navbar-brand" style="color: black;">
          <img src="image/logo.png" alt="Logo" class="rounded-circle" width="40px" height="40px">
          VĂN PHÒNG PHẨM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
              <li >
                <form class="d-flex" style="padding-left: 200px;" action="view/search_sp.php" method="post" onsubmit="return LoadPageSearch('search_sp', this)">
                  <input class="form-control me-2" type="text" placeholder="Tìm kiếm" style="width: 300px;" name="kyw" >
                  <button class="btn btn-primary" type="submit"  style="color: black;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
              </li>
              <li class="nav-item" style="margin-left: 100px ;">
                <a class="nav-link" href="#" style="color: black;"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i></a>
              </li>
              <li class="nav-item"><a href="#" onclick="loadPage('Login');" class="nav-link" style="color: black; margin-left: 50px;">Đăng nhập</a></li>
              <li class="nav-item" style="margin-top: 7px;">|</li>
              <li class="nav-item"><a href="#" onclick="loadPage('Register');" class="nav-link" style="color: black;">Đăng ký</a></li>
          </ul>         
        </div>
      </div>     
  </nav>
  <div class="container-fluid bg-white">
    <nav class="navbar navbar-expand-sm " style="font-size: 16px;" >
      <ul class="navbar-nav" style="margin: auto;">
        <li class="nav-item">
          <a href="index.php"  class="nav-link" style="color: black;"><b>TRANG CHỦ</b></a>
        </li>
        <li class="nav-item dropdown " style="margin-left: 140px;">
          <a href="#" class="nav-link " style="color: black;"><b>SẢN PHẨM</b></a>
          <ul class="dropdown-menu ">
          <li><a href="#" onclick="loadPage('dm01_sp');" class="dropdown-item">Bút-viết</a>
             <li><a href="#" onclick="loadPage('dm02_sp');" class="dropdown-item">Dụng cụ học sinh</a>
             <li><a href="#" onclick="loadPage('dm03_sp');" class="dropdown-item">Dụng cụ văn phòng</a>
             <li><a href="#" onclick="loadPage('dm04_sp');" class="dropdown-item">Dụng cụ vẽ</a>
             <li><a href="#" onclick="loadPage('dm05_sp');" class="dropdown-item">Sản phẩm về giấy</a>
             <li><a href="#" onclick="loadPage('dm06_sp');" class="dropdown-item">Sản phẩm khác</a>
             <li><a href="#" onclick="loadPage('dm07_sp');" class="dropdown-item">Máy tính cầm tay</a>
             <li><a href="#" onclick="loadPage('dm08_sp');" class="dropdown-item">Ba lô</a>

          </ul>
        </li>
        <li class="nav-item" style="margin-left: 140px;">
          <a href="#" onclick="loadPage('about');" class="nav-link" style="color: black;"><b>GIỚI THIỆU</b></a>
        </li>
        <li class="nav-item" style="margin-left: 140px;">
          <a href="#" onclick="loadPage('contact');" class="nav-link" style="color: black;"><b>LIÊN HỆ</b></a>
        </li>
      </ul>
    </nav>
    <hr style="margin-top: 5px;">
  </div>
</head>
<div id="content">

</div>
<div id="content1">

</div>

  
