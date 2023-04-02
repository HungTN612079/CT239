<h3>Thêm sản phẩm</h3>
<table>
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" class="input-text"></td>
        </tr>
        <tr>
            <td>Mã sp</td>
            <td><input type="text" name="masp" class="input-text"></td>
        </tr>
        <tr>
            <td>Giá sp</td>
            <td><input type="text" name="giasp" class="input-text"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" class="input-text"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea rows="10" name="tomtat" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" name="noidung" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <div class="input-select">
                    <select class="input-select-option" name="danhmuc">
                        <?php
                        $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <div class="input-select">
                    <select class="input-select-option" name="tinhtrang">
                        <option value="1">Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input class="add-input" type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>