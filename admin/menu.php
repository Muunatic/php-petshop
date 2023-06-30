    <div id="home" class="mainnavbar">
        <div class="mainnavbarleft">
            <ul>
                <li style="display: inline-block; margin-right: 1rem;">
                    <p><i class="fa-solid fa-cat"></i> PetshopCeria</p>
                </li>
                <li style="display: inline-block; margin-right: 1rem;">|</li>
                <li style="display: inline-block;">
                    <p><i class="bi bi-whatsapp"></i> WhatsApp: <a href="https://whatsapp.com" style="color: crimson;">0812-3456-7890</a></p>
                </li>
            </ul>
        </div>
        <div class="mainnavbarright">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../menu.php">Product</a></li>
                <?php
                    if (!isset($_SESSION["user"])) {
                        echo '<li><a href="../login.php">Login</a></li>';
                        echo '<li><a href="../signup.php"><button>Register</button></a></li>';
                    } else {
                        echo '<li><a href="index.php">Admin</a></li>';
                        echo '<li><a href="../logout.php"><button>Logout</button></a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>

    <div id="homefixed" class="mainnavbar mainnavbarfixed">
        <div class="mainnavbarleft">
            <ul>
                <li style="display: inline-block; margin-right: 1rem;">
                    <p><i class="fa-solid fa-cat"></i> PetshopCeria</p>
                </li>
                <li style="display: inline-block; margin-right: 1rem;">|</li>
                <li style="display: inline-block;">
                    <p><i class="bi bi-whatsapp"></i> WhatsApp: <a href="https://whatsapp.com" style="color: crimson;">0812-3456-7890</a></p>
                </li>
            </ul>
        </div>
        <div class="mainnavbarright">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../menu.php">Product</a></li>
                <?php
                    if (!isset($_SESSION["user"])) {
                        echo '<li><a href="../login.php">Login</a></li>';
                        echo '<li><a href="../signup.php"><button>Register</button></a></li>';
                    } else {
                        echo '<li><a href="index.php">Admin</a></li>';
                        echo '<li><a href="../logout.php"><button>Logout</button></a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>