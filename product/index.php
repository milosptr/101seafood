<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
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
