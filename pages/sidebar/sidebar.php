<div class="sidebar col l-2 m-12 c-12">
    <div class="siderbar-container">
        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">Thương hiệu</h4>
        <ul class="list-sidebar">
            <?php

            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)) {

            ?>
                <li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            <?php
            }
            ?>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">Giá</h4>
        <ul class="list-sidebar">
            <?php

            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)) {

            ?>
                <li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            <?php
            }
            ?>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">RAM</h4>
        <ul class="list-sidebar">
            <?php

            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)) {

            ?>
                <li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            <?php
            }
            ?>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">ROM</h4>
        <ul class="list-sidebar">
            <?php

            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)) {

            ?>
                <li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            <?php
            }
            ?>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">Bài viết</h4>
        <ul class="list-sidebar">
            <?php

            $sql_danhmuc_bv = "SELECT * FROM danhmucbaiviet ORDER BY id_baiviet DESC";
            $query_danhmuc_bv = mysqli_query($mysqli, $sql_danhmuc_bv);
            while ($row = mysqli_fetch_array($query_danhmuc_bv)) {

            ?>
                <li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet'] ?>"><?php echo $row['tendanhmuc_baiviet'] ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>


    <div class="sidebar-tablet">
        <ul class="sidebar-tablet__list">
            <?php
            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)) {
            ?>
                <li class="sidebar-tablet__item"><a class="sidebar-tablet__item-link" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>