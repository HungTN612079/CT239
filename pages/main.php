<style>
    .top-main {
        background-color: #f8f9fa;
        height: auto;
    }

    .top-main-container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .top-main-row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important;
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    .py-sm-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .col-4,
    .col-8,
    .col-md-4 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col-4 {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }

    .col-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }

    .icon-fot {
        text-align: center;
    }

    .icon-fot i {
        font-size: 41px;
        line-height: 1.4;
        color: #0879c9;
    }

    .icon-fot i .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
    }

    .fas {
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    .fa-dolly:before {
        content: "\f472";
    }

    .fa-dolly-flatbed:before {
        content: "\f474";
    }

    .text-form-footer {
        padding: 0;
    }

    .text-form-footer h3 {
        color: #000;
        font-weight: 600;
        line-height: 1.3;
    }

    .text-form-footer p {
        margin: 0;
        letter-spacing: 1px;
        line-height: 1.9;
        color: #999;
        font-family: 'Open Sans', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        font-family: 'Lato', sans-serif;
    }

    @media (min-width: 576px) {
        .py-sm-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }
    }

    @media (min-width: 768px) {
        .col-md-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .my-md-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .py-md-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .top-main-container {
            max-width: 1200px;
        }
    }

    @media(max-width: 991px) {
        .icon-fot i {
            font-size: 36px;
        }

        .text-form-footer h3 {
            font-size: 22px;
        }
    }

    @media (max-width: 1024px) {
        .text-form-footer h3 {
            letter-spacing: 1px;
        }

        p {
            font-size: 14px;
        }
    }
</style>
<div class="wrapper">
    <div class="top-main">
        <div class="top-main-container py-md-5">
            <div class="top-main-row border-top border-bottom py-sm-4 py-3">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-4 icon-fot">
                            <i class="fas fa-dolly"></i>
                        </div>
                        <div class="col-8 text-form-footer">
                            <h3>Miễn phí vận chuyển</h3>
                            <p>Đơn hàng trên 3 triệu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-md-0">
                    <div class="row">
                        <div class="col-4 icon-fot">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="col-8 text-form-footer">
                            <h3>Vận chuyển nhanh</h3>
                            <p>Toàn quốc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offer-footer">
                    <div class="row">
                        <div class="col-4 icon-fot">
                            <i class="far fa-thumbs-up"></i>
                        </div>
                        <div class="col-8 text-form-footer">
                            <h3>Tin cậy</h3>
                            <p>Sự đảm bảo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid">
        <div id="main" class="main-container row sm-gutter">
            <?php
            include("sidebar/sidebar.php");
            ?>
            <div class="main-content col l-10 m-12 c-12">
                <?php
                if (isset($_GET['quanly'])) {
                    $tam = $_GET['quanly'];
                } else {
                    $tam = '';
                }
                if ($tam == 'danhmucsanpham') {
                    include("main/danhmuc.php");
                } elseif ($tam == 'giohang') {
                    include("main/cart.php");
                } elseif ($tam == 'danhmucbaiviet') {
                    include("main/danhmucbaiviet.php");
                } elseif ($tam == 'baiviet') {
                    include("main/baiviet.php");
                } elseif ($tam == 'tintuc') {
                    include("main/tintuc.php");
                } elseif ($tam == 'lienhe') {
                    include("main/lienhe.php");
                } elseif ($tam == 'sanpham') {
                    include("main/sanpham.php");
                } elseif ($tam == 'dangky') {
                    include("main/dangky.php");
                } elseif ($tam == 'thanhtoan') {
                    include("main/thanhtoan.php");
                } elseif ($tam == 'dangnhap') {
                    include("main/dangnhap.php");
                } elseif ($tam == 'timkiem') {
                    include("main/timkiem.php");
                } elseif ($tam == 'camon') {
                    include("main/camon.php");
                } elseif ($tam == 'thaydoimatkhau') {
                    include("main/thaydoimatkhau.php");
                } elseif ($tam == 'shipping') {
                    include("main/shipping.php");
                } elseif ($tam == 'payInfo') {
                    include("main/payInfo.php");
                } elseif ($tam == 'donhangdadat') {
                    include("main/orderPlaced.php");
                } elseif ($tam == 'lichsudonhang') {
                    include("main/orderHistory.php");
                } elseif ($tam == 'xemdonhang') {
                    include("main/xemdonhang.php");
                } else {
                    include("main/index.php");
                }
                ?>
            </div>
        </div>
    </div>

</div>