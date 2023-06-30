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
        <div class="wrapper">
            <div class="menubook">
                <table border="4">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $con = new mysqli("localhost", "root", "", "library");
                        $st = $con -> prepare("select * from book");
                        $st -> execute();
                        $rs = $st -> get_result();
                        while($row = $rs -> fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'.$row["id"].'</td>';
                            echo '<td>'.$row["name"].'</td>';
                            echo '<td>'.$row["price"].'</td>';
                            echo '<td><img src="../assets/img/'.$row["image"].'" width=100px/></td>';
                            echo '<td><a href="delete_book.php?id='.$row["id"].'">Delete</a> | <a href="update_book.php?id='.$row["id"].'">Update</a></td>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>