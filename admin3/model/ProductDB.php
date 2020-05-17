<?php


namespace Model;
use Model\Category;
use Model\CategoryDB;


class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product){
        $sql = "INSERT INTO product(name,image,price,status,category_id) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->image);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->status);
        $statement->bindParam(5, $product->category_id);
        return $statement->execute();
    }

    public function getAllProduct()
    {
        $sql = "SELECT product_id,category.name as category_name,image,product.name, product.status,product.price FROM product JOIN category ON product.category_id = category.id ORDER BY `category_name` ASC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['image'], $row['price'],$row['status'],$row['category_name']);
            $product->id = $row['product_id'];
            $products[] = $product;
        }
        return $products;
    }

    public function getIdProduct($id){
        $sql = "SELECT * FROM product WHERE product_id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row = $stmt->fetch();

        $product = new Product($row['name'], $row['image'], $row['price'],$row['status'],$row['category_id']);
        $product->id = $row['product_id'];
        return $product;
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM product WHERE product_id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function update($id, $product){
        $sql = "UPDATE `product` SET `name`=?,`image`=?,`price`=?,`status`=?,`category_id`=? WHERE `product_id`=?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->image);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->status);
        $statement->bindParam(5, $product->category_id);
        $statement->bindParam(6, $id);
        return $statement->execute();
    }



}