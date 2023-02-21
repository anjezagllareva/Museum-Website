<?php 

class MuseumsService{
    private $connection;

    function __construct()
    {
        $databaseConnection = new DatabaseConnection;
        $this->connection = $databaseConnection->startConnection();
    }

    function getMuseumByName($name){
        $databaseConnection = $this->connection;

        $sql = "SELECT * FROM museums WHERE name='$name'";

        $statement = $databaseConnection->query($sql);
        $museum = $statement->fetch();

        return $museum;
    }
}
?>