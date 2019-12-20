<?php
session_start();
if (!isset($_SESSION['email'])){
 header('location: index 1.php');
}
session_unset();
session_destroy();
header('location: index 1.php');
?>