<?php
namespace Controller;

use Model\Category;
use Model\CategoryDB;
use Model\DBConnection;

class CategoryController
{
    public $CategoryDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->CategoryDB = new CategoryDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/category/add.php';
        } else {

            $name = $_POST['name'];

            $category = new Category($name);
            $this->CategoryDB->create($category);
            $message = 'Tạo mới thành công';
            include 'view/category/add.php';

        }
    }

    public function listCategory(){
        $categorys = $this->CategoryDB->getAll();
        include 'view/category/list.php';

    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $category = $this->CategoryDB->get($id);

            include 'view/category/delete.php';
        } else {
            $id = $_POST['id'];
            $this->CategoryDB->delete($id);
            echo "<script>window.location='./index.php?page=listCategory'</script>";
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $category = $this->CategoryDB->get($id);
            include 'view/category/edit.php';
        } else {
            $id = $_POST['id'];
            $category = new Category($_POST['name']);
            $this->CategoryDB->update($id, $category);
            echo "<script>window.location='./index.php?page=listCategory'</script>";
        }
    }



}