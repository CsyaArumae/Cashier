<?php
    session_start();
    unset($_SESSION['keranjang'][$_GET['id']]);
    header('location: checkout.php');
?>