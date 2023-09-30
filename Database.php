<?php

// create a new database class
class  Database
{

    public $connection;

    public function __construct()
    {

//        $config = [
//            'host' => 'db',
//            'user' => 'user',
//            'pass' => 'pass',
//            'db' => 'database'
//        ];

//    $con= 'mysql:'. http_build_query($config,'',';');
//    var_dump($con);


//        $dsn = "mysql:host=localhost;port=3306;dbname= database;user=user;password=pass";
//
//        $pdo = new  PDO($dsn);
//        $statement  = $pdo->prepare("SELECT * FROM  posts");
//        $statement->execute();
//        return $statement->fetchAll( PDO::FETCH_ASSOC);






//        $den = 'mysql:' . http_build_query($data, '', ';');

    //database connection
//        $this ->connection = new PDO($den,$username,$password,$database,
//        [
//          PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC
//        ]);

//        public function query( $query)
//    {
////        $statement = $this->connection->prepare($query);
//        $statement->execute();
//        return $statement->fetchAll(PDO::FETCH_ASSOC);
//    }



    }
    public function query(){
//        $statement = $this->connection->prepare("select * from  posts");
//        $statement->execute();

        $dsn = "mysql:host=db;port=3306;dbname=database;user=user;password=pass;";

        $this->connection= new  PDO($dsn,'user','pass',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);


        $statement  = $this->connection->prepare("SELECT * FROM  posts");
        $statement->execute();
        return $statement->fetchAll();
    }

}
$db=new Database();
$post = $db->query();
var_dump($post);

