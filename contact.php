<?php
if (isset($_GET["submit"])) {
    $name = $_GET["firstname"] . " " . $_GET["lastname"];
    $email = $_GET["email"];
    $notelp = $_GET["notelp"];
    $comment = $_GET["comment"];

    $conn = new mysqli("localhost", "root", "", "library");
    $st = $conn -> prepare("insert into contact values(?, ?, ?, ?)");
    $st -> bind_param("ssss", $name, $email, $notelp, $comment);
    $st -> execute();
    echo '<script>alert("Keluhanmu sudah terkirim");</script>';
    echo '<script>window.location="index.php";</script>';
}
?>