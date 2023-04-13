<?php
$sql_bv = "SELECT * FROM baiviet WHERE baiviet.id = '$_GET[id]' LIMIT 1";
$query_bv = mysqli_query($mysqli, $sql_bv);
$query_bv_all = mysqli_query($mysqli, $sql_bv);
$row_bv_title = mysqli_fetch_array($query_bv);
?>

<link rel="stylesheet" href="css/baiviet.css">

<?php
while ($row_bv = mysqli_fetch_array($query_bv_all)) {
?>

    <body>
        <div class="baiviet_khung">
            <div class="content-baiviet">
                <h1><?php echo $row_bv['tenbaiviet'] ?></h2>
                    <p class="noidung-baiviet"><?php echo $row_bv['noidung'] ?></p>
            </div>
            <div class="content-new">
                <h3 class="title-baiviet">Tin Tức Khác</h3>

                <!-- <div class="newfeed">
                <div class="slide-wrapper">
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=8">
                        <div class="slide"><img src="/images/tintuc/Baiviet1.jpg" ></div>
                    </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=9">
                        <div class="slide"><img src="/images/tintuc/Baiviet2.jpg" ></div>
                    </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=10">
                        <div class="slide"><img src="/images/tintuc/Baiviet3.jpg" ></div>
                    </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=12">
                        <div class="slide"><img src="/images/tintuc/baiviet5.jpg" ></div>
                    </a>
                    <a href="http://localhost:3000/index.php?quanly=baiviet&id=14">
                        <div class="slide"><img src="/images/tintuc/baiviet6.jpg"></div>
                    </a>
                </div>
            </div> -->
            </div>

            <div class="slideshow-container">


                <div class="slide">
                    <div class="slide-content">
                        <h2>Slide 1</h2>
                        <p>Nullam euismod, quam sed ultricies lacinia, odio nibh dapibus odio, ut maximus ex magna vitae ipsum.</p>
                        <button class="btn btn-primary">View More</button>
                    </div>
                    <<img src="/images/tintuc/Baiviet1.jpg">
                </div>


                <div class="slide">
                    <div class="slide-content">
                        <h2>EXYNOS 1330</h2>
                        <p>EXYNOS 1330 VÀ EXYNOS 1380 CHÍNH THỨC RA MẮT: THÔNG SỐ ẤN TƯỢNG, HỖ TRỢ MẠNG 5G!</p>
                        <a href="http://localhost:3000/index.php?quanly=baiviet&id=8">
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                    <<img src="/images/tintuc/Baiviet1.jpg">
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <h2>IPHONE 16 ULTRA</h2>
                        <p>KỲ VỌNG IPHONE 16 ULTRA CONCEPT: THIẾT KẾ ẤN TƯỢNG, CHIP APPLE A18 BIONIC MẠNH MẼ</p>
                        <a href="http://localhost:3000/index.php?quanly=baiviet&id=9">
                            <button class="btn btn-primary">View More</button>
                        </a>

                    </div>
                    <img src="/images/tintuc/Baiviet2.jpg">
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <h2>XIAOMI 13</h2>
                        <p>XIAOMI 13 LITE ĐÃ CÓ TRÊN GEEKBENCH, CÙNG KHÁM PHÁ ĐIỂM HIỆU NĂNG NHÉ!</p>
                        <a href="http://localhost:3000/index.php?quanly=baiviet&id=10">
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                    <img src="/images/tintuc/Baiviet3.jpg">
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <h2>SONY WF-1000XM5</h2>
                        <p>SONY WF-1000XM5 CÓ MẶT TRÊN TRANG CHỨNG NHẬN NỔI TIẾNG, LỘ RA THÔNG SỐ KẾT NỐI</p>
                        <a href="http://localhost:3000/index.php?quanly=baiviet&id=12">
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                    <img src="/images/tintuc/baiviet5.jpg">
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <h2>GOOGLE TỐI ƯU HÓA GIAO DIỆN GMAIL CHO GALAXY Z FOLD4</h2>
                        <p>GOOGLE TỐI ƯU HÓA GIAO DIỆN GMAIL CHO GALAXY Z FOLD4, NHÌN THOẢI MÁI VÀ ĐẸP HƠN</p>
                        <a href="http://localhost:3000/index.php?quanly=baiviet&id=14">
                            <button class="btn btn-primary">View More</button>
                        </a>
                    </div>
                    <img src="/images/tintuc/baiviet6.jpg">
                </div>
            </div>
        </div>
    <?php
}
    ?>
    <script src="js/baiviet.js"></script>
    </body>
    <style>
        .l-10 {
            flex: 100%;
            max-width: 100%;
        }

        .sidebar {
            display: none;
        }
    </style>