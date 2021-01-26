<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;

$page = null;
$a = new ProductController();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
switch ($page) {
    case "list.php":
        $a->viewAllProduct();
        break;
    case "add-product":
        $a->addProducts();
        break;
    case "delete":
        $a->deleteProduct();
        break;
    default:
        $a->viewAllProduct();
}