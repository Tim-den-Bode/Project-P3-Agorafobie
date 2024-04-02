<?php

class Database
{
    // Define private properties for database connection details
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;
    private $statement;
    private $dbHandler;
    private $error;

    /**
     * Database connection constructor
     * Establishes a connection with the database using PDO
     */
    public function __construct()
    {
        $this->dbHost = "localhost";
        $this->dbUser = "root";
        $this->dbPass = "";
        $this->dbName = "agorafobie";

        $connect = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        );

        try {
            $this->dbHandler = new PDO($connect, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    /**
     * Query command method
     * Prepares a SQL query for execution
     * @param string $sql The SQL query to be prepared
     */
    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    /**
     * Bind values method
     * Binds values to the parameters in the SQL query
     * @param string $parameter The parameter identifier
     * @param mixed $value The value to be bound
     * @param string|null $type The data type of the value (optional)
     */
    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    /**
     * Execute command method
     * Executes the prepared SQL query
     * @return bool Returns true if the query is executed successfully
     */
    public function execute()
    {
        return $this->statement->execute();
    }

    /**
     * Result set method
     * Returns an array of objects representing the query result
     * @return array An array of objects
     */
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Single result method
     * Returns a single object representing the query result
     * @return object|null A single object or null if no result is found
     */
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Row count method
     * Returns the number of rows affected by the last query
     * @return int The number of rows
     */
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}