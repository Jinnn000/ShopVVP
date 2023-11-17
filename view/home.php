<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" href="../image/logo.png"/>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <div id="fb-root"></div>
  <script src="../assets/Jquery/Jquery3.7.1.js"></script>
    <script src="../assets/Javascript/script.js"></script>
    <script src="../assets/Javascript/js2.js"></script>
</head>
</html> -->
<body style="height: 1500px;">
    <div class="container" style="margin-top:20px ;" id="container1">
      <div class="row" >
        <div class="col-sm-12">
          <div id="demo" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>           
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/Untitled.png" alt="0" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="image/Untitled2.png" alt="1" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="image/Untitled3.png" alt="2" class="d-block" style="width:100%">
              </div>
              <div class="carousel-item">
                <img src="image/999.png" alt="3" class="d-block" style="width:100%">
              </div>
            </div>           
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container d-flex justify-content-center align-items-center bg-white "
    style="margin-top: 30px; font-size: 16px;">
    <ul class="nav navbar-expand-sm  ">
      <li class="nav-item"><a href="#" onclick="loadContent('sanpham');" class="nav-link lien-ket" style="color: black; margin-right:  57px;"><b>SẢN PHẨM
            </b></a></li>
      <li class="nav-item"><a href="#" onclick="loadContent('sanphamnew');" class="nav-link lien-ket" style="color: black; margin-right:  57px; "><b>SẢN PHẨM
            MỚI</b></a></li>
      <li class="nav-item"><a href="#" onclick="loadContent('bestsell');" class="nav-link lien-ket" style="color: black; margin-right:  57px;"><b>SẢN PHẨM
            BÁN CHẠY</b></a></li>
      <li class="nav-item"><a href="#" onclick="loadContent('bigsale');" class="nav-link lien-ket" style="color: black;"><b>BIG SALE</b></a></li>
    </ul>
    
  </div>
  <hr>
  <div class="container" id="sanpham-content"></div>
  <div class="container" id="sanphamnew-content"></div>
  <div class="container" id="bestsell-content"></div>
  <div class="container" id="bigsale-content"></div>

  <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
