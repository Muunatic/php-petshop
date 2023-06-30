<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "library");
    $st_check = $conn -> prepare("delete from temp_order where email=? and itemid=?");
    $st_check -> bind_param("si", $_SESSION["user"], $_GET["id"]);
    $st_check -> execute();
    echo "<script>window.location='menu.php';</script>";
?>