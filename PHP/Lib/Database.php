<?php

class Database
{
    // Declaring private properties
    private $host = 'localhost';
    private $db = 'agorafobie';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $dsn;
    private $pdo;
    private $stmt;

    // Constructing the Database class
    public function __construct()
    {
        // Setting the DSN (Data Source Name)
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";

        // Trying to connect to the database
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->pass);

            // Disabling emulated prepared statements
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            // Setting the error mode to PDO::ERRMODE_EXCEPTION
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {
            // Displaying an error message if the connection fails
            echo 'Error: Connection failed. Details: ' . $e->getMessage();
            exit;
        }
    }

    // Preparing a query for execution
    public function query($query, $params = [])
    {
        // Preparing the query
        $this->stmt = $this->pdo->prepare($query);

        // Binding the parameters to the query
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $this->stmt->bindValue("$key", $value);
            }
        }

        return $this->stmt;
    }

    // Executing a query
    public function execute($result)
    {
        return $this->stmt->execute();
    }

    // Fetching a single column from the query result
    public function fetchColumn($result)
    {
        // Executing the query
        $this->execute($result);

        // Fetching a single column from the query result
        return $this->stmt->fetchColumn();
    }

    // Fetching the number of rows affected by the query
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}

?>