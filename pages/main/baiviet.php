<?php
$sql_bv = "SELECT * FROM baiviet WHERE baiviet.id = '$_GET[id]' LIMIT 1";
$query_bv = mysqli_query($mysqli, $sql_bv);
$query_bv_all = mysqli_query($mysqli, $sql_bv);
$row_bv_title = mysqli_fetch_array($query_bv);
?>
<link rel="stylesheet" href="../../css/baiviet.css">
<style>
    .slider {
        display: none;
    }
</style>
<div class="bv">
    <h3>Bài viết : <span style="text-align: center; text-transform: uppercase;"><?php echo $row_bv_title['tenbaiviet'] ?? 'Hiện tại trống.' ?></span></h3>
    <ul class="baiviet">
        <?php
        while ($row_bv = mysqli_fetch_array($query_bv_all)) {
        ?>
            <li>
                <h2><?php echo $row_bv['tenbaiviet'] ?></h2>
                <!-- <img src="admin/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"> -->
                <p class="title-product"><?php echo $row_bv['tomtat'] ?></p>
                <p style="margin: 10px;" class="title-product"><?php echo $row_bv['noidung'] ?></p>
            </li>
        <?php
        }
        ?>

    </ul>
</div>