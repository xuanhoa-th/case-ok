<?php


namespace Controller;
use Model\AboutDB;
use Model\About;
use Model\DBConnection;


class AboutController
{
    public  $aboutDB;

    public function __construct()
    {
        $conn = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->aboutDB = new AboutDB($conn->connect());
    }

    public function addAbout(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/about/addAbount.php';
        } else {
            $name = $_REQUEST['name'];
            $content = $_REQUEST['content'];
            $status = $_REQUEST['status'];


            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/about/' . $fileName);

            $about = new About($name,$fileName,$content,$status);
            $this->aboutDB->create($about);
            $message = 'Tạo mới thành công';
            include 'view/about/addAbount.php';
        }
    }

    public function listAbout(){
        $about = $this->aboutDB->getAllAbout();
        include 'view/about/listAbout.php';
    }
    public function deleteAbout()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $about = $this->aboutDB->getAbout($id);
            include 'view/about/deleteAbout.php';
        } else {
            $id = $_POST['id'];
            $this->aboutDB->deleteAbout($id);
            echo "<script>window.location='./index.php?page=listAbout'</script>";
        }
    }
    public function editAbout()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $about = $this->aboutDB->getAbout($id);
            include 'view/about/editAbout.php';
        } else {
            $id = $_POST['id'];
            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/about/'. $fileName);
            $about = new About($_POST['name'], $fileName, $_POST['content'], $_POST['status']);
            $this->aboutDB->update($id, $about);
            echo "<script>window.location='./index.php?page=listAbout'</script>";
        }
    }

}