<?php


namespace Controller;
use Model\Users;
use Model\UsersDB;
use Model\DBConnection;

class UsersController
{
    public $usersDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->usersDB = new UsersDB($connection->connect());
    }

    public function addUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/users/addUsers.php';
        } else {

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $status = $_POST['status'];

            $users = new Users($name,$phone,$address,$email,$password,$status);
            $this->usersDB->users($users);
            $message = 'Tao moi thanh cong';
            include 'view/users/addUsers.php';
        }
    }
    public function listUsers(){
        $users = $this->usersDB->getAllUsers();
        include 'view/users/listUsers.php';
    }

    public function deleteUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $user = $this->usersDB->get($id);
            include 'view/users/deleteUsers.php';
        } else {
            $id = $_POST['id'];
            $this->usersDB->deleteUsers($id);
            echo "<script>window.location='./index.php?page=listUsers'</script>";
        }
    }

    public function editUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $users = $this->usersDB->get($id);
            include 'view/users/editUsers.php';
        } else {
            $id = $_POST['id'];
            $users = new Users($_POST['name'], $_POST['phone'], $_POST['address'], $_POST['email'], $_POST['password'], $_POST['status']);
            $this->usersDB->update($id, $users);
            echo "<script>window.location='./index.php?page=listUsers'</script>";
        }
    }





}