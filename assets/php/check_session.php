<?php
if (!isset($_SESSION["user"])) {
    echo '<li><a href="login.php">Login</a></li>';
    echo '<li><a href="register.php"><button>Register</button></a></li>';
} else {
    echo '<li><a href="logout.php"><button>Logout</button></a></li>';
}
?>