<?php
namespace Model;

class AboutDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function create($about){
        $sql = "INSERT INTO about(name, image, content,status) VALUES (?,?,?,?)";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$about->name);
        $stmt->bindParam(2,$about->image);
        $stmt->bindParam(3,$about->content);
        $stmt->bindParam(4,$about->status);

        return $stmt->execute();

    }

    public function getAllAbout()
    {
        $sql = "SELECT * FROM about";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $abouts = [];
        foreach ($result as $row) {
            $about = new About($row['name'], $row['image'], $row['content'], $row['status']);
            $about->id = $row['id'];
            $abouts[] = $about;
        }
        return $abouts;
    }

    public function getAbout($id){
        $sql = "SELECT * FROM about WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $about = new About($row['name'], $row['image'], $row['content'], $row['status']);
        $about->id = $row['id'];
        return $about;
    }
    public function deleteAbout($id){
        $sql = "DELETE FROM about WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $about){
        $sql = "UPDATE about SET name = ?, image = ?, content = ?, status = ? WHERE id = ?";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $about->name);
        $statement->bindParam(2, $about->image);
        $statement->bindParam(3, $about->content);
        $statement->bindParam(4, $about->status);

        $statement->bindParam(5, $id);
        return $statement->execute();
    }

}