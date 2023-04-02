<!-- hello -->
<?php
if (isset($_SESSION['dangky'])) {
    echo '<p style="color:#000; font-size: 17px; margin: 10px;">Xin chào bạn: ' . $_SESSION['dangky'] . '</p>';
} else {
    echo '';
}
?>
<!-- #listCart : load lại trang ----------- file (cart.js) -->
<div class="tbl-cart" id="listCart">
    <table>
        <tr>
            <th width="7%">Thứ tự</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th width="10%">Giá</th>
            <th width="10%">Thành tiền</th>
            <th width="7%">Thao tác</th>
        </tr>
        <?php
        $i = 0; // stt
        $number = 0; // số lượng
        $total = 0; // tổng tiền sl * giá
        $sum = 0; // tổng $total đơn hàng
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
                        <input type="number" value="<?php echo $value['soluong']; ?>" id="num_<?php echo $key ?>" onclick="updateCart(<?php echo $key ?>)">
                    </td>
                    <td><?php echo number_format($value['giasp'], 0, ',', '.') . ' VNĐ'; ?></td>
                    <td><?php echo number_format($total, 0, ',', '.') . ' VNĐ';; ?></td>
                    <td><button onclick="deleteCart(<?php echo $key ?>)"><i class="fa fa-close"></i></button></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="5">
                    <p style="text-transform: uppercase;">Tổng tiền</p>
                </td>
                <td>
                    <?php echo number_format($sum, 0, ',', '.') . ' VNĐ'; ?>
                </td>
                <td>
                    <!-- phần này chưa làm --- css luôn nha -->
                    <button>Xóa tất cả</p>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <?php
                    if (isset($_SESSION['dangky'])) {
                    ?>
                        <p><a href="index.php?quanly=shipping">Hình thức vận chuyển</a></p>
                    <?php
                    } else {
                    ?>
                        <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        <?php
        } else {
        ?>
            <tr>
                <td colspan="7">
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

    .top-main {
        display: none;
    }

    .slider-container {
        display: none;
    }

    .grid {
        margin-top: 20px;
    }

    .l-10 {
        flex: 100%;
        max-width: 100%;
    }
</style>