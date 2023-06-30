<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "library");
    $st_check = $conn -> prepare("select * from temp_order where email=? and itemid=?");
    $st_check -> bind_param("si", $_SESSION["user"], $_GET["id"]);
    $st_check -> execute();
    $rs = $st_check -> get_result();
    while ($row = $rs -> fetch_assoc()) {
        if ($row["qty"] > 1) {
            $st = $conn -> prepare("update temp_order set qty=qty-1 where email=? and itemid=?");
            $st -> bind_param("si", $_SESSION["user"], $_GET["id"]);
            $st -> execute();
        } else {
            echo "<script>alert('Minimal pembelian adalah 1');</script>";
        }
        echo "<script>window.location='menu.php';</script>";
    }
?>