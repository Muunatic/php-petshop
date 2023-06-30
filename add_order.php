<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "library");
    $st_bill = $conn -> prepare("insert into bill(email) values(?)");
    $st_bill -> bind_param("s", $_SESSION["user"]);
    $st_bill -> execute();

    $st_billno = $conn -> prepare("select max(bill_no) as billno from bill where email=?");
    $st_billno -> bind_param("s", $_SESSION["user"]);
    $st_billno -> execute();
    $rs_billno = $st_billno -> get_result();
    $row_billno = $rs_billno -> fetch_assoc();
    $bno = $row_billno["billno"];

    $st_temp = $conn -> prepare("select * from temp_order where email=?");
    $st_temp -> bind_param("s", $_SESSION["user"]);
    $st_temp -> execute();
    $rs_temp = $st_temp -> get_result();

    if ($rs_temp -> num_rows == 0) {
        echo "<script>alert('Tidak ada pembelian dalam keranjang!');</script>";
        echo "<script>window.location='menu.php';</script>";
    } else {
        while ($row_temp = $rs_temp -> fetch_assoc()) {
            $st_billdet = $conn -> prepare("insert into bill_detail values(?,?,?)");
            $st_billdet -> bind_param("iii", $bno, $row_temp["itemid"], $row_temp["qty"]);
            $st_billdet -> execute();
    
            $st_del = $conn -> prepare("delete from temp_order where email=?");
            $st_del -> bind_param("s", $_SESSION["user"]);
            $st_del -> execute();
            echo "<script>window.location='bill.php?bno=".$bno."';</script>";
        }
    }
?>