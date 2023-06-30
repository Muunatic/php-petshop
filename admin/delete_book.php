<?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $con = new mysqli("localhost", "root", "", "library");
        $st = $con -> prepare("delete from book where id='$id'");
        $st -> execute();
        echo "<script>window.location='book.php';</script>";
    }
?>
    