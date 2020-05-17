<?php


namespace Model;


class LoginDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function loginUser($login){
        $sql = "SELECT * FROM users  WHERE email = ? AND password = ? ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $login->email);
        $statement->bindParam(2, $login->password);
         $statement->execute();
        $result = $statement->fetch();
        if (isset($result)) {
            $_SESSION['isAuth'] = $result;
        } else {
           $_SESSION['error - login'] = "tai khoan khong dung";

            echo "<script>window.location='./index.php?page=login'</script>";
        }
    }
    public function logoutUser(){
        unset($_SESSION['isAuth']);
    }

}