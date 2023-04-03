<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tintuc.css">
    <style > 
    .slider{
        display: none;
    }
    </style>
</head>
    <body>
    
    <h3 style="text-align: center; text-transform: uppercase;">Tin tức mới nhất</h3>
    <?php
    $sql_bv = "SELECT * FROM baiviet WHERE tinhtrang = 1 ORDER BY id DESC";
    $query_bv = mysqli_query($mysqli, $sql_bv);
    ?>


<ul class="product-list1">
    <?php
    while ($row_bv = mysqli_fetch_array($query_bv)) {
    ?>
        <li>
            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                <img src="admin/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                <p class="title-product1">
                <?php echo $row_bv['tenbaiviet'] ?></p>
            </a>
            <p style="margin: 40px;" class="title-product1"><?php echo $row_bv['tomtat'] ?></p>
        </li>
    <?php
    }
    ?>

</ul>

          
    </body>
</html>

