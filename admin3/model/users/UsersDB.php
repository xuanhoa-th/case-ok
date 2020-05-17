<?php


namespace Model;


class UsersDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function users($users){
        $sql = "INSERT INTO users(name,phone, address, email,password,status) VALUES (?,?,?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $users->name);
        $statement->bindParam(2, $users->phone);
        $statement->bindParam(3, $users->address);
        $statement->bindParam(4, $users->email);
        $statement->bindParam(5, $users->password);
        $statement->bindParam(6, $users->status);
        return $statement->execute();
    }
    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $users = [];
        foreach ($result as $row) {
            $user = new Users($row['name'], $row['phone'], $row['address'], $row['email'], $row['password'], $row['status']);
            $user->id = $row['id'];
            $users[] = $user;
        }
        return $users;
    }

    public function get($id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $user = new Users($row['name'], $row['phone'], $row['address'], $row['email'], $row['password'], $row['status']);
        $user->id = $row['id'];
        return $user;
    }

    public function deleteUsers($id){
        $sql = "DELETE FROM users WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id,$users){
        $sql = "UPDATE users SET name = ?, phone = ?, address = ?, email = ?, password = ?, status = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $users->name);
        $statement->bindParam(2, $users->phone);
        $statement->bindParam(3, $users->address);
        $statement->bindParam(4, $users->email);
        $statement->bindParam(5, $users->password);
        $statement->bindParam(6, $users->status);
        $statement->bindParam(7, $id);
        return $statement->execute();
    }







}



