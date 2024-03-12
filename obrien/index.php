<?php

// include "views/header.php";
// if (isset($_GET['act'])) {
//     $act = $_GET['act'];
//     switch ($act) {
//         case 'shop':
//             include './views/shop/Shop.php';
//             break;
//         case 'product-detail':
//             include './views/shop/Product-detail.php';
//             break;
//         case 'cart':
//             include './views/shop/Cart.php';
//             break;
//         case 'checkout':
//             include './views/shop/Checkout.php';
//             break;
//         case 'account':
//             include './views/login/Account.php';
//             break;
//         case 'register':
//             include './views/login/Register.php';
//             break;
//         case 'login':
//             include './views/login/Login.php';
//             break;
//     }
// } else {
//     include "views/home.php";
// }
// include "views/footer.php";

//Require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';

// Require file trong controller và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

//Điều hướng
$act= $_GET['act'] ?? '/';



require_once './commons/disconnect-db.php';
