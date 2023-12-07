

<?php 

include("view/header.php");
?>
<body>
    

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="assets/Javascript/js2.js"></script>
<script>
   
    // Gọi hàm loadContent('home') khi trang được tải
    $(document).ready(function () {
        loadPage('home');
    });
</script>

</body>
<?php
include("view/footer.php");
?>