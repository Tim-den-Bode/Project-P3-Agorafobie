<?php

class Database
{
    private $host = 'localhost';
    private $db = 'agorafobie';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $dsn;
    private $pdo;
    private $stmt;

    public function __construct()
    {
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'Error: Connection failed. Details: ' . $e->getMessage();
            exit;
        }
    }

    public function query($query, $params = [])
    {
        $this->stmt = $this->pdo->prepare($query);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $this->stmt->bindValue("$key", $value);
            }
        }

        return $this->stmt;
    }

    public function execute($result)
    {
        return $this->stmt->execute();
    }

    public function fetchColumn($result)
    {
        $this->execute($result);
        return $this->stmt->fetchColumn();
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}

?>