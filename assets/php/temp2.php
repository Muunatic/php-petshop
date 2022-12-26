<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "kocheng");
    $st_check = $conn -> prepare("select * from checkout where email=?");
    $st_check -> bind_param("s", $_SESSION["user"]);
    $st_check -> execute();
    $rs = $st_check -> get_result();
    
    if($rs -> num_rows == 0){
        $st= $conn -> prepare("insert into checkout(email, total) values(?,?)");
        $st -> bind_param("si", $_SESSION["user"], $_GET["total"]);
        $st -> execute();
    } else {
        $st= $conn -> prepare("insert into checkout(email, total) values(?,?)");
        $st -> bind_param("si", $_SESSION["user"], $_GET["total"]);
        $st -> execute();
    }

    $st_del = $conn -> prepare("delete from cart where email=?");
    $st_del -> bind_param("s", $_SESSION["user"]);
    $st_del -> execute();

    echo "<script>window.location='checkout.php';</script>";
?>