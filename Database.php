<?php

// create a new database class
class  Database
{
    public $connection;
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
    public function query($data)
    {
        $statement = $this->connection->prepare($data);
        $statement->execute();
        return $statement->fetch( PDO::FETCH_ASSOC );
    }

}





