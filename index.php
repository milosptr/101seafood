<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/homepage.html';
        break;
    case '/about-us' :
        require __DIR__ . '/about-us.html';
        break;
    case '/products' :
      require __DIR__ . '/product.html';
      break;
    case strpos($request, 'product/') !== false:
      require __DIR__ . '/product-details.php';
      break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.html';
        break;
}
