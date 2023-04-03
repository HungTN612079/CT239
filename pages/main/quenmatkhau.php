<?php
if(isset($_POST['quenmatkhau'])) {
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
        header("Location: index.php?quanly=giohang");
        header("Location: index.php?quanly=quenmatkhau");
    } else {
        echo '<p style="color: red;">Email hoặc Mật khẩu sai, vui lòng nhập lại.</p>';
        
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" href="css/quenmatkhau.css">
        
    </head>
    <body>
    <form action="" autocomplete="off" method="POST">
    <div class="container_form">
    <a class="name-form">QUÊN MẬT KHẨU</a>
      <div class="form">
          <input type="text" id="email" class="form__input" autocomplete="off" placeholder=" ">
          <label for="email" class="form__label">Tài Khoản</label>
      </div>
      <div class="form">
          <input type="password" id="password" class="form__input" autocomplete="off" placeholder=" ">
          <label for="password" class="form__label">Mật Khẩu Cũ</label>
      </div>


      <div class="form">
          <input type="password" id="password" class="form__input" autocomplete="off" placeholder=" ">
          <label for="password" class="form__label">Mật Khẩu Mới</label>
      </div>

          <input type="submit" name="quenmatkhau" value="Đặt lại mật khẩu" class="submit">
          <a href="index.php?quanly=dangnhap" class="dntk">Quay Lại Đăng nhập</a>
        
      </div>

      


      </div>


    </body>

</html>