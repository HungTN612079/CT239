<?php
$sql_pro = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
//Lấy tên danh mục
$sql_cate = "SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<h3 class="product-type">Danh mục sản phẩm : <p id="type-product" style="display: inline;color: rgb(8, 177, 239)"><?php echo $row_title['tendanhmuc'] ?? 'Hiện tại trống.' ?></p>
</h3>
<ul class="product-list row sm-gutter" style="padding-left: 0; margin-top: 0;">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li class="product-list__item col l-2-4 m-4 c-6">
            <div class="product-detail">
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                    <div class="product-list__item-img" style="background-image: url('admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>');"></div>
                    <p class="title-product"><?php echo $row_pro['tensanpham'] ?></p>
                    <p class="price"><?php echo number_format($row_pro['giasp'], 0, ',', '.') . ' VNĐ' ?></p>

                </a>
                <div class="btn-groups" style="text-align: center;">
                    <!-- btn purchase -->
                    <button class="btn-purchase-product">
                        Mua Ngay
                    </button>

                    <!-- btn add product into cartmini -->
                    <button id="btn-hahaha" class="addcart" type="submit" onclick="addCart(<?php echo $row_pro['id_sanpham'] ?>)">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <!-- Phần này có thể đổi class -->
        </li>
    <?php
    }
    ?>
</ul>
<!-- CSS cho trang sản phẩm -->
<style>
    /* Hover qua li cua tung san pham */
    .product-detail:hover {
        border: 1px solid rgb(84, 174, 255);
        margin-top: -3px;
    }
    .product-detail {
        height: 388px;
        border: 1px solid #ccc;
        padding: 5px;
        border-radius: 3px;
        background-color: #fff;
        box-shadow: 0 1px 1px #ccc;
    }

    .btn-purchase-product {
        width: 75%;
        border-radius: 2px;
        background-color: rgb(84, 174, 255);
        border: 2px solid rgb(84, 174, 255);
    }

    .btn-purchase-product:hover {
        background-color: #fff;
        color: rgb(84, 174, 255);
    }

    .addcart {
        text-align: center;
        width: 44px;
    }
</style>