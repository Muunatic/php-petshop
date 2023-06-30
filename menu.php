<?php include 'header.php' ?>
<?php include 'session_check.php' ?>

<!-- Menu -->

<div class="menu">
    <div class="menuwrapper">
        <?php
            $conn = new mysqli("localhost", "root", "", "library");
            $st = $conn -> prepare("select * from book");
            $st -> execute();
            $rs = $st -> get_result();
            while ($row = $rs -> fetch_assoc()) {
                echo '<div class="menubox">
                <div class="boxwrapper">
                    <div class="image">
                        <img src="assets/img/'.$row["image"].'" alt="">
                    </div>
                    <div class="description">
                        <p>'.$row["name"].'</p>
                        <p>'.$row["price"].'</p>
                    </div>
                    <div class="add">
                        <form action="add_item.php?id='.$row["id"].'" method="post">
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
            $conn = new mysqli("localhost", "root", "", "library");
            $st = $conn -> prepare("select book.id, qty, name, price, image from book inner join temp_order on book.id=temp_order.itemid where email=?");
            $st -> bind_param("s", $_SESSION["user"]);
            $st -> execute();
            $rs = $st -> get_result();
            $total = 0;
            while ($row = $rs -> fetch_assoc()) {
                echo '<div class="orderbox">
                        <div class="left">
                            <div class="image">
                                <img src="assets/img/'.$row["image"].'" alt="">
                            </div>
                            <div class="description">
                                <p>Item: '.$row["name"].'</p>
                                <p>Price: '.$row["price"].'</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="adjustitem">
                                <p><button><a href="substract_item.php?id='.$row["id"].'">-</a></button><b><span class="qty">'.$row["qty"].'</span><button><a href="add_item.php?id='.$row["id"].'">+</a></button><span class="remove"><button><a href="delete_item.php?id='.$row["id"].'"><i class="bi bi-trash-fill"></i></a></button></span></b></p>
                                <br>
                                <p><b>Subtotal: '.$row['price']*$row['qty'].'</b></p>
                            </div>
                        </div>
                    </div>
                ';
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
            <form action="add_order.php" method="post">
                <button name="submit" type="submit">Beli Sekarang!</button>
            </form>
        </div>
    </div>

</div>

<?php include 'footer.php' ?>