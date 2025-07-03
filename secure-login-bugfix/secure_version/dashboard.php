<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit();
}
echo "<h2>Welcome, you are logged in securely!</h2>";
