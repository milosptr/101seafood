<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/homepage.php';
        break;
    case '/about-us' :
        require __DIR__ . '/about-us.php';
        break;
    case '/products' :
      require __DIR__ . '/products.php';
      break;
    case '/contact' :
      require __DIR__ . '/contact.php';
      break;
    case strpos($request, 'product/') !== false:
      require __DIR__ . '/product-details.php';
      break;
    case '/417':
      require __DIR__ . '/417.php';
      break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
