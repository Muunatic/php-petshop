<?php
if (!isset($_SESSION["user"])) {
    echo '<li><a href="assets/php/login.php">Login</a></li>';
    echo '<li><a href="assets/php/register.php"><button>Register</button></a></li>';
} else {
    echo '<li><a href="assets/php/logout.php"><button>Logout</button></a></li>';
}
?>