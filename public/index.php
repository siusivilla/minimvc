<?php

require_once __DIR__.'/../DB/DBPDO.php';
chdir(dirname(__DIR__));
 $data = require 'config/database.php';
 
$pdoConn = App\DB\DBPDO::getInstance($data);

 $conn = $pdoConn->getConn();
 
 $stm = $conn->query('select * from posts', PDO::FETCH_OBJ);
 
 if($stm){
     foreach ($stm->fetchAll() as $row){
         print_r($row);
     }
 }
 
 
 die();
require_once __DIR__.'/../app/Controllers/PostController.php';

$controller = new App\Controllers\PostController();

$controller->show(1);
$controller->display();