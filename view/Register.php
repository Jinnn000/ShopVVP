
<?php 
  include("../model/pdo.php");
  include("../model/khachhang.php");
  ?>

<body style="height: 2000px">
  <div class="center" style="height: 650px;">
    <h1>Đăng ký</h1>
    <form action="" method="post">
      <div class="txt_field">
        <input type="text" name="kh_ten" required>
        <span></span>
        <label>Họ và tên</label>
      </div>
      <div class="txt_field">
        <input type="text" name="kh_email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" name="kh_mk" required>
        <span></span>
        <label>Mật khẩu</label>
      </div>
      <div class="txt_field">
        <input type="text" name="kh_dc" required>
        <span></span>
        <label>Địa chỉ</label>
      </div>
      <div class="txt_field">
        <input type="text" name="kh_sdt" required>
        <span></span>
        <label>Số điện thoại</label>
      </div>
      <input type="submit" value="Đăng ký" name="dangky">
      <div class="signup_link">
        Đã có tài khoản? <a href="#" onclick="loadPage('Login')">Đăng nhập ngay</a>
      </div>
    </form>
  </div>
  <?php
  if (isset($_POST['dangky'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (
        isset($_POST['kh_ten']) && isset($_POST['kh_email']) && isset($_POST['kh_mk'])
        && isset($_POST['kh_dc']) && isset($_POST['kh_sdt']) 
      ) {
        $random_number = rand(1, 10000);
        $kh_id = "SP_" . $random_number;
        // Nhận dữ liệu từ form
        $ten = $_POST['kh_ten'];
        $email = $_POST['kh_email'];
        $password = $_POST['kh_mk']; // Băm mật khẩu
        $dc = $_POST['kh_dc'];
        $sdt = $_POST['kh_sdt'];
        $kh_nt = date('Y-m-d');
        $kh_q = 0;
        // Thực hiện truy vấn INSERT

        $result = insert_khachhang($kh_id, $ten, $email, $password, $dc, $sdt, $kh_nt, $kh_q);
        // Kiểm tra và thông báo kết quả
        if ($result) {
          echo "Đăng ký thành công!";
        } else {
          echo "Đăng ký thất bại: ";
        }

        // Đóng kết nối

      }
    }
  }

  ?>
</body>