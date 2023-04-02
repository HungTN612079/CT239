<?php
$sql_lietke_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<div class="lietke">
    <div class="canhchinh">
        <h3>Liệt kê danh mục sản phẩm</h3>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
            <th class="del-Update" colspan="2">Thao tác</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
            $i++;
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $i ?></td>
                <td style="text-align: center;"><?php echo $row['tendanhmuc'] ?></td>
                <td>
                    <a class="color-del-update" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a>
                </td>
                <td>
                    <a class="color-del-update" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>