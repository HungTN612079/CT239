<div id="top">
    <div class="top-content">
        <div class="top-left">
            <h3>Xin chào : <?php if (isset($_SESSION['dangnhap'])) {
                                echo $_SESSION['dangnhap'];
                            } ?></h3>
        </div>
        <div class="logout">
            <a href="index.php?"><i class="fa-solid fa-bell"></i></a>
            <!-- <a href="index.php?">Trang chủ</a> -->
            <a href="?login=dangxuat"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
</div>