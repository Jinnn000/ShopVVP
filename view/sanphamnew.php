<!DOCTYPE html>
<html lang="en">
    <?php 
    include("../model/pdo.php");
    include("../model/sanpham.php");
    $listsp=load_newsanpham_home();
    session_start();
    ?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="view/stylesp.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<section class="section-products">
<div class="container">
    <div class="row">
        <?php 
            foreach ($listsp as $sanpham) {
                extract($sanpham);
                $img = "image/" . $sanpham_anh;
                  $hinh = "<img src='" . $img . "'>";
                  $formated= number_format($sanpham_gia,0,'.','.');
                echo'<div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product"  >
                
                        <div class="part-1" style="background: url('.$img.') no-repeat center; background-size:contain;">
                        <span class="new">new</span>
                                <ul>
                                <li>       
                                <form action="view/cart.php" method="post">
                                <input type="hidden" name="id" value="' . $sanpham_id . '">
                                <input type="hidden" name="name" value="' . $sanpham_ten . '">
                                <input type="hidden" name="anh" value="' . $img . '">
                                <input type="hidden" name="price" value="' . $sanpham_gia . '">
                                <button type="submit" class="btn btn-success" name="addtocart" value="true"><i class="fas fa-shopping-cart"></i></button>
                                
                                </form>
                                </li>
                                        
                                        <li><a href="view/sp_detail.php?id='.$sanpham_id.'"><i class="fas fa-expand"></i></a></li>
                                </ul>
                        </div>
                        <div class="part-2">
                                <h1 class="product-title">'.$sanpham_ten.'</h1>
                                
                                <h4 class="product-price">'.$formated.' VND</h4>
                        </div>
                </div>
        </div>';
            }
        ?>
    </div>
</div>
</section>