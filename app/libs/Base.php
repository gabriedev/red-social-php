<?php
session_start();

class Base
{

    private $host = HOST;
    private $dbname = DBNAME;
    private $user = USER;
    private $password = PASSWORD;
    private $driver = DRIVER;

    protected $cnx;
    protected $stmt;
    protected $error;
    protected $dbh;
    protected $options;

    public function __construct()
    {
        $this->dbh = $this->driver . ':host=' . $this->host . ';dbname=' . $this->dbname;

        $this->options = [
            PDO::ATTR_ERRMODE => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->cnx = new PDO($this->dbh , $this->user , $this->password , $this->options);
            $this->cnx->exec('set names utf8');
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    
    public function query($query)
    {
        $this->stmt = $this->cnx->prepare($query);
    }

    public function bind($params , $value , $type = null)
    {
        if(is_null($type)) {
            switch(true) {
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        return $this->stmt->bindValue($params , $value , $type);
    }

    public function execute()
    {
       return $this->stmt->execute();
    }

    public function register()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    public function registers()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function countRows()
    {
        $this->execute();
        return $this->stmt->count();
    }

    public function lastValue() {
        return $this->stmt->lastInsertId();
    }
}