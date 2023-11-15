var isSanPhamLoaded = false;
var isSanPhamNewLoaded = false;

function loadSanPham() {
    if (!isSanPhamLoaded) {
        $.ajax({
            url: 'sanpham.php',
            type: 'GET',
            success: function(response) {
                $('#sanpham-content').html(response);
                $('#sanpham-content').show();
                $('#sanphamnew-content').hide();
                isSanPhamLoaded = true;
                isSanPhamNewLoaded = false; // Đảm bảo rằng khi bấm vào "SẢN PHẨM" thì "SẢN PHẨM MỚI" không còn được load
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error);
            }
        });
    }
}

function loadSanPhamNew() {
    if (!isSanPhamNewLoaded) {
        $.ajax({
            url: 'sanphamnew.php',
            type: 'GET',
            success: function(response) {
                $('#sanphamnew-content').html(response);
                $('#sanphamnew-content').show();
                $('#sanpham-content').hide();
                isSanPhamNewLoaded = true;
                isSanPhamLoaded = false; // Đảm bảo rằng khi bấm vào "SẢN PHẨM MỚI" thì "SẢN PHẨM" không còn được load
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error);
            }
        });
    }
}

$(document).ready(function() {
    loadSanPham(); // Nếu bạn muốn tự động load "SẢN PHẨM" khi trang được tải
});

// ... Các hàm khác ...
