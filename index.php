<?php
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($url === '/')
{
    require ('./view/index.view.php');

}
if ($url === '/about') {
   
    require('./view/index.view.php');
}

