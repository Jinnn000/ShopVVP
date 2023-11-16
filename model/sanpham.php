<?php 

function insert_sanpham($sp_id,$sp_ten,$sp_ncc,$sp_xx,$sp_m,$_cl,$sp_g,$sp_km,$sp_nn,$sp_anh,$dm_id){
    $conn = pdo_get_connection();
                        $sql = "INSERT INTO sanpham(sanpham_id, sanpham_ten,sanpham_tenncc,sanpham_xuatxu,sanpham_mau
                        ,sanpham_chatlieu,sanpham_anh,sanpham_gia,khuyenmai,sanpham_ngaynhap,danhmuc_id) VALUES (?, ?,?,?,?,?,?,?,?,?,?)";
                        // Thực hiện truy vấn bằng hàm pdo_execute
                        try {
                            $filename= $_FILES['sp_anh']['name'];
                        $target_dir = '../image/upload/';
                        $target_file = $target_dir . basename($_FILES["sp_anh"]["name"]);
                        if (move_uploaded_file($_FILES["sp_anh"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["sp_anh"]["name"])). " has been uploaded.";
                          } else {
                           // echo "Sorry, there was an error uploading your file.";
                          }
                        // Gọi hàm để thiết lập kết nối   
                            $sp_nn_datetime = new DateTime($sp_nn);
                            pdo_execute($sql, $sp_id,$sp_ten,$sp_ncc,$sp_xx,$sp_m,$_cl,$filename,$sp_g,$sp_km,$sp_nn_datetime->format('Y-m-d H:i:s'),$dm_id);
                            echo "Thêm thành công!";
                            echo "<script>document.getElementById('sp_id').value = '';
                             document.getElementById('sp_ten').value = '';
                             document.getElementById('sp_ncc').value = '';
                             document.getElementById('sp_xx').value = '';
                             document.getElementById('sp_m').value = '';
                             document.getElementById('sp_cl').value = '';
                             document.getElementById('sp_g').value = '';
                             document.getElementById('sp_km').value = '';
                             document.getElementById('sp_nn').value = '';
                             document.getElementById('sp_anh').value = '';
                             </script>";
                            header("Location: admin_index.php?act=listsp");
                            exit();
                        } catch (PDOException $e) {
                            echo "Thêm thất bại: " . $e->getMessage();
                        }
}
function delete_sanpham($sp_id){
    $sql = "DELETE FROM sanpham WHERE sanpham_id = ?";
                pdo_execute($sql, $sp_id);
}
function load_sanpham($tensp,$danhmuc_id){
    $sql = "select * from sanpham where 1";
    if($tensp!=""){
        $sql.=" and sanpham_ten like '%".$tensp."%'";
    }
    if($danhmuc_id!=""){
        $sql.=" and danhmuc_id like '%".$danhmuc_id."%'";
    }
    $sql .= " order by sanpham_id";
    $list = pdo_query($sql);
    return $list;
}
function load_sanpham_home(){
    $sql="select * from sanpham where 1 order by sanpham_id desc limit 0,12";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_newsanpham_home(){
    $sql="select * from sanpham where 1 order by sanpham_ngaynhap desc limit 0,12";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_bestsell_home(){
    $sql="select * from sanpham where 1 order by luotmua desc limit 0,12";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_bigsale_home(){
    $sql="select * from sanpham where 1 order by khuyenmai desc limit 0,12";
    $listsp = pdo_query($sql);
    return $listsp;
}
function load_onesp( $sp_id ){
    $sql="select * from sanpham where sanpham_id= ?";
                $dm= pdo_query_one($sql, $sp_id);
                return $dm;
}
function update_sanpham($dm_id,$sp_id, $sp_ten, $sp_ncc, $sp_xx, $sp_m, $sp_cl, $sp_g,$sp_km, $sp_nn, $sp_anh)
{
    $conn = pdo_get_connection();

    try {
        $filename = $_FILES['sp_anh']['name'];
        $target_dir = '../image/upload/';
        $target_file = $target_dir . basename($_FILES["sp_anh"]["name"]);
        if (move_uploaded_file($_FILES["sp_anh"]["tmp_name"], $target_file)) {}
            $sp_nn_datetime = new DateTime($sp_nn);
            // Gọi hàm để thiết lập kết nối
            if ($filename != "") {
                $sql = "UPDATE sanpham SET danhmuc_id='".$dm_id."',sanpham_ten='" . $sp_ten . "',sanpham_tenncc='" . $sp_ncc . "',sanpham_xuatxu='" . $sp_xx . "',sanpham_mau='" . $sp_m . "'
                    ,sanpham_chatlieu='" . $sp_cl . "',sanpham_gia='".$sp_g."',khuyenmai='".$sp_km."',sanpham_ngaynhap='" . $sp_nn_datetime->format('Y-m-d H:i:s') . "' WHERE sanpham_id='" . $sp_id . "'";
            } else {
                $sql = "UPDATE sanpham SET danhmuc_id='".$dm_id."',sanpham_ten='" . $sp_ten . "',sanpham_tenncc='" . $sp_ncc . "',sanpham_xuatxu='" . $sp_xx . "',sanpham_mau='" . $sp_m . "'
                    ,sanpham_chatlieu='" . $sp_cl . "',sanpham_gia='" . $sp_g . "',khuyenmai='" . $sp_km . "',sanpham_anh='" . $filename . "',sanpham_ngaynhap='" . $sp_nn_datetime->format('Y-m-d H:i:s') . "' WHERE sanpham_id='" . $sp_id . "'";
            }

            pdo_execute($sql);
            echo "Cập nhật thành công!";
            echo "<script>document.getElementById('sp_id').value = '';
                             document.getElementById('sp_ten').value = '';
                             document.getElementById('sp_ncc').value = '';
                             document.getElementById('sp_xx').value = '';
                             document.getElementById('sp_m').value = '';
                             document.getElementById('sp_cl').value = '';
                             document.getElementById('sp_g').value = '';
                             document.getElementById('sp_km').value = '';
                             document.getElementById('sp_nn').value = '';
                             </script>";
            header("Location: admin_index.php?act=listsp");
            exit(); // Đảm bảo rằng không có mã nào được thực thi sau lệnh chuyển hướng
        
    } catch (PDOException $e) {
        echo "Cập nhật thất bại: " . $e->getMessage();
    }
}

?>