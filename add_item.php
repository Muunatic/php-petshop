<?php
    session_start();

    // cek sesi user
    if (!isset($_SESSION["user"])) {
        echo "<script>alert('Kamu belum melakukan login pada sesi ini!');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }

    $conn = new mysqli("localhost", "root", "", "library");
    $st_check = $conn -> prepare("select * from temp_order where email=? and itemid=?");
    $st_check -> bind_param("si", $_SESSION["user"], $_GET["id"]);
    $st_check -> execute();
    $rs = $st_check -> get_result();
    if ($rs -> num_rows == 0){
        $conn = new mysqli("localhost", "root", "", "library");
        $st = $conn -> prepare("insert into temp_order(email,itemid) values(?,?)");
        $st -> bind_param("si", $_SESSION["user"], $_GET["id"]);
        $st -> execute();
    } else {
        $conn = new mysqli("localhost", "root", "", "library");
        $st = $conn -> prepare("update temp_order set qty=qty+1 where email=? and itemid=?");
        $st -> bind_param("si", $_SESSION["user"], $_GET["id"]);
        $st -> execute();
    }
    echo "<script>window.location='menu.php';</script>";
?>