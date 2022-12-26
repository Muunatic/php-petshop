<!DOCTYPE html>
<?php include 'header.php' ?>
<?php include 'session_validation.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Order</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/order.css"/>
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

        <!-- Menu -->

        <div class="menu">
            <div class="menuwrapper">
            <?php
            $conn = new mysqli("localhost", "root", "", "kocheng");
            $st = $conn -> prepare("select * from product");
            $st -> execute();
            $rs = $st -> get_result();
            while ($row = $rs -> fetch_assoc()) {
                echo '<div class="menubox">
                <div class="boxwrapper">
                    <div class="image">
                        <img src="../img/'.$row["image"].'" alt="">
                    </div>
                    <div class="description">
                        <p>'.$row["name"].'</p>
                        <p>'.$row["pricedot"].'</p>
                    </div>
                    <div class="add">
                        <form action="temp.php?name='.$row["name"].'" method="post">
                            <button>Add</button>
                        </form>
                    </div>
                </div>
            </div>';
            }
            ?>
            </div>
        </div>

        <!-- Halaman keranjang -->

        <div class="maincart">

            <!-- keranjang -->

            <div class="maincartwrapper">
                <div class="title">
                    <p>My Order</p>
                </div>
                <?php
                    $conn = new mysqli("localhost", "root", "", "kocheng");
                    $st = $conn -> prepare("select * from product inner join cart on product.name=cart.item where email=?");
                    $st -> bind_param("s", $_SESSION["user"]);
                    $st -> execute();
                    $rs = $st -> get_result();
                    $total = 0;
                    while ($row = $rs -> fetch_assoc()) {
                        echo '<div class="orderbox">
                        <div class="left">
                            <div class="image">
                                <img src="../img/'.$row["image"].'" alt="">
                            </div>
                            <div class="description">
                                <p>'.$row["name"].'</p>
                                <p>'.$row["price"].'</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="adjustitem">
                                <p><button><a href="substract_item.php?name='.$row["name"].'">-</a></button><b><span class="qty">'.$row["qty"].'</span><button><a href="add_item.php?name='.$row["name"].'">+</a></button><span class="remove"><button><a href="delete_item.php?name='.$row["name"].'"><i class="bi bi-trash-fill"></i></a></button></span></b></p>
                            </div>
                        </div>
                    </div>';
                    $total = $total + ($row["price"] * $row["qty"]);
                    }
                ?>
            </div>

            <!-- Halaman checkout -->

            <div class="checkout">
                <div class="checkoutwrapper">
                    <div class="left">
                        <p>Total Pembelian</p>
                    </div>
                    <div class="right">
                        <?php
                        echo '<p>Rp. '.$total.'</p>';
                        ?>
                    </div>
                </div>
                <div class="checkoutbutton">
                    <?php
                        echo '<form action="temp2.php?total='.$total.'" method="post">
                            <button name="submit" type="submit">Buy Now</button>
                        </form>';
                    ?>
                </div>
            </div>

        </div>

    </div>
</body>
<script src="../js/index.js"></script>
</html>