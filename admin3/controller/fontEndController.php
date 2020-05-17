<?php


namespace Controller;
use Model\CategoryDB;
use Model\DBConnection;
use Model\Product;
use Model\ProductDB;

class fontEndController
{
    public $ProductDB;
    public $CategoryDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->ProductDB = new ProductDB($connection->connect());
        $this->CategoryDB = new CategoryDB(($connection->connect()));
    }

    public function home()
    {
        $product = $this->ProductDB->getAllProduct();
        include 'view/fontend/home.php';
    }

}