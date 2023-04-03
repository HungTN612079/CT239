<div class="sidebar col l-2 m-12 c-12">
    <div class="siderbar-container">
        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">Thương hiệu</h4>
        <ul class="list-sidebar">
            <?php
            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)) {
            ?>
                <li style="text-transform: uppercase;">
                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>">
                        <input class="filter-type__checkbox" type="checkbox" value="<?php echo $row['tendanhmuc'] ?>">
                        <?php echo $row['tendanhmuc'] ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">Giá</h4>
        <ul class="list-sidebar">
            <li class="filter-price">
                <a href="" class="filter-price__link">
                    <input type="checkbox" name="filter-price__item" id="">
                    Dưới 2 triệu
                </a>
            </li>
            <li class="filter-price">
                <a href="" class="filter-price__link" style="font-size: 15px;">
                    <input type="checkbox" name="filter-price__item" id="">
                    Từ 2 - 4 triệu
                </a>
            </li>
            <li class="filter-price">
                <a href="" class="filter-price__link">
                    <input type="checkbox" name="filter-price__item" id="">
                    Từ 4 - 7 triệu
                </a>
            </li>
            <li class="filter-price">
                <a href="#" class="filter-price__link">
                    <input type="checkbox" name="filter-price__item" id="">
                    Từ 7 - 13 triệu
                </a>
            </li>
            <li class="filter-price">
                <a href="#" class="filter-price__link">
                    <input type="checkbox" name="filter-price__item" id="">
                    Từ 13 - 20 triệu
                </a>
            </li>
            <li class="filter-price">
                <a href="#" class="filter-price__link">
                    <input type="checkbox" name="filter-price__item" id="">
                    Trên 20 triệu
                </a>
            </li>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">RAM</h4>
        <ul class="list-sidebar">
            <li class="filter-ram__item">
                <a href="" class="filter-ram__link">
                    <input type="checkbox" name="filter-ram__checkbok" id="">
                    2 GB
                </a>
            </li>
            <li class="filter-ram__item">
                <a href="" class="filter-ram__link">
                    <input type="checkbox" name="filter-ram__checkbok" id="">
                    3 GB
                </a>
            </li>
            <li class="filter-ram__item">
                <a href="" class="filter-ram__link">
                    <input type="checkbox" name="filter-ram__checkbok" id="">
                    4 GB
                </a>
            </li>
            <li class="filter-ram__item">
                <a href="" class="filter-ram__link">
                    <input type="checkbox" name="filter-ram__checkbok" id="">
                    6 GB
                </a>
            </li>
            <li class="filter-ram__item">
                <a href="" class="filter-ram__link">
                    <input type="checkbox" name="filter-ram__checkbok" id="">
                    8 GB
                </a>
            </li>
            <li class="filter-ram__item">
                <a href="" class="filter-ram__link">
                    <input type="checkbox" name="filter-ram__checkbok" id="">
                    12 GB
                </a>
            </li>
        </ul>

        <h4 style="text-align: left;margin: 20px 0; font-size: 18px; font-weight: 700; text-transform: uppercase;">Dung lượng lưu trữ</h4>
        <ul class="list-sidebar">
            <li class="filter-rom__item">
                <a href="" class="filter-rom__link">
                    <input type="checkbox" name="filter-rom__checkbox" id="">
                    32 GB
                </a>
            </li>
            <li class="filter-rom__item">
                <a href="" class="filter-rom__link">
                    <input type="checkbox" name="filter-rom__checkbox" id="">
                    64 GB
                </a>
            </li>
            <li class="filter-rom__item">
                <a href="" class="filter-rom__link">
                    <input type="checkbox" name="filter-rom__checkbox" id="">
                    128 GB
                </a>
            </li>
            <li class="filter-rom__item">
                <a href="" class="filter-rom__link">
                    <input type="checkbox" name="filter-rom__checkbox" id="">
                    256 GB
                </a>
            </li>
            <li class="filter-rom__item">
                <a href="" class="filter-rom__link">
                    <input type="checkbox" name="filter-rom__checkbox" id="">
                    512 GB
                </a>
            </li>
            <li class="filter-rom__item">
                <a href="" class="filter-rom__link">
                    <input type="checkbox" name="filter-rom__checkbox" id="">
                    1 TB
                </a>
            </li>
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