<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Website thương mại điện tử bán điện thoại di động</title>
    <!-- logo -->
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- LINK CSS GRID FOOTER -->
    <link rel="stylesheet" href="css/grid.css">
    <!-- LINK CSS RESPONSIVE -->
    <link rel="stylesheet" href="css/resposive.css">
    <!-- LINK CSS LOGIN -->
    <link rel="stylesheet" href="css/login.css">
    <!-- LINK CSS SHOPPING CART -->
    <link rel="stylesheet" href="css/shoppingCart.css">
    <!-- LINK BOOTSTRAP -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

</head>

<body>
    <?php
    session_start();
    include("admin/config/config.php");
    include("pages/header.php");
    include("pages/menu.php");
    include("pages/main.php");
    include("pages/footer.php");
    ?>

    <div id="backtop">
        <i class="fa-sharp fa-solid fa-arrow-up"></i>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav li').click(function() {
            $('#tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').hide();

            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
        });
    </script>
    <!-- JS - SIDEBAR -->
    <script src="js/script.js"></script>
    <!-- JS CART -->
    <script src="js/cart.js"></script>
    <!-- JQUERY MENU NAVIGATION-->
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script>
        $(document).ready(function() {
            // Tìm tất cả các li có sub-menu và thêm vào nó class has-child
            $('.sub-menu').parent('li').addClass('has-child');

            // backtop
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('#backtop').fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });
            $("#backtop").click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            })
        });
    </script>
</body>

</html>