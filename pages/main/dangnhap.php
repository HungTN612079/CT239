<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM dangky WHERE email = '" . $email . "' AND matkhau = '" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_dangky'] = $row_data['tenkhachhang'];
        header("Location: index.php?quanly=giohang");
    } else {
        echo '<p style="color: red;">Email hoặc Mật khẩu sai, vui lòng nhập lại.</p>';
    }
}

?>

<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];

    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('" . $tenkhachhang . "', '" . $email . "', '" . $diachi . "', '" . $matkhau . "', '" . $dienthoai . "')");
    if ($sql_dangky) {
        echo '<p style="color: green;">Bạn đã đăng ký thành công.</p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['email'] = $email;

        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header('Location:index.php?quanly=dangnhap');
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="css/dangnhap.css">
    <style>
        .slider {
            display: none;
        }
    </style>
</head>

<body>
    <form action="" autocomplete="off" method="POST">

        <!-- <div class="container_form">
            <a class="name-form">ĐĂNG NHẬP</a>

            <div class="form">
                <input type="text" id="email" class="form__input" name="email" autocomplete="off" placeholder=" ">
                <label for="email" class="form__label">Tài Khoản Email</label>
            </div>
            <div class="form">
                <input type="password" id="password" name="password" class="form__input" autocomplete="off" placeholder=" ">
                <label for="email" class="form__label">Mật Khẩu</label>
            </div>
            <input type="submit" name="dangnhap" value="Đăng nhập" class="submit">
            <a href="index.php?quanly=quenmatkhau" class="qmk">Quên Mật Khẩu</a>
            <p>Bạn chưa có tài khoản? <a href="#" id="register-btn">Đăng ký</a></p> -->

        <div class="login-container">
            <h2>Đăng nhập</h2>
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="dangnhap" value="Đăng nhập" >Đăng nhập</button>
            </form>
            <p>Bạn chưa có tài khoản? <a href="#" id="register-btn">Đăng ký</a></p>
            <p>Bạn quên mật khẩu? <a href="index.php?quanly=quenmatkhau" class="qmk">Quên Mật Khẩu</a></p>

        </div>

    </form>
    <form action="" autocomplete="off" method="POST">
        <div class="register-popup" id="register-popup">
            <div class="popup-content">
                <h2>Đăng ký</h2>
                <form>
                    <label for="fullname">Họ và tên:</label>
                    <input type="text" id="hovaten" name="hovaten" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="matkhau" name="matkhau" required>
                    <label for="confirm-password">Nhập lại mật khẩu:</label>
                    <input type="password" id="repassword" name="repassword" required>
                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="diachi" name="diachi" required>
                    <label for="phone">Số điện thoại:</label>
                    <input type="tel" id="dienthoai" name="dienthoai" pattern="[0-9]{10}" required>
                    <button type="submit" class="submit" id="dangky" name="dangky">Đăng ký</button>
                    <button type="button" id="close-btn">Close Form</button>
                </form>
            </div>
        </div>
    </form>
    <script src="js/dangnhap.js"></script>


</body>

</html>