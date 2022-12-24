<?php
if (!isset($_SESSION["user"])) {
    echo "<script>alert('Kamu belum melakukan login pada sesi ini!');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
}
?>