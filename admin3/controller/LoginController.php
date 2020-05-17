<?php


namespace Controller;
use Model\Login;
use Model\LoginDB;
use Model\DBConnection;
use Model\register;
use Model\registerDB;

class LoginController
{
    public $loginDB;
    public $registerDB;

    public function __construct()
    {
        $conn = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->loginDB = new LoginDB($conn->connect());
        $this->registerDB = new registerDB($conn->connect());
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/login/login.php';
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $login = new Login( $email,$password);
            $this->loginDB->loginUser($login);
            echo "<script>window.location='./index.php?page=listProduct'</script>";
        }
    }
    public function logout(){
        $this->loginDB->logoutUser();
        echo "<script>window.location='./index.php?page=login'</script>";
    }
    public function register(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/login/register.php';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];

            $register = new register($name,$phone,$address,$email,$password);
//            var_dump($register);
//            die();
            $this->registerDB->getRegister($register);
            $alert = "Đăng kí thành công";
            echo "<script>window.location='./index.php?page=login'</script>";

        }
    }


}