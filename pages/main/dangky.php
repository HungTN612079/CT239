<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
        VALUE('" . $tenkhachhang . "', '" . $email . "', '" . $diachi . "', '" . $matkhau . "', '" . $dienthoai . "')");
    if ($sql_dangky) {
        echo '<p style="color: green;">Bạn đã đăng ký thành công.</p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['email'] = $email;
        
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
       // header('Location:index.php?quanly=giohang');
        header("Location: index.php?quanly=index");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/dangky.css">
        <script src="js/register.js" ></script>
        <style>
            .slider{
                display: none;
            }
        </style>

    </head>
        <form method="post" action="" id="reform" name="reform">
            <div class="container_form">
            <a class="name-form">ĐĂNG KÝ TÀI KHOẢN</a>
            <table cellpadding="10" class="table">
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" id="email" name="email" value=""/>
                        <span id="email_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td>
                        <input type="password" id="matkhau" name="matkhau" value=""/>
                        <span id="matkhau_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Nhập lại mật khẩu: </td>
                    <td>
                        <input type="password" id="repassword" name="repassword" value=""/>
                        <span id="repassword_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Địa thoại: </td>
                    <td>
                        <input type="text" id="dienthoai" name="dienthoai" value=""/>
                        <span id="dienthoai_error"></span>
                    </td>
                </tr>
                

                <tr>
                    <td>Địa chỉ: </td>
                    <td>
                        <input type="text" id="diachi" name="diachi" value=""/>
                        <span id="diachi_error"></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" class="submit" onclick="return validate();" id="dangky" name="dangky" value="Đăng ký"/>
                        <a href="index.php?quanly=dangnhap" class="dntk">Đăng nhập</a>
                    </td>
                </tr>
            </table>
            </div>
            
        </form>
    </body>
</html>