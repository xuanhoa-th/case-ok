<?php


namespace Controller;

use Model\Product;
use Model\ProductDB;
use Model\DBConnection;
use Model\Category;
use Model\CategoryDB;

class ProcuctController
{
    public $ProductDB;
    public $CategoryDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->ProductDB = new ProductDB($connection->connect());
        $this->CategoryDB = new CategoryDB(($connection->connect()));
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $category = $this->CategoryDB->getAll();
            include 'view/product/add.php';
        } else {

            $name = $_POST['name'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $category_id = $_REQUEST['category_id'];
            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/product/' . $fileName);
            $product = new Product($name, $fileName, $price, $status, $category_id);


            $this->ProductDB->create($product);


            $message = 'Tạo mới thành công';
            include 'view/product/add.php';
        }
    }

    public function listProduct()
    {
        $product = $this->ProductDB->getAllProduct();
        include 'view/product/listProduct.php';
    }

    public function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->ProductDB->getIdProduct($id);
            include 'view/product/deleteProduct.php';
        } else {
            $id = $_POST['id'];
            $this->ProductDB->deleteProduct($id);
            echo "<script>window.location='./index.php?page=listProduct'</script>";
        }
    }

    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];

            $category = $this->CategoryDB->getAll();
            $product = $this->ProductDB->getIdProduct($id);
            $_SESSION['image'] = $product->image;


            include 'view/product/editProduct.php';
        } else {
            $id = $_POST['id'];
            if ($_FILES['image']['name'] == '') {
//                var_dump($_SESSION['image']);
//                die();
                $image = $_SESSION['image'];
                $product = new Product($_POST['name'], $image, $_POST['price'], $_POST['status'], $_POST['category_id']);

            } else {
                $file = $_FILES['image'];
                $fileName = $file['name'];
                move_uploaded_file($file['tmp_name'], 'uploads/product/' . $fileName);
                $product = new Product($_POST['name'], $fileName, $_POST['price'], $_POST['status'], $_POST['category_id']);
            }

            $this->ProductDB->update($id, $product);
            echo "<script>window.location='./index.php?page=listProduct'</script>";
        }
    }
}
