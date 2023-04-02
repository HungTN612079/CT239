<h3 style="text-align: center; text-transform: uppercase;">Tin tức mới nhất</h3>
<?php
$sql_bv = "SELECT * FROM baiviet WHERE tinhtrang = 1 ORDER BY id DESC";
$query_bv = mysqli_query($mysqli, $sql_bv);
?>
<style>
    .slider {
        display: none;
    }
</style>
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