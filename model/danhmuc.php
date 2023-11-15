<?php 

function insert_danhmuc($dm_id,$dm_ten){
    $conn = pdo_get_connection();
                        $sql = "INSERT INTO danhmuc(danhmuc_id, danhmuc_ten) VALUES (?, ?)";
                        // Thực hiện truy vấn bằng hàm pdo_execute
                        try {
                            pdo_execute($sql, $dm_id, $dm_ten);
                            echo "Thêm thành công!";
                            echo "<script>document.getElementById('dm_id').value = ''; document.getElementById('dm_ten').value = '';</script>";
                            header("Location: admin_index.php?act=listdm");
                            exit();
                        } catch (PDOException $e) {
                            echo "Thêm thất bại: " . $e->getMessage();
                        }
}
function delete_danhmuc($dm_id){
    $sql = "DELETE FROM danhmuc WHERE danhmuc_id = ?";
                pdo_execute($sql, $dm_id);
}
function load_danhmuc(){
    $sql = "select * from danhmuc order by danhmuc_ten";
    $list = pdo_query($sql);
    return $list;
}
function load_one( $dm_id ){
    $sql="select * from danhmuc where danhmuc_id= ?";
                $dm= pdo_query_one($sql, $dm_id);
                return $dm;
}
function update_danhmuc($dm_id,$dm_ten){ 
    $conn = pdo_get_connection();
    $sql = "UPDATE danhmuc SET danhmuc_ten=? WHERE danhmuc_id=?";

    try {
        pdo_execute($sql, $dm_ten, $dm_id);
        echo "Cập nhật thành công!";
        echo "<script>document.getElementById('dm_id').value = ''; document.getElementById('dm_ten').value = '';</script>";
        header("Location: admin_index.php?act=listdm");
        exit(); // Ensure that no further code is executed after the redirection
    } catch (PDOException $e) {
        echo "Cập nhật thất bại: " . $e->getMessage();
    }
  }
?>