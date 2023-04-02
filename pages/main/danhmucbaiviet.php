<?php
$sql_bv = "SELECT * FRzOM baiviet WHERE baiviet.id_danhmuc = '$_GET[id]' ORDER BY id DESC";
$query_bv = mysqli_query($mysqli, $sql_bv);
//Lấy tên danh mục
$sql_cate = "SELECT * FROM danhmucbaiviet WHERE danhmucbaiviet.id_baiviet= '$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục bài viết : <span style="text-align: center; text-transform: uppercase;"><?php echo $row_title['tendanhmuc_baiviet'] ?? 'Hiện tại trống.' ?></span></h3>
<ul class="product-list">
    <?php
    while ($row_bv = mysqli_fetch_array($query_bv)) {
    ?>
        <li>
            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                <img src="admin/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
                <p class="title-product">Tên bài viết : <?php echo $row_bv['tenbaiviet'] ?></p>
            </a>
            <p style="margin: 10px;" class="title-product"><?php echo $row_bv['tomtat'] ?></p>
        </li>
    <?php
    }
    ?>

</ul>