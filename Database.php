<?php

// create a new database class
class  Database
{
    public $connection;
    public $statment;

    public function __construct($username = 'user', $password = 'pass')
    {
        $config = [
            'host' => 'db',
            'port' => '3306',
            'user' => 'user',
            'password' => 'pass',
            'dbname' => 'database'
        ];

        $con = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new  PDO($con, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($data, $perams = [])
    {
        $this->statment = $this->connection->prepare($data);
        $this->statment->execute();
        return $this;
    }

    public function find()
    {
        return $this->statment->fetch();
    }

    public function FindOrFail()
    {
        $result = $this->find();
        if (!$result) {
            abord(404);
        }
        return $result;
    }
    public  function get(){
       return $this->statment->fetch();
    }
    //all
    public function all()
    {
       return $this->statment->fetchAll();
    }
}





