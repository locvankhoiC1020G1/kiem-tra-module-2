<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductManager;

class ProductController
{
    protected ProductManager $productManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
    }

    public function viewAllProduct()
    {
        $products = $this->productManager->getAllProduct();
        include_once 'src/View/list.php';
    }

    public function addProducts()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/View/add-product.php';
        } else {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            /*      $date = $_POST['date'];*/
            $describle = $_POST['describle'];

            $product = new Product(null, $name, $category, $price, $amount, null, $describle);
            $this->productManager->addProduct($product);
            header('Location: index.php');
        }
    }
}