<?php
ob_start();
// Kiểm tra xem nút dangky có tồn tại hay ko 
if (isset($_POST['dangky'])) {
	// Lấy dữ liệu input 
	$tenkhachhang = $_POST['hovaten'];
	$email = $_POST['email'];
	$dienthoai = $_POST['dienthoai'];

	$matkhau = md5($_POST['matkhau']);
	$diachi = $_POST['diachi'];
	$sql_dangky = mysqli_query($mysqli, "INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");
	if ($sql_dangky) {
		$message = "Bạn đã đăng ký thành công!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		// $_SESSION['dangky'] = $tenkhachhang;
		// $_SESSION['email'] = $email;

		$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
		ob_end_flush();
		header('Location:index.php?quanly=dangnhap');
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
<div class="clear"></div>
<div class="breadcrumb-wrapper clearfix">
	<div class="wrapper clearfix">
		<div class="breadcrumb-box fl">
			<ul class="breadcrumb">
				<li>
					<a href="/">Trang chủ</a>
				</li>
				<li>
					<a href="#  " rel="category tag">Đăng ký</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="content-box">
	<h1 class="box-title tp_title">Đăng ký tài khoản miễn phí</h1>
	<p class="intro-user"></p>
	<form id="formAcount" action="" method="POST">
		<div class="form-group">
			<input type="text" id="email" class="form-input" placeholder="Họ và tên" name="hovaten">
			<!-- <label for="email" class="form__label">Họ và Tên</label> -->
		</div>
		<div class="form-group">
			<input type="email" id="email" class="form-input" placeholder="Email" name="email">
			<!-- <label for="email" class="form__label"></label> -->
		</div>
		<div class="form-group">
			<input type="text" id="email" class="form-input" placeholder="Số điện thoại" name="dienthoai">
			<!-- <label for="email" class="form__label">Điện Thoại</label> -->
		</div>
		<div class="form-group">
			<input type="text" id="email" class="form-input" placeholder="Địa chỉ" name="diachi">
			<!-- <label for="email" class="form__label">Địa Chỉ</label> -->
		</div>
		<div class="form-group">
			<input type="password" id="email" class="form-input" placeholder="Mật khẩu" name="matkhau">
			<!-- <label for="email" class="form__label"></label> -->
		</div>
		<div class="form-group">
			<label class="checkbox-user">
				<input type="checkbox" name="checkValids">
				<div id="checkbox-content">Đồng ý điều khoản tài khoản &amp; chính sách</div>
			</label>
		</div>
		<div class="form-group">
			<button type="submit" name="dangky" id="btnRegister" class="btn-register">
				Đăng ký </button>
		</div>
	</form>
	<div class="clr"></div>
</div>