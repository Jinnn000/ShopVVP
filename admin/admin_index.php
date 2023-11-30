<?php
include("../model/pdo.php");
include("admin_header.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/khachhang.php");
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':


            if (isset($_POST['btn_them'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Kiểm tra xem các trường cần thiết đã được gửi hay không
                    if (isset($_POST['dm_id']) && isset($_POST['dm_ten'])) {
                        $dm_id = $_POST['dm_id'];
                        $dm_ten = $_POST['dm_ten'];
                        // Gọi hàm để thiết lập kết nối   
                        insert_danhmuc($dm_id, $dm_ten);
                    } else {
                        echo "Vui lòng nhập đầy đủ thông tin!";
                    }
                } else {
                    // Nếu không phải là phương thức POST, có thể chuyển hướng hoặc hiển thị thông báo lỗi.
                    echo "Lỗi: Phương thức không hợp lệ!";
                }
            }

            include('danhmuc/danhmuc.php');
            break;

        case 'listdm':
            $list= load_danhmuc();
            include "danhmuc/ds_danhmuc.php";
            break;

        case 'xoadm':
            $danhmuc_id = isset($_GET['danhmuc_id']) ? $_GET['danhmuc_id'] : '';

            // Kiểm tra xem $danhmuc_id có giá trị không rỗng không
            if (!empty($danhmuc_id)) {
                // Sử dụng hàm pdo_execute để xóa bản ghi
                delete_danhmuc($danhmuc_id);
            } else {
                // Xử lý khi danhmuc_id không hợp lệ hoặc thiếu
                echo "danhmuc_id không hợp lệ hoặc thiếu";
            }
            
            $list = load_danhmuc();
            include "danhmuc/ds_danhmuc.php";
            break;

        case 'suadm':
            $danhmuc_id = isset($_GET['danhmuc_id']) ? $_GET['danhmuc_id'] : '';
            if (!empty($danhmuc_id)) {
                // Sử dụng hàm pdo_execute để xóa bản ghi
                
                $dm= load_one($danhmuc_id);
            } else {
                // Xử lý khi danhmuc_id không hợp lệ hoặc thiếu
                echo "danhmuc_id không hợp lệ hoặc thiếu";
            }
            
            include "danhmuc/suadm.php";
            break;
        case 'update':
                if (isset($_POST['btn_sua'])) {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Validate and sanitize user input
                        $dm_id = isset($_POST['dm_id']) ? $_POST['dm_id'] : '';
                        $dm_ten = isset($_POST['dm_ten']) ? $_POST['dm_ten'] : '';
                       
                        if (!empty($dm_id) && !empty($dm_ten)) {
                            // Proceed with the update
                            update_danhmuc($dm_id, $dm_ten);
                        } else {
                            echo "Vui lòng nhập đầy đủ thông tin!";
                        }
                    } else {
                        echo "Lỗi: Phương thức không hợp lệ!";
                    }
                }
            
                $list = load_danhmuc();
                include "danhmuc/ds_danhmuc.php";
                break;
                /*sanpham */
        case 'addsp':
            if (isset($_POST['btn_themsp'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Kiểm tra xem các trường cần thiết đã được gửi hay không
                    if (isset($_POST['sp_id']) && isset($_POST['sp_ten']) && isset($_POST['sp_ncc']) && isset($_POST['sp_xx']) && isset($_POST['sp_m'])
                     && isset($_POST['sp_g']) && isset($_POST['sp_cl']) && isset($_FILES['sp_anh']) && isset($_POST['sp_nn']) && isset($_POST['sp_km'])) {
                        $dm_id = $_POST['dm_id'];
                        $sp_id = $_POST['sp_id'];
                        $sp_ten = $_POST['sp_ten'];
                        $sp_ncc = $_POST['sp_ncc'];
                        $sp_xx = $_POST['sp_xx'];
                        $sp_m = $_POST['sp_m'];
                        $sp_g = $_POST['sp_g'];
                        $sp_cl = $_POST['sp_cl'];                        
                        $sp_nn = $_POST['sp_nn'];
                        $sp_km = $_POST['sp_km'];
                        
                        // Kiểm tra xem file đã được tải lên hay chưa
                        if (isset($_FILES['sp_anh'])) {
                            $filename = $_FILES['sp_anh']['name'];
                            insert_sanpham($sp_id, $sp_ten, $sp_ncc, $sp_xx, $sp_m, $sp_cl, $sp_g,$sp_km, $sp_nn, $filename, $dm_id);
                        } else {
                            echo "Vui lòng chọn một ảnh!";
                        }
                    } else {
                        echo "Vui lòng nhập đầy đủ thông tin!";
                    }
                } else {
                    // Nếu không phải là phương thức POST, có thể chuyển hướng hoặc hiển thị thông báo lỗi.
                    echo "Lỗi: Phương thức không hợp lệ!";
                }
            }
            $listdm = load_danhmuc();
            include "sanpham/sanpham.php";
            break;
         case 'listsp':
            if (isset($_POST['btn_ok'])) {
                $tensp = $_POST['tensp'];
                $danhmuc_id= $_POST['dm_id'];
            }else {
                $tensp = "";
                $danhmuc_id= "";
            }
                $listdm=load_danhmuc();
                $list= load_sanpham($tensp,$danhmuc_id);
                include "sanpham/ds_sanpham.php";
                break;
        case 'xoasp':
           
                $sp_id = isset($_GET['sanpham_id']) ? $_GET['sanpham_id'] : '';
        
                    // Kiểm tra xem $sanpham_id có giá trị không rỗng không
                    if (!empty($sp_id)) {
                        // Sử dụng hàm pdo_execute để xóa bản ghi
                        delete_sanpham($sp_id);
                    } else {
                        // Xử lý khi danhmuc_id không hợp lệ hoặc thiếu
                        echo "sanpham_id không hợp lệ hoặc thiếu";
                    }
                   
                    $listdm=load_danhmuc();
                $list= load_sanpham("","");
                include "sanpham/ds_sanpham.php";
                    break;
        
        case 'suasp':
                    $sanpham_id = isset($_GET['sanpham_id']) ? $_GET['sanpham_id'] : '';
                    if (!empty($sanpham_id)) {
                        // Sử dụng hàm pdo_execute để xóa bản ghi
                        
                        $arrsp= load_onesp($sanpham_id);
                    } else {
                        // Xử lý khi danhmuc_id không hợp lệ hoặc thiếu
                        echo "sanpham_id không hợp lệ hoặc thiếu";
                    }
                    $listdm = load_danhmuc();
                    include "sanpham/suasp.php";
                    break;
        case 'updatesp':
                        if (isset($_POST['btn_suasp'])) {
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Validate and sanitize user input
                                $dm_id=isset($_POST['dm_id']) ? $_POST['dm_id'] : '';
                                $sp_id = isset($_POST['sp_id']) ? $_POST['sp_id'] : '';
                                $sp_ten = isset($_POST['sp_ten']) ? $_POST['sp_ten'] : '';
                                $sp_ncc = isset($_POST['sp_ncc']) ? $_POST['sp_ncc'] : '';
                                $sp_xx = isset($_POST['sp_xx']) ? $_POST['sp_xx'] : '';
                                $sp_m = isset($_POST['sp_m']) ? $_POST['sp_m'] : '';
                                $sp_cl = isset($_POST['sp_cl']) ? $_POST['sp_cl'] : '';
                                $sp_g = isset($_POST['sp_g']) ? $_POST['sp_g'] : '';
                                $sp_km = isset($_POST['sp_km']) ? $_POST['sp_km'] : '';
                                $sp_nn = isset($_POST['sp_nn']) ? $_POST['sp_nn'] : '';
                                $sp_anh = isset($_POST['sp_anh']) ? $_POST['sp_anh'] : '';
                    
                                if (!empty($dm_id) &&!empty($sp_id) && !empty($sp_ten) && !empty($sp_ncc)
                                && !empty($sp_xx) && !empty($sp_m)&& !empty($sp_cl)&&
                                !empty($sp_g)){
                                    // Proceed with the update
                                    update_sanpham($sp_id, $sp_ten, $sp_ncc, $sp_xx, $sp_m, $sp_cl, $sp_g,$sp_km, $sp_nn, $filename, $dm_id);
                                } else {
                                    echo "Vui lòng nhập đầy đủ thông tin!";
                                }
                            } else {
                                echo "Lỗi: Phương thức không hợp lệ!";
                            }
                        }
                    
                        $listdm = load_danhmuc();
                        $list= load_sanpham("","");
                        include "sanpham/ds_sanpham.php";
                        break;
        case 'addkhachhang':
            if (isset($_POST['btn_them'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Kiểm tra xem các trường cần thiết đã được gửi hay không
                    if (isset($_POST['kh_id']) && isset($_POST['kh_ten'])&& isset($_POST['kh_email'])&& isset($_POST['kh_mk'])
                    && isset($_POST['kh_dc'])&& isset($_POST['kh_sdt'])&& isset($_POST['kh_quyen'])) {
                        $kh_id = $_POST['kh_id'];
                        $kh_ten = $_POST['kh_ten'];
                        $kh_email = $_POST['kh_email'];
                        $kh_mk = $_POST['kh_mk'];
                        $kh_dc = $_POST['kh_dc'];
                        $kh_sdt = $_POST['kh_sdt'];
                        $kh_quyen = $_POST['kh_quyen'];
                        $kh_nt = date('Y-m-d');
                        // Gọi hàm để thiết lập kết nối   
                        insert_khachhangadmin($kh_id, $kh_ten, $kh_email, $kh_mk, $kh_dc, $kh_sdt,$kh_nt, $kh_quyen);
                    } else {
                        echo "Vui lòng nhập đầy đủ thông tin!";
                    }
                } else {
                    // Nếu không phải là phương thức POST, có thể chuyển hướng hoặc hiển thị thông báo lỗi.
                    echo "Lỗi: Phương thức không hợp lệ!";
                }
            }

            include('khachhang/khachhang.php');
            break;
        case 'list_kh':
            $list= load_khachang();
            include "khachhang/ds_khachhang.php";
            break;
        case 'suakh':
            $khachhang_id = isset($_GET['khachhang_id']) ? $_GET['khachhang_id'] : '';
            if (!empty($khachhang_id)) {
                // Sử dụng hàm pdo_execute để xóa bản ghi
                
                $kh= load_onekh($khachhang_id);
            } else {
                // Xử lý khi danhmuc_id không hợp lệ hoặc thiếu
                echo "khachhang_id không hợp lệ hoặc thiếu";
            }
            
            include "khachhang/suakhach.php";
            break;
            case 'updatekh':
                if (isset($_POST['btn_sua'])) {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Validate and sanitize user input
                        $kh_id=isset($_POST['kh_id']) ? $_POST['kh_id'] : '';
                        $kh_ten = isset($_POST['kh_ten']) ? $_POST['kh_ten'] : '';
                        $kh_email = isset($_POST['kh_email']) ? $_POST['kh_email'] : '';
                        $kh_mk= isset($_POST['kh_mk']) ? $_POST['kh_mk'] : '';
                        $kh_dc = isset($_POST['kh_dc']) ? $_POST['kh_dc'] : '';
                        $kh_sdt = isset($_POST['kh_sdt']) ? $_POST['kh_sdt'] : '';
                        $kh_nt = isset($_POST['kh_nt']) ? $_POST['kh_nt'] : '';
                        $kh_q = isset($_POST['kh_q']) ? $_POST['kh_q'] : '';
                        
                        
                        if (!empty($kh_id) &&!empty($kh_ten) && !empty($kh_email) && !empty($kh_mk)
                        && !empty($kh_dc) && !empty($kh_sdt)&& !empty($kh_nt)&&
                        !empty($kh_q)){
                            // Proceed with the update
                            update_khachhang($kh_id,$kh_ten,$kh_email,$kh_mk,$kh_dc,$kh_sdt,$kh_nt,$kh_quyen);
                        } else {
                            echo "Vui lòng nhập đầy đủ thông tin!";
                        }
                    } else {
                        // Nếu không phải là phương thức POST, có thể chuyển hướng hoặc hiển thị thông báo lỗi.
                        echo "Lỗi: Phương thức không hợp lệ!";
                    }
                }
            
                $list = load_khachang();
                include "khachhang/ds_khachhang.php";
                break;
        case 'xoakh':
                $khachhang_id = isset($_GET['khachhang_id']) ? $_GET['khachhang_id'] : '';
    
                // Kiểm tra xem $danhmuc_id có giá trị không rỗng không
                if (!empty($khachhang_id)) {
                    // Sử dụng hàm pdo_execute để xóa bản ghi
                    delete_khachhang($khachhang_id);
                } else {
                    // Xử lý khi danhmuc_id không hợp lệ hoặc thiếu
                    echo "khachhang_id không hợp lệ hoặc thiếu";
                }
                
                $list = load_khachang();
                include "khachhang/ds_khachhang.php";
                break;
        case 'thongke':
            include "khachhang/ds_khachhang.php";
            break;
        default:
            include "admin_home.php";
            break;
    }
} else {
    include("admin_home.php");
}

include("admin_footer.php");
