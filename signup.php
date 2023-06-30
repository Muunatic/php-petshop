<!DOCTYPE html>
<?php session_start(); ?>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link rel="icon" href="assets/img/rainbowcat.gif" type="image/gif"/>
</head>
<body style="font-family: 'Poppins'; margin: 0; background-color: whitesmoke;">

    <div style="background-color: white; margin-top: 2.5rem; margin-bottom: 2.5rem; margin-right: auto; margin-left: auto; max-width: 30rem; border: solid; border-width: 1px; border-radius: 5px; box-shadow: rgba(149, 157, 165, 0.5) 0px 3px 3px;">
        <div style="margin: 1rem;">
            <p><a href="index.php" style="text-decoration: none;"><i class="bi bi-arrow-left"></i></a></p>
        </div>
        <div style="margin: 5rem;">
            <form method="POST" action="signup.php">
                <h1 style="text-align: center;">Sign Up</h1>
                <br>
                <h3>Username</h3>
                <input style="width: 100%; padding: 0.5rem; padding-right: 0; outline: none;" name="username" type="text" placeholder="Masukan username">
                <h3>Email</h3>
                <input style="width: 100%; padding: 0.5rem; padding-right: 0; outline: none;" name="email" type="email" placeholder="Masukan email">
                <h3>Password</h3>
                <input style="width: 100%; padding: 0.5rem; padding-right: 0; outline: none;" name="password" type="password" placeholder="Masukan password" minlength="8">
                <h3>Confirm Password</h3>
                <input style="width: 100%; padding: 0.5rem; padding-right: 0; outline: none;" name="confirmpassword" type="password" placeholder="Masukan password" minlength="8">
                <br>
                <h3>Mobile</h3>
                <input style="width: 100%; padding: 0.5rem; padding-right: 0; outline: none;" name="mobile" type="number" placeholder="Masukan nomor hp">
                <br>
                <h3>Address</h3>
                <input style="width: 100%; padding: 0.5rem; padding-right: 0; outline: none;" name="address" type="text" placeholder="Masukan alamat">
                <br>
                <div style="margin-top: 2.5rem; text-align: center;">
                    <input style="font-family: 'Poppins'; color: white; margin-right: 1rem; padding-left: 2.5rem; padding-right: 2.5rem; padding-top: 0.5rem; padding-bottom: 0.5rem; background-color: #238823; border: none;" name="submit" type="submit" value="Register">
                    <input style="font-family: 'Poppins'; color: white; margin-left: 1rem; padding-left: 2.5rem; padding-right: 2.5rem; padding-top: 0.5rem; padding-bottom: 0.5rem; background-color: #D2222D; border: none;" name="reset" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        if ($_POST["password"] == $_POST["confirmpassword"]) {
            $conn = new mysqli("localhost", "root", "", "library");
            $st_check = $conn -> prepare("select * from users where email=?");
            $st_check -> bind_param("s", $_POST["email"]);
            $st_check -> execute();
            $rs = $st_check -> get_result();
            if ($rs -> num_rows > 0) {
                echo "<script>alert('Email yang kamu gunakan sudah terdaftar!');</script>";
            } else {
                $st = $conn -> prepare("insert into users(name, email, password, mobile, address) values(?,?,?,?,?)");
                $st -> bind_param("sssss", $_POST["username"], $_POST["email"], $_POST["password"], $_POST["mobile"], $_POST["address"]);
                $st -> execute();
                $_SESSION["user"]=$_POST["email"];
                echo "<script>window.location='index.php';</script>";
            }
        } else {
            echo "<script>alert('Konfirmasi password salah!');</script>";
        }
    }
?>