<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "kocheng");
    $st_check = $conn->prepare("select * from cart where email=? and item=?");
    $st_check -> bind_param("ss", $_SESSION["user"], $_GET["name"]);
    $st_check -> execute();
    $rs = $st_check -> get_result();
    if($rs -> num_rows == 0){
        $conn=new mysqli("localhost", "root", "", "kocheng");
        $st=$conn->prepare("insert into cart(email,item) values(?,?)");
        $st->bind_param("ss", $_SESSION["user"], $_GET["name"]);
        $st->execute();
    } else {
        $conn=new mysqli("localhost", "root", "", "kocheng");
        $st=$conn->prepare("update cart set qty=qty+1 where email=? and item=?");
        $st->bind_param("ss", $_SESSION["user"], $_GET["name"]);
        $st->execute();
    }
    echo "<script>window.location='order.php';</script>";
?>