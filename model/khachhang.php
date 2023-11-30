<?php 
 
 function insert_khachhang($kh_id, $kh_ten, $kh_email, $kh_mk, $kh_dc, $kh_sdt,$kh_nt, $kh_quyen) {
    $kh_nt = date('Y-m-d'); // Lấy ngày hiện tại

    $conn = pdo_get_connection();
    $sql = "INSERT INTO khachhang(khachhang_id, khachhang_hoten, khachhang_email, khachhang_mk, khachhang_diachi
    , khachhang_sodt, khachhang_ngaytao, khachhang_quyen) VALUES ( '$kh_id', '$kh_ten',' $kh_email', '$kh_mk', '$kh_dc', '$kh_sdt', '$kh_nt', '$kh_quyen')";

    try {
        
        pdo_execute($sql);
        echo "Thêm thành công!";
        echo "<script>document.getElementById('kh_id').value = '';
             document.getElementById('kh_ten').value = '';
             document.getElementById('kh_email').value = '';
             document.getElementById('kh_mk').value = '';
             document.getElementById('kh_dc').value = '';
             document.getElementById('kh_sdt').value = '';
             document.getElementById('kh_quyen').value = '';
            
             </script>";
       // header("Location: admin_index.php?act=listkh");
       //header("Location: index.php");
        return true;
        exit();
    } catch (PDOException $e) {
        echo "Thêm thất bại: " . $e->getMessage();
        return false;
    }
}
function insert_khachhangadmin($kh_id, $kh_ten, $kh_email, $kh_mk, $kh_dc, $kh_sdt, $kh_quyen) {
    $kh_nt = date('Y-m-d'); // Lấy ngày hiện tại

    $conn = pdo_get_connection();
    $sql = "INSERT INTO khachhang(khachhang_id, khachhang_hoten, khachhang_email, khachhang_mk, khachhang_diachi
    , khachhang_sodt, khachhang_ngaytao, khachhang_quyen) VALUES (?, ?,?,?,?,?,?,?)";

    try {
        pdo_execute($sql, $kh_id, $kh_ten, $kh_email, $kh_mk, $kh_dc, $kh_sdt, $kh_nt, $kh_quyen);
        echo "Thêm thành công!";
        echo "<script>document.getElementById('kh_id').value = '';
             document.getElementById('kh_ten').value = '';
             document.getElementById('kh_email').value = '';
             document.getElementById('kh_mk').value = '';
             document.getElementById('kh_dc').value = '';
             document.getElementById('kh_sdt').value = '';
             document.getElementById('kh_quyen').value = '';
            
             </script>";
        header("Location: admin_index.php?act=list_kh");
       //header("Location: index.php");
        return true;
        exit();
    } catch (PDOException $e) {
        echo "Thêm thất bại: " . $e->getMessage();
        return false;
    }
}

function delete_khachhang($kh_id){
    $sql = "DELETE FROM khachhang WHERE khachhang_id = ?";
                pdo_execute($sql, $kh_id);
}
function load_khachang(){
    $sql = "select * from khachhang order by khachhang_hoten";
    $list = pdo_query($sql);
    return $list;
}
function load_onekh( $kh_id ){
    $sql="select * from khachhang where khachhang_id= ?";
                $dm= pdo_query_one($sql, $kh_id);
                return $dm;
}
function update_khachhang($kh_id,$kh_ten,$kh_email,$kh_mk,$kh_dc,$kh_sdt,$kh_nt,$kh_quyen){ 
    $conn = pdo_get_connection();
    $kh_nt_datetime = new DateTime($kh_nt);
    $sql = "UPDATE khachhang SET khachhang_ten=?,khachhang_email=?,khachhang_mk=?,khachhang_diachi=?,khachhang_sodt=?, khachhang_ngaytao=?, khachhang_quyen=? WHERE khahchhang_id=?";

    try {
        pdo_execute($sql, $kh_id,$kh_ten,$kh_email,$kh_mk,$kh_dc,$kh_sdt, $kh_nt_datetime->format('Y-m-d'),$kh_quyen);
        echo "Cập nhật thành công!";
        echo "<script>document.getElementById('kh_id').value = '';
                             document.getElementById('kh_ten').value = '';
                             document.getElementById('kh_email').value = '';
                             document.getElementById('kh_mk').value = '';
                             document.getElementById('kh_dc').value = '';
                             document.getElementById('kh_sdt').value = '';
                             document.getElementById('kh_nt').value = '';
                             document.getElementById('kh_quyen').value = '';
                            
                             </script>";
        header("Location: admin_index.php?act=list_kh");
        exit(); // Ensure that no further code is executed after the redirection
    } catch (PDOException $e) {
        echo "Cập nhật thất bại: " . $e->getMessage();
    }
  }
?>