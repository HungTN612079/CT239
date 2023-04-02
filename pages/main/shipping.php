<div class="container-cart">
    <div class="tbl-shipping">
        <h4>Thông tin vận chuyển</h4>
            <?php
            if (isset($_SESSION['id_khachhang'])) {
            if (isset($_POST['addShipping'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $id_dangky = $_SESSION['id_khachhang'];
                $sql_addShipping = mysqli_query($mysqli, "INSERT INTO shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");
                if ($sql_addShipping) {
                    echo '<script>alert("Thêm vận chuyển thành công")</script>';
                }
            } elseif (isset($_POST['updateShipping'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $id_dangky = $_SESSION['id_khachhang'];
                $sql_updateShipping = mysqli_query($mysqli, "UPDATE shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
                if ($sql_updateShipping) {
                    echo '<script>alert("Cập nhật vận chuyển thành công")</script>';
                }
            }
            ?>
            <div class="tbl-content">
            <?php
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_getShipping = mysqli_query($mysqli, "SELECT * FROM shipping WHERE id_dangky='$id_dangky' LIMIT 1");
            $count = mysqli_num_rows($sql_getShipping);
            if ($count > 0) {
                $row_getShipping = mysqli_fetch_array($sql_getShipping);
                $name = $row_getShipping['name'];
                $phone = $row_getShipping['phone'];
                $address = $row_getShipping['address'];
                $note = $row_getShipping['note'];
            }} else {

                $name = '';
                $phone = '';
                $address = '';
                $note = '';
            }
            ?>
            <div class="row-form">
                <form action="" autocomplete="off" method="POST">
                    <div class="form-group">
                        <label for="email">Họ và tên</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name ?>" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="email">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address ?>" placeholder="...">
                    </div>
                    <div class="form-group">
                        <label for="email">Ghi chú</label>
                        <input type="text" name="note" class="form-control" value="<?php echo $note ?>" placeholder="...">
                    </div>
                    <?php
                    if ($name == '' && $phone == '') {
                    ?>
                        <button type="submit" name="addShipping" class="btn btn-add">Thêm vận chuyển</button>
                    <?php
                    } elseif ($name != '' && $phone != '') {
                    ?>
                        <button type="submit" name="updateShipping" class="btn btn-update">Cập nhật vận chuyển</button>
                    <?php
                    }
                    ?>
                </form>
            </div>
            </div>
    </div>
    <!-- CART -->
    <table class="tbl-cart">
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
            <tr>
                <td colspan="7">
                    <div style="clear: both;">
                        <?php
                        if (isset($_SESSION['dangky'])) {
                        ?>
                            <button class="btn-cart btn-primary"><a style="color: #fff;" href="index.php?quanly=payInfo"><i class="fa fa-usd"></i> Thanh toán</a></button>
                        <?php
                        }
                        ?>

                    </div>
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