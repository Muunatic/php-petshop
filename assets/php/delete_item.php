<?php
    session_start();
    $con=new mysqli("localhost", "root", "", "kocheng");
    $st_check=$con->prepare("delete from cart where email=? and item=?");
    $st_check->bind_param("ss", $_SESSION["user"], $_GET["name"]);
    $st_check->execute();
    echo "<script>window.location='order.php';</script>";
?>