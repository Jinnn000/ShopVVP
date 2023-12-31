<!DOCTYPE html>
<html lang="en">
<?php
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/khachhang.php");
session_start();
$listdm = load_danhmuc();
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
  <link rel="icon" href="../image/logo.png" />
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
  <div id="fb-root"></div>
  <script src="../assets/Jquery/Jquery3.7.1.js"></script>
  <script src="../assets/Javascript/js2.js"></script>
  <title>TẠP HÓA VĂN PHÒNG PHẨM</title>
  <nav class="navbar navbar-expand-sm bg-light" style="margin: auto; text-align: center;">
    <div class="container">
      <a href="../index.php" class="navbar-brand" style="color: black;">
        <img src="../image/logo.png" alt="Logo" class="rounded-circle" width="40px" height="40px">
        VĂN PHÒNG PHẨM
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li>
            <form class="d-flex" style="padding-left: 200px;" action="view/search_sp.php" method="post" onsubmit="return LoadPageSearch('search_sp', this)">
              <input class="form-control me-2" type="text" placeholder="Tìm kiếm" style="width: 300px;" name="kyw">
              <button class="btn btn-primary" type="submit" style="color: black;"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </li>
          <li class="nav-item" style="margin-left: 100px ;">
            <a class="nav-link" href="#" style="color: black;"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i></a>
          </li>
          <li class="nav-item"><a href="Login.php" class="nav-link" style="color: black; margin-left: 50px;">Đăng nhập</a></li>
          <li class="nav-item" style="margin-top: 7px;">|</li>
          <li class="nav-item"><a href="Register.php" class="nav-link" style="color: black;">Đăng ký</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid bg-white">
    <nav class="navbar navbar-expand-sm " style="font-size: 16px;">
      <ul class="navbar-nav" style="margin: auto;">
        <li class="nav-item">
          <a href="../index.php" class="nav-link" style="color: black;"><b>TRANG CHỦ</b></a>
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

<body>
  <div class="center">
    <h1>Đăng nhập</h1>
    <form action="" method="post">
      <div class="txt_field">
        <input type="text" name="sdt" required>
        <span></span>
        <label>Số điện thoại</label>
      </div>
      <div class="txt_field">
        <input type="password" name="mk"required >
        <span></span>
        <label>Mật khẩu</label>
      </div>
      <a class="pass" href="#" onclick="loadPage('forgotpass')">Quên mật khẩu?</a>
      <input type="submit" name="dangnhap" value="Đăng nhập" style="margin-top: 20px;">
      <div class="signup_link">
        Không phải thành viên? <a href="Register.php">Đăng ký</a>
      </div>
    </form>
  </div>
  <?php
  if (isset($_POST['dangnhap'])) {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (
              isset($_POST['sdt']) && isset($_POST['mk'])
          ) {
              $sdt = $_POST['sdt'];
              $password = $_POST['mk'];

              

              $check = get_kh($sdt,$password);

              
              if (is_array($check)) {
                $_SESSION['user'] = $check;
                if ($check['khachhang_quyen'] == 1) {
                  echo '<script>window.location.href = "../admin/admin_index.php";</script>';
              } else {
                echo '<script>window.location.href = "../index.php";</script>';
              }
              exit();
                
              } else {
                echo '<div class="alert alert-danger"> <strong>Đăng nhập thất bại !, Email hoặc mật khẩu không đúng</strong> </div>';
              }
          }
      }
  }
?>

</body>

<footer>
  <div class="container-fluid bg-light footer">
    <div class="row">
      <div class="col-sm-3">
        <a href="Index.php" class="navbar-brand" style="color: black;">
          <img src="../image/logo.png" alt="Logo" class="rounded-circle" width="40px" height="40px">VĂN PHÒNG PHẨM
        </a>
        <ul>
          <li><i class="fa-solid fa-location-dot icon"></i> &nbsp; 218 Lĩnh Nam, Hoàng Mai, Hà Nội</li>
          <br>
          <li><i class="fa-solid fa-envelope icon"> </i> &nbsp; hoangnam202a@gmail.com</li>
          <br>
          <li><i class="fa-solid fa-phone icon"> </i> &nbsp; 0483946890</li>
          <br>
          <li><i class="fa-solid fa-shield-halved icon"></i> &nbsp; Giấy phép DKKD số 0101507251, cấp lần thứ 6 năm 2019</li>
        </ul>
      </div>
      <div class="col-sm-6" style="margin-left: 5px;">
        <div class="row">
          <div class="col-sm-4" style="margin-top: 10px;">
            <b>Hỗ trợ khách hàng</b>
            <a href="#" class="nav-link" style="color: black;">Câu hỏi thường gặp</a>
            <a href="#" onclick="loadPage('chinh-sach/dieu-khoan-dich-vu');" class="nav-link" style="color: black;">Điều khoản dịch vụ</a>
          </div>
          <div class="col-sm-4" style="margin-top: 10px;">
            <b>Chính sách</b>
            <a href="#" onclick="loadPage('chinh-sach/chinh-sach-doi-tra');" class="nav-link" style="color: black;">Chính sách bảo mật</a>
            <a href="#" onclick="loadPage('chinh-sach/chinh-sach-thanh-toan');" class="nav-link" style="color: black;">Chính sách thanh toán</a>
            <a href="#" onclick="loadPage('chinh-sach/chinh-sach-van-chuyen');" class="nav-link" style="color: black;">Chính sách vận chuyển</a>
            <a href="#" onclick="loadPage('chinh-sach/chinh-sach-doi-tra');" class="nav-link" style="color: black;">Chính sách đổi trả</a>
          </div>
        </div>
        <div class="row" style="margin-top: 20px; margin-left: 30px;">
          <div class="col-sm-8">
            <b>Đăng kí nhận tin</b>
            <p>Hãy nhập email của bạn vào ô dưới đây để có thể nhận được tất cả tin tức mới nhất của chúng tôi</p>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Email của bạn" style="width: 350px;">
              <button class="btn btn-primary" type="button" style="color: black;">Đăng ký</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-2" style="margin-top: 10px;">
        <h4>Liên hệ với chúng tôi</h4>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fmimosachu&tabs=timeline&width=150&height=90&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="150" height="90" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        <br>
        <p>Các kênh khác</p>
        <ul class="nav navbar-expand-sm  ">
          <li class="nav-item"><a href="#" class="nav-link lien-ket" style="margin-right: 40px;"><i class="fa-brands fa-facebook " style="font-size: 30px; line-height: 40px;"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link lien-ket" style="margin-right: 40px;"><i class="fa-brands fa-twitter" style="font-size: 30px; line-height: 40px;"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link lien-ket" style="margin-right: 40px;"><i class="fa-brands fa-youtube" style="font-size: 30px; line-height: 40px;"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</html>