
  
<body>
  <div class="center">
    <h1>Đăng nhập</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" required>
        <span></span>
        <label>Mật khẩu</label>
      </div>
      <a class="pass" href="#" onclick="loadPage('forgotpass')">Quên mật khẩu?</a>
      <input type="submit" name="dangnhap" value="Đăng nhập" style="margin-top: 20px;">
      <div class="signup_link">
        Không phải thành viên? <a href="#" onclick="loadPage('Register')">Đăng ký</a>
      </div>
    </form>
  </div>
</body>
