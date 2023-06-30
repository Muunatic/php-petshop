<?php include 'header.php' ?>

<?php
if (!isset($_SESSION["user"])) {
    echo "<script>alert('Kamu belum melakukan login pada sesi ini!');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
}
?>

<?php include 'menu.php' ?>

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
            <form class="w3-container" action="create_book.php" method="post" enctype="multipart/form-data">
                <label class="w3-text-black">ID</label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="id">

                <label class="w3-text-black">Name</label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="name">

                <label class="w3-text-black">Price</label>
                <input class="w3-input w3-border w3-light-grey" type="text" name="price">

                <label class="w3-text-black">Image</label>
                <input class="w3-input w3-border w3-light-grey" type="file" name="image">

                <input class="w3-btn w3-blue-grey" type="submit" name="submit" value="Add">
            </form>
            <?php
                if (isset($_POST["submit"])) {
                    $id = $_POST["id"];
                    $name = $_POST["name"];
                    $price = $_POST["price"];
                    $image = basename($_FILES["image"]["name"]);
                    $image_dir = "../assets/img/".$image;
                    move_uploaded_file($_FILES["image"]["tmp_name"], $image_dir);

                    $con = new mysqli("localhost", "root", "", "library");
                    $st = $con -> prepare("insert into book values(?,?,?,?)");
                    $st -> bind_param("isds", $id, $name, $price, $image);
                    $st -> execute();
                    echo "<script>window.location='book.php';</script>";
                }
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
