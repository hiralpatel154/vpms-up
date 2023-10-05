<?php
session_start();
header("Location: login.php");
?>

<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit();
}
?>