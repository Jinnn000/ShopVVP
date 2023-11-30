<!DOCTYPE html>
<html lang="en">
    <?php 
    include("../model/pdo.php");
    include("../model/sanpham.php");
    $listsp=load_dm04();
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
                                <ul>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
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