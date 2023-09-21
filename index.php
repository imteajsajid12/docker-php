<?php
//require "Route/web.php";
// database connect/


//create class
class person{
    public $name;
    public $age;
    public function berther(){
     echo $this->name  ."imteaj";

    }
}
$persn = new person();
$persn->name= "imteaj";
$persn->age= 23;
$persn->berther();
