<!DOCTYPE html>
<html lang="en">
<?php include 'assets/php/header.php' ?>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kocheng</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js" integrity="sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA==" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" referrerpolicy="no-referrer" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" integrity="sha512-ipO1yoQyZS3BeIuv2A8C5AwQChWt2Pi4KU3nUvXxc4TKr8QgG8dPexPAj2JGsJD6yelwKa4c7Y2he9TTkPM4Dg==" referrerpolicy="no-referrer" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/swiper.css"/>
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#product">Product</a></li>
                    <?php include 'assets/php/check_session_home.php' ?>
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#product">Product</a></li>
                    <?php include 'assets/php/check_session_home.php' ?>
                </ul>
            </div>
        </div>

        <!-- Banner Halaman -->

        <div id="banner" class="mainbanner">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('assets/img/banner1.jpg'); background-repeat: no-repeat; background-size: cover;">
                        <div class="banner">
                            <h1 style="text-shadow: black 2px 2px;">Jual/Beli Kucing</h1>
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

        <!-- Halaman 2 -->

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
                            <p>Rp. 62.900</p>
                        </div>
                        <div class="contentbutton">
                            <form method="POST" action="assets/php/order.php" target="_blank">
                                <button style="background-color: #f72a31">Order</button>
                            </form>
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
                            <p>Rp. 154.900</p>
                        </div>
                        <div class="contentbutton">
                            <form method="POST" action="assets/php/order.php" target="_blank">
                                <button style="background-color: #f72a31">Order</button>
                            </form>
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
                            <p>Rp. 9.900</p>
                        </div>
                        <div class="contentbutton">
                            <form method="POST" action="assets/php/order.php" target="_blank">
                                <button style="background-color: #f72a31">Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Halaman 3 -->

        <div id="product" class="main2">
            <div class="main2title">
                <h1>PRODUCT</h1>
            </div>
            <div class="main2wrapper">
                <div class="main2grid">
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/kucing1.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Persian</h5>
                        </div>
                        <div class="description">
                            <p>Kucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 3.599.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/kucing2.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Himalayan</h5>
                        </div>
                        <div class="description">
                            <p>Kucing himalaya atau kucing persia himalaya adalah salah satu ras kucing domestik yang merupakan hasil persilangan antara kucing persia dengan kucing siam.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 3.199.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/kucing3.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Ragdoll</h5>
                        </div>
                        <div class="description">
                            <p>Ragdoll adalah kucing berbadan besar, dada yang lebar, dan panggul yang besar. Bulu Ragdoll panjangnya sedang, dengan tekstur seperti bulu pada kelinci</p>
                        </div>
                        <div class="price">
                            <p>Rp. 3.899.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/kucing4.png" alt="">
                        </div>
                        <div class="title">
                            <h5>British shorthair</h5>
                        </div>
                        <div class="description">
                            <p>British shorthair memiliki ukuran tubuh sedang sampai dengan cukup besar dengan berat badan sekitar 4–8 kg.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 5.399.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/kucing5.png" alt="">
                        </div>
                        <div class="title">
                            <h5>American shorthair</h5>
                        </div>
                        <div class="description">
                            <p>American shorthair adalah kucing yang memiliki bulu yang pendek, tebal, padat, dan sedikit kaku, serta memiliki kaki dan cakar yang kuat.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 4.399.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/whiskaswetfood.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Whiskas wet 80g</h5>
                        </div>
                        <div class="description">
                            <p>Whiskas wet food merupakan pilihan terbaik untuk jenis makanan bernutrisi yang bisa di berikan untuk peliharaan kucing kesayangan.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 9.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/whiskas.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Whiskas 1kg</h5>
                        </div>
                        <div class="description">
                            <p>Kamu harus memilih sesuai dengan ras, umur, dan juga kondisi kucing. Salah satu merek cat food yang jadi pilihan tepat adalah makanan kucing Whiskas.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 62.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/royalcanin.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Royal canin 1kg</h5>
                        </div>
                        <div class="description">
                            <p>Kalau untuk kucing kesayangan, pastinya kamu harus memberikan makanan bernutrisi terbaik! Royal Canin Persian Adult bisa jadi pilihan!</p>
                        </div>
                        <div class="price">
                            <p>Rp. 154.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/meo.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Meo creamy treats</h5>
                        </div>
                        <div class="description">
                            <p>Me-o creamy treats adalah makanan kucing yang berbentuk cair dalam kemasan sachet. merupakan snack atau camilan buat kucing kesayangan anda.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 24.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main2box">
                        <div class="image">
                            <img src="assets/img/kandangkucing.png" alt="">
                        </div>
                        <div class="title">
                            <h5>Cat cage</h5>
                        </div>
                        <div class="description">
                            <p>Rumah bagi Anabul anda.</p>
                        </div>
                        <div class="price">
                            <p>Rp. 159.900</p>
                        </div>
                        <div class="order">
                            <div class="contentbutton">
                                <form method="POST" action="assets/php/order.php" target="_blank">
                                    <button style="background-color: #f72a31">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Halaman Footer -->

        <div class="copyright">
            <div class="copyrightwrapper">
                <div class="copyrightleft">
                    <p>© 2022 <a href="#home">JualKucing</a>. All rights reserved.</p>
                </div>
                <div class="copyrightright">
                    <a href="#home"><i class="bi bi-arrow-up-square-fill"></i></a>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="assets/js/index.js"></script>
</html>