var options = {
    sanpham: { loaded: false, container: '#sanpham-content' },
    sanphamnew: { loaded: false, container: '#sanphamnew-content' },
    bigsale: { loaded: false, container: '#bigsale-content' },
    bestsell: { loaded: false, container: '#bestsell-content' },
    // Thêm các tùy chọn khác nếu cần
};

// function loadContent(option) {
//     if (!options[option].loaded) {
//         $.ajax({
//             url:'view/'+ option + '.php',
//             type: 'GET',
//             success: function(response) {
//                 $(options[option].container).html(response);
//                 $(options[option].container).show();
//                 // Ẩn các container khác
//                 for (var key in options) {
//                     if (key !== option) {
//                         $(options[key].container).hide();
//                         options[key].loaded = false;
//                     }
//                 }
//                 options[option].loaded = true;
//             },
//             error: function(xhr, status, error) {
//                 console.error('Error:', status, error);
//             }
//         });
//     }
// }
function loadContent(option) {
    if (!options[option].loaded) {
        $.ajax({
            url: "view/" + option + ".php", // Sửa đường dẫn đến thư mục views
            type: "GET",
            success: function(response) {
                $(options[option].container).html(response);
                $(options[option].container).show();
                // Ẩn các container khác
                for (var key in options) {
                    if (key !== option) {
                        $(options[key].container).hide();
                        options[key].loaded = false;
                    }
                }
                options[option].loaded = true;
            },
            error: function(xhr, status, error) {
                console.error('Error:', status, error);
            }
        });
    }
}
function ajax_danhmucsp(danhmuc_id) {
    // Thực hiện AJAX
    $.ajax({
        type: 'POST',
        url: "view/dmsanpham.php", // Thay đổi đường dẫn tới file PHP của bạn
        data: { danhmuc_id: danhmuc_id },
        success: function(response) {
            // Xử lý kết quả từ server
            $('#content').html(response);
            // Có thể thực hiện các bước tiếp theo tại đây, ví dụ: cập nhật nội dung trang web, hiển thị sản phẩm, v.v.
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}

$(document).ready(function() {
    // Nếu bạn muốn tự động load một tùy chọn khi trang được tải
    loadContent('sanpham');
});

// Sử dụng hàm loadContent() cho các sự kiện click tương ứng với từng tùy chọn
$('#sanpham-link').click(function() {
    loadContent('sanpham');
});

$('#sanphamnew-link').click(function() {
    loadContent('sanphamnew');
});

$('#bigsale-link').click(function() {
    loadContent('bigsale');
});
$('#bestsell-link').click(function() {
    loadContent('bestsell');
});

// Thêm các sự kiện click khác nếu có thêm tùy chọn

function loadPage(page) {
    $.ajax({
        url: "view/"+page + ".php", // Tên file PHP tương ứng với trang cần load
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#content").html(data); // Thay thế nội dung của #content bằng nội dung của trang mới
        },
        error: function () {
            alert("Error loading page");
        }
    });
}
