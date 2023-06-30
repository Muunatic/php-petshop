<?php include 'header.php' ?>

<!-- Banner Halaman -->

<div id="banner" class="mainbanner">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('assets/img/banner1.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="banner">
                    <h1 style="text-shadow: black 2px 2px;">Adopsi Kucing</h1>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('assets/img/banner2.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="banner">
                    <h1 style="text-shadow: black 2px 2px;">Makanan Hewan</h1>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('assets/img/banner3.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="banner">
                    <h1 style="text-shadow: black 2px 2px;">Aksesoris Hewan</h1>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Halaman 1 -->

<div class="main">
    <div class="mainwrapper">
        <div class="maintitle">
            <h1>BEST SELLER</h1>
        </div>
        <div class="maingrid">
            <div class="mainbox">
                <div class="title">
                    <h3>Whiskas 1kg</h3>
                </div>
                <div class="image">
                    <img src="assets/img/whiskas.png" alt="">
                </div>
                <div class="price">
                    <p>Rp. 62900</p>
                </div>
            </div>
            <div class="mainbox">
                <div class="title">
                    <h3>Royal canin 1kg</h3>
                </div>
                <div class="image">
                    <img src="assets/img/royalcanin.png" alt="">
                </div>
                <div class="price">
                    <p>Rp. 154900</p>
                </div>
            </div>
            <div class="mainbox">
                <div class="title">
                    <h3>Whiskas wet 80g</h3>
                </div>
                <div class="image">
                    <img src="assets/img/whiskaswetfood.png" alt="">
                </div>
                <div class="price">
                    <p>Rp. 9900</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Halaman 2 -->

<div class="main2">
    <div class="main2title">
        <h1>REVIEWS</h1>
    </div>
    <div class="main2wrapper">
        <div class="swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main2reviews">
                        <div class="profile">
                            <div class="image">
                                <img src="assets/img/popcat.jpg" alt="">
                            </div>
                            <div class="title">
                                <h5>Popcat</h5>
                            </div>
                        </div>
                        <div class="description">
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p>"pelayanan toko baik, dapet hadiah lagi setiap hari jumatnya, dan adminnya memberikan info dengan baik helpful banget."</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main2reviews">
                        <div class="profile">
                            <div class="image">
                                <img src="assets/img/mewo.jpg" alt="">
                            </div>
                            <div class="title">
                                <h5>Mewo</h5>
                            </div>
                        </div>
                        <div class="description">
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p>"stoknya melimpah, pelayanannya profesional, segala kebutuhan anabul ada semua disini."</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main2reviews">
                        <div class="profile">
                            <div class="image">
                                <img src="assets/img/waffles.jpg" alt="">
                            </div>
                            <div class="title">
                                <h5>Waffles</h5>
                            </div>
                        </div>
                        <div class="description">
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>"enak bgt banyak makanan favorit gua disini."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Halaman 3 -->

<div id="product" class="main3">
    <div class="main3title">
        <h1>PRODUCT</h1>
    </div>
    <div class="main3wrapper">
        <div class="main3grid">
            <?php
                $conn = new mysqli("localhost", "root", "", "library");
                $st = $conn -> prepare("select * from book");
                $st -> execute();
                $rs = $st -> get_result();
                while ($row = $rs -> fetch_assoc()) {
                    echo '
                        <div class="main3box">
                            <div class="image">
                                <img src="assets/img/'.$row["image"].'" alt="">
                            </div>
                            <div class="title">
                                <h5>'.$row["name"].'</h5>
                            </div>
                            <div class="description">
                                <p>'.$row["description"].'</p>
                            </div>
                            <div class="price">
                                <p>Rp. '.$row["price"].'</p>
                            </div>
                            <div class="order">
                                <div class="contentbutton">
                                    <form method="POST" action="add_item.php?id='.$row["id"].'" target="_blank">
                                        <button style="background-color: #f72a31">Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
</div>

<!-- Halaman 4 -->

<div class="main4">
    <div class="main4title">
        <h1>ABOUT US</h1>
    </div>
    <div class="main4wrapper">
        <div class="main4grid">
            <div class="image">
                <img src="assets/img/petshopku.png" alt="">
            </div>
            <div class="description">
                <h1>PetshopKu</h1>
                <p>Belanja Online Kebutuhan Hewan Peliharaan hanya di PetshopKu Menyediakan brand lokal dan internasional yang terus bertambah untuk PetLovers di seluruh Indonesia.</p>
            </div>
        </div>
    </div>
</div>

<!-- Halaman 5 -->

<div class="main5">
    <div class="main5title">
        <h1>CONTACT</h1>
    </div>
    <div class="main5wrapper">
        <div class="main5grid">
            <div class="title">
                <h3>Ada keluhan? hubungi kami sekarang</h3>
            </div>
            <div class="input">
                <?php
                    echo '
                    <form action="contact.php" method="get">
                        <div style="display: inline-block; margin: 1rem;">
                            <p>Nama depan</p>
                            <input type="text" name="firstname" id="firstname" style="padding: 10px; width: 10rem;" placeholder="Nama depan">
                        </div>
                        <div style="display: inline-block; margin: 1rem;">
                            <p>Nama belakang</p>
                            <input type="text" name="lastname" id="lastname" style="padding: 10px; width: 10rem;" placeholder="Nama belakang">
                        </div>
                        <div style="margin: 1rem;">
                            <p>Email</p>
                            <input type="email" name="email" id="email" style="padding: 10px; width: 22.3rem;" placeholder="Email">
                        </div>
                        <div style="margin: 1rem;">
                            <p>No telepon</p>
                            <input type="number" name="notelp" id="notelp" style="padding: 10px; width: 22.3rem;" placeholder="No telepon">
                        </div>
                        <div style="margin: 1rem;">
                            <p>Apa yang bisa kami bantu?</p>
                            <textarea name="comment" id="comment" style="padding: 10px; height: 64px; width: 22.3rem;" placeholder="Masukan keluhan anda"></textarea>
                        </div>
                        <div style="margin: 1rem; margin-top: 2.5rem;">
                            <input class="submit" type="submit" name="submit" value="Hubungi kami">
                        </div>
                    </form>
                    ';
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>