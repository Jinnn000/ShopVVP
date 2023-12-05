<!DOCTYPE html>
<?php
  include("../model/pdo.php");
  include("../model/sanpham.php");
  
  $sp=load_onesp($_GET['id']);

  if(is_array($sp)){

    extract($sp);}
  
    $img = "../image/" . $sanpham_anh;
    $hinh = "<img src='" . $img . "' height=80px>";
    
    $sp_nn_datetime = new DateTime($sanpham_ngaynhap);
   // $page="localhost/ShopVVP/index.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/styledm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
            <img src="<?php echo $img?>" alt="product image ">
              
            </div>
          </div>
          
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $sanpham_ten; ?></h2>
          <a href = "../index.php" class = "product-link">visit my store</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
           
            <p class = "new-price">Price:  <span><?php echo $sanpham_gia; ?>VNĐ</span></p>
          </div>

          <div class = "product-detail">
            <h2>Mô tả : </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            <ul>
              <li>Màu: <span><?php echo $sanpham_mau; ?></span></li>
              <li>Nhà cung cấp: <span><?php echo $sanpham_ten; ?></span></li>
              <li>Xuất Xứ: <span><?php echo $sanpham_xuatxu; ?></span></li>
              
              <li>Chất liệu: <span><?php echo $sanpham_chatlieu; ?></span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
           
          </div>

          
        </div>
      </div>
    </div>

    
    <script src="../assets/Javascript/scriptdm.js"></script>
  </body>
</html>