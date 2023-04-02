<?php
    if(isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = 1;
    }
    if($page == '' || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page*3)-3;
    }

    $sql_pro = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc ORDER BY sanpham.id_sanpham DESC LIMIT $begin,3";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>
<h3 class="product-type">Sản phẩm mới nhất</h3>
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
<div style="clear: both;"></div>
<style type="text/css">
    ul.list_trang {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        justify-content: center;
    }

    ul.list_trang li {
        float: left;
        padding: 5px 13px;
        margin: 5px;
        background: burlywood;
        display: block;
    }

    ul.list_trang li a {
        color: #000;
        text-align: center;
        text-decoration: none;
    }
</style>
<?php
$sql_trang = mysqli_query($mysqli, "SELECT * FROM sanpham");
$row_count = mysqli_num_rows($sql_trang);
$trang =  ceil($row_count / 3);
?>
<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?></p>
<ul class="list_trang">
    <?php
    for ($i = 1; $i <= $trang; $i++) {
    ?>
    <li <?php if($i==$page){
        echo 'style="background: brown;"';
    } else {
        echo '';
    }?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
    }
    ?>
</ul>