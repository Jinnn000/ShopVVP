<!DOCTYPE html>
<html lang="en">
<?php 

    if(is_array($arrsp)){
        extract($arrsp);
    }

    $img = "../image/" . $sanpham_anh;
     $hinh = "<img src='" . $img . "' height=80px>";

     $sp_nn_datetime = new DateTime($sanpham_ngaynhap);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="../image/logo.png"/>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <div id="fb-root"></div>
    <title>Quản lý trang web</title>
    </head>
    <body>
        <div class="container bg-light">
            <h2>Thêm mới loại hàng</h2>
        <form action="admin_index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="sp_id" placeholder="Mã sản phẩm" value="<?=$sanpham_id?>" name="sp_id" disabled>
            </div>
            <div class="mb-3">     
              <input type="text" class="form-control" id="sp_ten" placeholder="Tên sản phẩm" value="<?=$sanpham_ten?>" name="sp_ten">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="sp_ncc" placeholder="Nhà cung cấp" value="<?=$sanpham_tenncc?>" name="sp_ncc">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_xx" placeholder="Xuất xứ" value="<?=$sanpham_xuatxu?>" name="sp_xx">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_m" placeholder="Màu" value="<?=$sanpham_mau?>" name="sp_m">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_cl" placeholder="Chất liệu" value="<?=$sanpham_chatlieu?>" name="sp_cl">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_g" placeholder="Giá" value="<?=$sanpham_gia?>" name="sp_g">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="sp_km" placeholder="Khuyến mãi" value="<?=$khuyenmai?>" name="sp_km">
              </div>
              <div class="mb-3">
                <p>Ngày nhập</p>
                <input type="datetime-local" class="form-control" id="sp_nn" placeholder="Ngày nhập" value="<?=$sp_nn_datetime->format('Y-m-d H:i:s')?>" name="sp_nn" >
              </div>
              <div class="mb-3">
                <p>Ảnh</p>
                <input type="file" name="sp_anh" id="sp_anh" placeholder="Ảnh">
                <?=$hinh?>
              </div>
              <div class="mb-3">
                <p>Danh mục</p>
                <select name="dm_id" >
                  
                  <?php 
                      foreach ($listdm as $danhmuc ) {
                        extract($danhmuc);
                        if($dm_id==$danhmuc_id) $s="selected"; else $s= "";
                        echo'<option value="'.$danhmuc_id.'" '.$s.'>'.$danhmuc_ten.'</option>';
                      }
                  ?>
                  
                </select>
              </div>
              <input type="hidden" name="sp_id" value="<?php if (isset($sanpham_id) && ($sanpham_id != "")) echo $sanpham_id;?>">
            <button type="submit" name="btn_suasp" class="btn btn-primary btn-sm">Cập nhật</button>
            <button type="reset" class="btn btn-primary btn-sm">Nhập lại</button>
            <a href="admin_index.php?act=listsp"><button type="button" class="btn btn-primary btn-sm">Danh sách</button></a>
          </form>
        </div>
        <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
