<?php
if (isset($_POST['doimatkhau'])) {
    $taikhoan = $_POST['email'];
    $matkhau_cu = mzd5($_POST['password_cu']);
    $matkhau_moi = md5($_POST['password_moi']);
    $sql = "SELECT * FROM dangky WHERE email = '" . $taikhoan . "' AND matkhau = '" . $matkhau_cu . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $sql_update = mysqli_query($mysqli, "UPDATE dangky SET matkhau='" . $matkhau_moi . "'");
        echo '<p style="color: green;">Mật khẩu đã được thay đổi.</p>';
    } else {
        // echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.");</script>';
        echo '<p style="color: red;">Tài khoản hoặc Mật khẩu cũ không đúng, vui lòng nhập lại.</p>';
    }
}
?>
<style>
    * {
        font-size: 17px;
        margin: 0;
        padding: 0;
    }



    .container_form {
        position: relative;
        height: 400px;

    }

    .name-form {
        font-size: 30px;
        font-weight: bold;
        position: relative;
        left: 300px;
        top: 10px;
        color: black;

    }

    .form {
        position: relative;
        width: 300px;
        height: 30px;
        padding: 30px;
    }

    .form__input {
        position: absolute;
        width: 100%;
        height: 70%;
        left: 280px;
        border: 2.4px solid #333;
        border-radius: 5px;
        font-size: 10px;
        background: none;
        font-size: 18px;
        outline: none;

    }

    .form__input:focus {
        border-color: rgb(0, 21, 255);

    }

    .form__label {
        position: relative;
        left: 260px;
        top: 10px;
        padding: 0;
        transition: 0.3s cubic-bezier(.79, 0, .16, .99);
        background-color: #f4f4f4;
    }

    .form__input:focus~.form__label,
    .form__input:not(:placeholder-shown).form__input:not(:focus)~.form__label {
        top: -15px;
        font-size: 18px;
        left: 255px;
        padding: 0 10px;
        color: rgb(0, 21, 255);
        font-weight: bold;
    }


    .submit {
        position: relative;
        top: 40px;
        font-size: 15px;
        font-weight: bold;
        width: 120px;
        height: 30px;
        border-radius: 5px;
        left: 280px;
        cursor: pointer;
        color: black;
        border: 2px solid #333;
    }
</style>
<form action="" autocomplete="off" method="POST">
    <div class="container_form">
    <a class="name-form">ĐỔI MẬT KHẨU</a>
      <div class="form">
          <input type="text" id="email" class="form__input" autocomplete="off" placeholder=" ">
          <label for="email" class="form__label">Tài Khoản</label>
      </div>
      <div class="form">
          <input type="password" id="password" class="form__input" autocomplete="off" placeholder=" ">
          <label for="password" class="form__label">Mật Khẩu Cũ</label>
      </div>

      <div class="form">
          <input type="password" id="forestpassword" class="form__input" autocomplete="off" placeholder=" ">
          <label for="forestpassword" class="form__label">Mật Khẩu Mới</label>
      </div>

          <input type="submit" name="quenmatkhau" value="Đổi mật khẩu" class="submit">
          
        
      </div>


</form>
<!-- <p>Đổi mật khẩu</p>
<form action="" autocomplete="off" method="POST">
    <table border="1" class="table-login" style="text-align: center; border-collapse: collapse;">
        <tr>
            <td colspan="2">
                <h3>Đổi mật khẩu Admin</h3>
            </td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mật khẩu cũ</td>
            <td><input type="text" name="password_cu"></td>
        </tr>
        <tr>
            <td>Mật khẩu mới</td>
            <td><input type="text" name="password_moi"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
        </tr>
    </table>
</form> -->