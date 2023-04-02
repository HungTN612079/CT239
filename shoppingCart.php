<?php
ob_start();
session_start();
include("./admin/config/config.php");
if (isset($_POST["id"])) {
    // echo "OK";
    $id = $_POST["id"];
    $sqlSelectPro = "SELECT * FROM sanpham WHERE id_sanpham =" . $id;
    $result = mysqli_query($mysqli, $sqlSelectPro);
    $row = mysqli_fetch_row($result);

    if (!isset($_SESSION["cart"])) {
        $cart[$id] = array(
            'tensanpham' => $row[1],
            'masp' => $row[2],
            'giasp' => $row[3],
            'hinhanh' => $row[5],
            'tomtat' => $row[6],
            'noidung' => $row[7],
            'soluong' => 1
        );
    } else {
        $cart = $_SESSION["cart"];
        // tìm mảng đã có $id này chưa, nếu có thì tăng số lượng
        if (array_key_exists($id, $cart)) {
            $cart[$id] = array(
                'tensanpham' => $row[1],
                'masp' => $row[2],
                'giasp' => $row[3],
                'hinhanh' => $row[5],
                'tomtat' => $row[6],
                'noidung' => $row[7],
                'soluong' => (int)$cart[$id]["soluong"] + 1
            );
        } else {
            $cart[$id] = array(
                'tensanpham' => $row[1],
                'masp' => $row[2],
                'giasp' => $row[3],
                'hinhanh' => $row[5],
                'tomtat' => $row[6],
                'noidung' => $row[7],
                'soluong' => 1
            );
        }
    }

    $_SESSION["cart"] = $cart;
    echo "<prE>";
    print_r($_SESSION["cart"]);

    $number = 0;
    $total = 0;
    // mảng 2 chiều nên foreach được
    foreach ($cart as $value) {
        $number += (int)$value["soluong"];
        $total += (int)$value["soluong"] * (int)$value["giasp"];
    }
    echo $number . "-" . number_format($total, 0, ',', '.') . ' VNĐ';
}
