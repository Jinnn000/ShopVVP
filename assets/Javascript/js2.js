var options = {
    sanpham: { loaded: false, container: '#sanpham-content' },
    sanphamnew: { loaded: false, container: '#sanphamnew-content' },
    bigsale: { loaded: false, container: '#bigsale-content' },
    bestsell: { loaded: false, container: '#bestsell-content' },
    // Thêm các tùy chọn khác nếu cần
};

function loadContent(option) {
    if (!options[option].loaded) {
        $.ajax({
            url: option + '.php',
            type: 'GET',
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
