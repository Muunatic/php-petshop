<?php include 'header.php' ?>

<div class="pagecheckout">
    <div class="checkout">
        <div class="wrapper">
            <div class="title">
                <p>Your Bill</p>
            </div>
            <div class="bill">
                <?php
                    $conn = new mysqli("localhost", "root", "", "library");
                    $st_bill = $conn -> prepare("select * from bill where bill_no=?");
                    $st_bill -> bind_param("i", $_GET["bno"]);
                    $st_bill -> execute();
                    $rs_bill = $st_bill -> get_result();
                    $row_bill = $rs_bill -> fetch_assoc();
                    echo '<h6>Bill Number : '.$row_bill['bill_no'].'</h6>';
                    echo '<h6>Bill Date : '.$row_bill['bill_date'].'</h6>';
                ?>
                <?php
                    $st_det = $conn -> prepare("select name, price, itemqty from book inner join bill_detail on book.id=bill_detail.itemid where bill_no=?");
                    $st_det -> bind_param("i", $_GET["bno"]);
                    $st_det -> execute();
                    $rs_det = $st_det -> get_result();
                    $total = 0;
                    echo '<center>';
                    echo '<table width=80% border=1>';
                    echo '
                        <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Sub Total</th>
                        </tr>
                    ';
                    while ($row_det = $rs_det -> fetch_assoc()) {
                        echo '
                            <tr>
                            <td>'.$row_det['name'].'</td>
                            <td>'.$row_det['price'].'</td>
                            <td>'.$row_det['itemqty'].'</td>
                            <td>'.$row_det['price']*$row_det['itemqty'].'</td>
                            </tr>
                        ';

                        $total=$total + ($row_det['price']*$row_det['itemqty']);
                    }
                    echo '</table>';
                    echo '</center>';
                    echo '<h3>Total belanja: Rp. '.$total.'</h3>';
                    echo '
                    <script>
                        setInterval(() => {
                            alert("Terima kasih telah berbelanja di toko PetshopKu");
                            window.location.href = "index.php";
                        }, 5000);
                    </script>
                    '
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>