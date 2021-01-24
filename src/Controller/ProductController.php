<?php

namespace App\Controller;
use App\Model\Product;
use App\Model\ProductManager;
class ProductController
{
protected $productManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
}

    public function viewAllProduct()
    {
 $products = $this->productManager->getAllProduct();
 include_once 'src/View/list.php';
}
}