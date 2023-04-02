<?php
$sql_lietke_danhmucbv = "SELECT * FROM danhmucbaiviet ORDER BY thutu DESC";
$query_lietke_danhmucbv = mysqli_query($mysqli, $sql_lietke_danhmucbv);
?>
<div class="lietke">
    <div class="canhchinh">
        <h3>Liệt kê danh mục bài viết</h3>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
            <th class="del-Update" colspan="2">Thao tác</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucbv)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
                <td>
                    <a class="color-del-update" href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a>
                </td>
                <td>
                    <a class="color-del-update" href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>