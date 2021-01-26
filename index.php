<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;

$test = new ProductController();
$test->viewAllProduct();
$test->addProducts();

