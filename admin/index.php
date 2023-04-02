<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header('Location: login.php');
}
if (isset($_GET['login'])) {
    $dangxuat = $_GET['login'];
} else {
    $dangxuat = '';
}
if ($dangxuat == 'dangxuat') {
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Web thương mại điện thoại</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/styleadmin.css">
    <!-- morris -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

</head>

<body>
    <div class="wrapper">
        <?php
        include("config/config.php");
        include("modules/header.php");
        include("modules/main.php");
        include("modules/footer.php");
        ?>
    </div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- CKeditor -->
    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <!-- raphael -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- morris -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            thongke();
            var char = new Morris.Area({

                element: 'chart',

                xkey: 'date',

                ykeys: ['date', 'order', 'sales', 'quantity'],

                labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra', 'Số lượng']
            });

            $('.select-date').change(function() {
                var thoigian = $(this).val();
                if (thoigian == '7ngay') {
                    var text = '7 ngày qua';
                } else if (thoigian == '28ngay') {
                    var text = '28 ngày qua';
                } else if (thoigian == '90ngay') {
                    var text = '90 ngày qua';
                } else {
                    var text = '365 ngày qua';
                }

                $.ajax({
                    url: "modules/thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        thoigian: thoigian
                    },
                    success: function(data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                });
            })

            function thongke() {
                var text = '365 ngày qua';
                $('#text-date').text(text);
                $.ajax({
                    url: "modules/thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                });
            }
        });
    </script>
</body>

</html>