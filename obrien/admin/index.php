<?php

include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'shop':
            include '../views/shop/Shop.php';
            break;
        case 'product-detail':
            include '../views/shop/Product-detail.php';
            break;
        case 'cart':
            include '../views/shop/Cart.php';
            break;
        case 'checkout':
            include '../views/shop/Checkout.php';
            break;
        case 'account':
            include '../views/login/Account.php';
            break;
        case 'register':
            include '../views/login/Register.php';
            break;
        case 'login':
            include '../views/login/Login.php';
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
