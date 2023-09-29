<?php
require "Route/web.php";
// database connect/
require ('Database.php');


var_dump($_ENV =['DB_USERNAME']);



//create class
//class person{
//    public $name;
//    public $age;
//    public function berther(){
//     echo $this->name  ."imteaj";
//
//    }
//}
//$persn = new person();
//$persn->name= "imteaj";
//$persn->age= 23;
//$persn->berther();

$host = 'db';
$user = 'user';
$pass = 'pass';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}



