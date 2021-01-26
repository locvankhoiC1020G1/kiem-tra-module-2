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
        foreach ($data as $item) {

            $product = new Product($item['id'], $item['productname'], $item['category'], $item['price'], $item['amount'], $item['datecreate'], $item['productdescrible']);
            array_push($products, $product);

        }
        return $products;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO products(productname,category,price,amount,productdescrible) VALUES
             (?,?,?,?,?)";
        $stmt = $this->dbConnect->connectDB()->prepare($sql);
        $stmt->bindParam(1,$product->getProductname());
        $stmt->bindParam(2,$product->getCategory());
        $stmt->bindParam(3,$product->getPrice());
        $stmt->bindParam(4, $product->getAmount());
        /* $productDate = $product->getDatecreate();*/
        $stmt->bindParam(5,$product->getProductdescrible());
        $stmt->execute();
    }

    public function delete($id)
    {
$sql = "DELETE FROM `products` WHERE id=$id";
$go =$this->dbConnect->connectDB()->prepare($sql);
$go->execute();
}
}