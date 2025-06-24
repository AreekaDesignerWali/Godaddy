<?php
session_start();

if (isset($_POST['domain']) && isset($_SESSION['cart'])) {
    $domainToRemove = $_POST['domain'];
    $_SESSION['cart'] = array_filter($_SESSION['cart'], function($domain) use ($domainToRemove) {
        return $domain !== $domainToRemove;
    });
}

header("Location: cart.php");
exit;
