<?php
$sql_pro = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
//Lấy tên danh mục
$sql_cate = "SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<h3 class="product-type">Danh mục sản phẩm : <p style="display: inline;color: rgb(8, 177, 239)"><?php echo $row_title['tendanhmuc'] ?? 'Hiện tại trống.' ?></p>
</h3>
<ul class="product-list row sm-gutter" style="padding-left: 0; margin-top: 0;">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li class="product-list__item col l-2-4 m-4 c-6">
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                <div class="product-list__item-img" style="background-image: url('admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>');"></div>
                <p class="title-product"><?php echo $row_pro['tensanpham'] ?></p>
                <p class="price"><?php echo number_format($row_pro['giasp'], 0, ',', '.') . ' VNĐ' ?></p>
            </a>

            <!-- Phần này có thể đổi class -->
            <div class="btn-groups" style="text-align: center;">
                <button class="addcart" type="submit" onclick="addCart(<?php echo $row_pro['id_sanpham'] ?>)">
                <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng
                </button>
            </div>
        </li>
    <?php
    }
    ?>

</ul>