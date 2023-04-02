<?php
// Kiểm tra xem nút dangnhap có tồn tại hay ko 
if (isset($_POST['dangnhap'])) {
	// Lấy dữ liệu input 
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
		header("Location: index.php?");
	} else {
		echo '<p style="color: red;">Email hoặc Mật khẩu sai, vui lòng nhập lại.</p>';
		// echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.");</script>';
	}
}
?>
<style>
	::after {
		box-sizing: border-box;
	}

	body {
		background: #282828;
	}

	.top-main {
		display: none;
	}

	#main {
		border: none;
	}

	.slider {
		display: none;
	}

	.sidebar {
		display: none;
	}

	.main-content {
		width: 100%;
	}
</style>
<div class="content-box">
	<h1 class="box-title tp_title">Đăng nhập khách hàng</h1>
	<form action="" autocomplete="off" method="POST" id="formAcount">
		<div class="form-group">
			<input type="text" size="50" name="email" class="form-input" placeholder="Email...">
		</div>
		<div class="form-group">
			<input type="password" size="50" name="password" class="form-input" placeholder="Mật khẩu...">
		</div>
		<div class="form-group">
			<button type="submit" name="dangnhap" value="Đăng nhập" class="btn-login">Đăng nhập </button>
		</div>
	</form>
</div>