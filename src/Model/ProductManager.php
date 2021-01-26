<?php


namespace App\Model;


class ProductManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllProduct()
    {
        $sql = 'SELECT * FROM products';
        $go = $this->dbConnect->connectDB()->query($sql);
        $data = $go->fetchAll();
        $products = [];
        foreach ($data as $item){

            $product = new Product($item['id'],$item['productname'],$item['category'],$item['price'],$item['amount'],$item['datecreate'],$item['productdescrible']);
            array_push($products, $product);

        }
        return $products;
}
}