<?php
session_start();
include('config/config.php');
?>
<?php
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['password']);
    if ($taikhoan == '' || $matkhau == '') {
        echo '<script>alert("Làm ơn không để trống")</script>';
    } else {
        $sql_select_admin = mysqli_query($mysqli, "SELECT * FROM admin WHERE email = '" . $taikhoan . "' AND password = '" . $matkhau . "' LIMIT 1");
        $count = mysqli_num_rows($sql_select_admin);
        $row_dangnhap = mysqli_fetch_array($sql_select_admin);
        if ($count > 0) {
            $_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
            $_SESSION['admin_id'] = $row_dangnhap['admin_id'];
            header("Location: index.php");
        } else {
            echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.");</script>';
            header("Location: login.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/loginadmin.css">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <div id="wrapper">
        <form action="" id="form-login" autocomplete="off" method="POST">
            <h1 class="form-heading">Đăng nhập Admin</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="username">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit" name="dangnhap">
        </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>