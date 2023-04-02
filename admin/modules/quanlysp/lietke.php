<?php
$sql_lietke_sp = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<div class="lietke">
    <div class="canhchinh">
        <h3>Liệt kê sản phẩm</h3>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th width="5%">Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá sp</th>
            <th>Số lượng</th>
            <th>Danh mục</th>
            <th>Mã sp</th>
            <th width="20%">Tóm tắt</th>
            <th width="20%">Nội dung</th>
            <th>Trạng thái</th>
            <th class="del-Update" colspan="2">Thao tác</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_sp)) {
            $i++;
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['tensanpham'] ?></td>
                <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
                <td style="text-align: center;"><?php echo $row['giasp'] ?></td>
                <td style="text-align: center;"><?php echo $row['soluong'] ?></td>
                <td style="text-align: center;"><?php echo $row['tendanhmuc'] ?></td>
                <td style="text-align: center;"><?php echo $row['masp'] ?></td>
                <td><?php echo $row['tomtat'] ?></td>
                <td><?php echo $row['noidung'] ?></td>
                <td><?php if ($row['tinhtrang'] == 1) {
                        echo 'Kích hoạt';
                    } else {
                        echo 'Ẩn';
                    }
                    ?>
                </td>
                <td>
                    <a class="color-del-update" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a>
                </td>
                <td>
                    <a class="color-del-update" href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>