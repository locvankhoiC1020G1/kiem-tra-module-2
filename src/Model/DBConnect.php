<?php

namespace App\Model;
use PDO;
class DBConnect
{
protected $dsn;
protected $user;
protected $password;
public function __construct()
{
    $this->dsn = 'mysql:host=localhost;dbname=productmanager2;charset=utf8';
    $this->user = 'root';
    $this->password = 'Locv@nkhoi1';
}

    public function connectDB()
    {
        try{
            $conn = new PDO($this->dsn,$this->user,$this->password);
            echo "ket noi thanh cong";
            return $conn;
        }
        catch (\Exception $exception){
            echo $exception->getMessage();
        }
}
}