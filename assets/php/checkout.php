<!DOCTYPE html>
<?php include 'header.php' ?>
<?php include 'session_validation.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Checkout</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/checkout.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <div class="page">

        <!-- Navbar Halaman -->

        <div id="home" class="mainnavbar">
            <div class="mainnavbarleft">
                <ul>
                    <li style="display: inline-block; margin-right: 1rem;"><p><i class="fa-solid fa-cat"></i> JualKucing</p></li>
                    <li style="display: inline-block; margin-right: 1rem;">|</li>
                    <li style="display: inline-block;"><p><i class="bi bi-whatsapp"></i> WhatsApp: <a href="https://whatsapp.com" style="color: crimson;">0812-3456-7890</a></p></li>
                </ul>
            </div>
            <div class="mainnavbarright">
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <?php include 'check_session.php' ?>
                </ul>
            </div>
        </div>
        
        <div id="homefixed" class="mainnavbar mainnavbarfixed">
            <div class="mainnavbarleft">
                <ul>
                    <li style="display: inline-block; margin-right: 1rem;"><p><i class="fa-solid fa-cat"></i> JualKucing</p></li>
                    <li style="display: inline-block; margin-right: 1rem;">|</li>
                    <li style="display: inline-block;"><p><i class="bi bi-whatsapp"></i> WhatsApp: <a href="https://whatsapp.com" style="color: crimson;">0812-3456-7890</a></p></li>
                </ul>
            </div>
            <div class="mainnavbarright">
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <?php include 'check_session.php' ?>
                </ul>
            </div>
        </div>

        <!-- Checkout -->

        <div class="checkout">
            <div class="wrapper">
                <div class="title">
                    <p>Your Bill</p>
                </div>
                <div class="bill">
                    <?php
                        $conn = new mysqli("localhost", "root", "", "kocheng");
                        $stid = $conn -> prepare("select max(id_checkout) as id_order from checkout where email=?");
                        $stid -> bind_param("s", $_SESSION["user"]);
                        $stid -> execute();
                        $rsid = $stid -> get_result();
                        $row_idorder = $rsid -> fetch_assoc();
                        $idorder = $row_idorder["id_order"];

                        $st = $conn -> prepare("select * from checkout where email=? and id_checkout=?");
                        $st -> bind_param("si", $_SESSION["user"], $idorder);
                        $st -> execute();
                        $rs = $st -> get_result();
                        while ($row = $rs -> fetch_assoc()) {
                            echo '
                            <p>Id Order: '.$row["id_checkout"].'</p>
                            <p>Email: '.$row["email"].'</p>
                            <p>Waktu order: '.$row["order_timestamp"].'</p>
                            <p>Total belanja: Rp. '.$row["total"].'</p>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="../js/index.js"></script>
</html>