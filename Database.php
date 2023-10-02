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
    public function query()
    {
        $statement = $this->connection->prepare("SELECT * FROM  users");
        $statement->execute();
        return $statement->fetchAll( PDO::FETCH_ASSOC );
    }

}

$db = new Database();
$post = $db->query();
//var_dump($post);

foreach ($post as $item) {
    echo $item['name'];
}



