<?php
    ob_start();
    session_start();
    include("./admin/config/config.php");
    if (isset($_POST["id"]) && isset($_POST["num"])) {
        $id = $_POST["id"];
        if (isset($_SESSION["cart"])) {
            $cart = $_SESSION["cart"];
            echo "<prE>";
            print_r($cart);

            if (array_key_exists($id, $cart)) {
                if($_POST["num"]) {
                    $cart[$id] = array(
                        'tensanpham' => $cart[$id]['tensanpham'],
                        'hinhanh' => $cart[$id]['hinhanh'],
                        'giasp' => $cart[$id]['giasp'],
                        'soluong' => $_POST["num"]
                    );
                } else {
                    unset($cart[$id]);
                }

                $_SESSION["cart"] = $cart;
            } 
        }
    }
?>