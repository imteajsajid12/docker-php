<?php

$data = [
    'name' => "Laracst",
    'cost' => 59
];


//conditions
if ($data['cost'] > 99) {
    echo "not intersted";
}

//create function
function test()
{

}

require "view/index.view.php";