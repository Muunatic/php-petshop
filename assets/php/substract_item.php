<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "kocheng");
    $st_check = $conn -> prepare("select * from cart where email=? and item=?");
    $st_check -> bind_param("ss", $_SESSION["user"], $_GET["name"]);
    $st_check -> execute();
    $rs = $st_check -> get_result();
    while ($row = $rs -> fetch_assoc()) {
        if($row["qty"] > 1){
            $conn = new mysqli("localhost", "root", "", "kocheng");
            $st =$conn->prepare("update cart set qty=qty-1 where email=? and item=?");
            $st -> bind_param("ss", $_SESSION["user"], $_GET["name"]);
            $st -> execute();
        } else {
            echo "<script>alert('Minimal pembelian adalah 1');</script>";
        }
        echo "<script>window.location='order.php';</script>";
    }
?>