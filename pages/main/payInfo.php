<div class="container-cart">
    <form action="pages/main/payProcess.php" method="POST">
        <div class="tbl-content">
            <?php
            if (isset($_SESSION['id_khachhang'])) {
                $id_dangky = $_SESSION['id_khachhang'];
                $sql_getShipping = mysqli_query($mysqli, "SELECT * FROM shipping WHERE id_dangky='$id_dangky' LIMIT 1");
                $count = mysqli_num_rows($sql_getShipping);
                if ($count > 0) {
                    $row_getShipping = mysqli_fetch_array($sql_getShipping);
                    $name = $row_getShipping['name'];
                    $phone = $row_getShipping['phone'];
                    $address = $row_getShipping['address'];
                    $note = $row_getShipping['note'];
                }
            } else {

                $name = '';
                $phone = '';
                $address = '';
                $note = '';
            }
            ?>

            <div class="info-shipping-cart">
                <h4>Thông tin vận chuyển và giỏ hàng</h4>
                <ul>
                    <li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
                    <li>Số điện thoại : <b><?php echo $phone ?></b></li>
                    <li>Địa chỉ : <b><?php echo $address ?></b></li>
                    <li>Ghi chú : <b><?php echo $note ?></b></li>
                </ul>
                <h5 style="text-align: center; font-size: 22px; margin: 15px 0;">Giỏ hàng của bạn</h5>
                <!-- CART -->
                <table>
                    <tr>
                        <th width="7%">Thứ tự</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th width="15%">Giá</th>
                        <th width="15%">Thành tiền</th>
                    </tr>
                    <?php
                    $i = 0;
                    $number = 0;
                    $total = 0;
                    $sum = 0;
                    if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
                        foreach ($cart as $key => $value) {
                            $number += (int)$value['soluong'];
                            $total += (int)$value['soluong'] * (int)$value['giasp'];
                            $sum += $total;
                            $i++;
                    ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $value['tensanpham']; ?></td>
                                <td><img src="admin/modules/quanlysp/uploads/<?php echo $value['hinhanh']; ?>" width="100px"></td>
                                <td>
                                    <input type="text" value="<?php echo $value['soluong']; ?>">
                                </td>
                                <td><?php echo number_format($value['giasp'], 0, ',', '.') . ' VNĐ'; ?></td>
                                <td><?php echo number_format($total, 0, ',', '.') . ' VNĐ';; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td colspan="5">
                                <p style="text-transform: uppercase;">Tổng tiền</p>
                            </td>
                            <td>
                                <?php echo number_format($sum, 0, ',', '.') . ' VNĐ';; ?>
                            </td>
                        </tr>
                    <?php
                    } else {
                    ?>
                        <tr>
                            <td colspan="8">
                                <p>Hiện tại giỏ hàng trống</p>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <style type="text/css">
                .col-pay {
                    float: right;
                    width: 250px;
                }

                .col-pay.hinhthucthanhtoan .form-check {
                    margin: 11px;
                }
            </style>

            <div class="col-pay hinhthucthanhtoan">
                <h4>Phương thức thanh toán</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Tiền mặt
                    </label>
                </div>
                <!-- <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="moneyTransfer">
                    <label class="form-check-label" for="exampleRadios2">
                        Chuyển khoản
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios3" value="momo">
                    <img src="../../images/momo.png" height="32" width="32">
                    <label class="form-check-label" for="exampleRadios3">
                        MOMO
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="vnpay">
                    <img src="../../images/vnpay.png" height="20" width="64">
                    <label class="form-check-label" for="exampleRadios4">
                        Vnpay
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios5" value="zalopay">
                    <img src="../../images/ZaloPay.png" height="32" width="32">
                    <label class="form-check-label" for="exampleRadios5">
                        ZaloPay
                    </label>
                </div> -->
                <button type="submit" name="redirect" class="btn btn-primary"><i class="fa fa-usd"></i>Thanh toán ngay</button>

    </form>
    <p></p>
    <input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">

    <div id="paypal-button"></div>

    <!-- <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO QRcode" class="btn btn-danger">

    </form>

    <p></p>

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo_atm.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">

    </form>
    <p></p>
    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/onepay.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán ONEPAY" class="btn btn-danger">

    </form> -->
</div>

<style>
    .sidebar {
        display: none;
    }

    .slider-container {
        display: none;
    }

    .main-content {
        width: 100%;
    }

    table a {
        text-decoration: none;
        color: #0000EE;
    }

    table a:hover {
        text-decoration: underline;
    }

    .top-main {
        display: none;
    }

    .grid {
        margin-top: 20px;
    }

    .l-10 {
        flex: 100%;
        max-width: 100%;
    }

    .btn-cart {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>