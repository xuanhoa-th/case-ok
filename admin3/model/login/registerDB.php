<?php


namespace Model;


class registerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getRegister($register){
        $sql = "INSERT INTO users(name,phone, address, email,password) VALUES (?,?,?,?,?)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(1, $register->name);
        $statement->bindParam(2, $register->phone);
        $statement->bindParam(3, $register->address);
        $statement->bindParam(4, $register->email);
        $statement->bindParam(5, $register->password);
//        var_dump($statement->execute());
//        die();
        return $statement->execute();
    }

}