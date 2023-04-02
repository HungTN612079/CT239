<?php
if(isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
} else {
    $tukhoa = '';
}
$sql_pro = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc AND sanpham.tensanpham LIKE '%".$tukhoa."%'";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<h3 class="product-type">Từ khóa tìm kiếm : <p style="display: inline; color: aqua;"><?php $_POST['tukhoa'] ?></p></h3>
<ul class="product-list row sm-gutter" style="padding-left: 0; margin-top: 0;">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <li class="product-list__item col l-2-4 m-4 c-6">
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <!-- <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"> -->
                <div class="product-list__item-img" style="background-image: url('admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>');"></div>
                <p class="title-product"><?php echo $row['tensanpham'] ?></p>
                <p class="price">Giá : <?php echo number_format($row['giasp'], 0, ',', '.') . 'VNĐ' ?></p>
                <p style="text-align: center; color: #d1d1d1;"><?php echo $row['tendanhmuc'] ?></p>
            </a>
        </li>
    <?php
    }
    ?>

</ul>