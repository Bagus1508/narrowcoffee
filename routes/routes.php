<?php
function route($url) {
    $project_location = "/narrowcafe";
    $dir = $project_location;

    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $dir.'/home' :
            require "pages/home.php";
            break;
        case $dir.'/menu' :
            require "pages/menu.php";
            break;
        case $dir.'/cart' :
            require "pages/cart.php";
            break;
        case $dir.'/checkout' :
            require "pages/checkout.php";
            break;
        case $dir.'/login' :
            require "pages/auth/login.php";
            break;
        case $dir.'/dashboard/admin' :
            require "pages/dashboard/index.php";
            break;
        case $dir.'/dashboard/pesanan' :
            require "pages/dashboard/order.php";
            break;
        case $dir.'/dashboard/transaksi' :
            require "pages/dashboard/transaction.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
}
