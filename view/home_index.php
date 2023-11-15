<?php 
include("model/sanpham.php");
include("model/pdo.php");

if(isset($_GET['active']) && $_GET['active'] != ""){
    $act = $_GET['active']; // Sửa lỗi chính tả: 'acttive' thành 'active'
    switch ($act) {
        case 'sanpham':
            include "sanpham.php";
            break;
        default:
            include "sanpham.php";
            break;
    }
} else {
    include("sanpham.php");
}
?>
