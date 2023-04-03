<?php
if(isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_dangky'] = $row_data['tenkhachhang'];
        header("Location: index.php?quanly=index");
        
    } else {
        echo '<p style="color: red;">Email hoặc Mật khẩu sai, vui lòng nhập lại.</p>';
       
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
            .slider{
                display: none;
            }
        </style>
    </head>
    <body>
    <form action="" autocomplete="off" method="POST">
    <div class="container_form">
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
        
      </div>


      </div>


    </body>

</html>
