<?php include 'header.php' ?>

<?php
if (!isset($_SESSION["user"])) {
    echo "<script>alert('Kamu belum melakukan login pada sesi ini!');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
}
?>

<?php include 'menu.php' ?>

<style>
    .centertext {
        text-align: center;
    }
</style>
<div class="mainadmin">
    <div class="wrapper">
        <p><a href="index.php"><i class="bi bi-house-door"></i> Home</a></p>
        <p><a href="book.php"><i class="bi bi-book"></i> Book</a></p>
        <p><a href="create_book.php"><i class="bi bi-journal-plus"></i> Create Book</a></p>
    </div>
</div>
<div class="main">
    <div class="mainbook">
        <div class="wrapper" style="padding:1rem; height: 100vh">
            <div class="centertext">
                <img src="../assets/img/rainbowcat.gif" style="border-radius: 100%; margin: 2.5rem;" alt="ADMIN">
                <h1>Ini adalah tampilan halaman admin :)</h1>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>