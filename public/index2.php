<?php


chdir(dirname(__DIR__));

$data = require 'config/database.php';
$dns = $data['driver'].':dbname='.$data['database'].';host='.$data['host'];

$conn = new PDO($dns, $data['user'], $data['password'], $data['options']);
 
$stm = $conn->prepare('select * from posts');
$res = $stm->execute();
$tot = $stm->fetchAll(PDO::FETCH_OBJ);
print_r($tot);
die;
require_once __DIR__.'/../app/Controllers/PostController.php';

$controller = new App\Controllers\PostController();

$controller->show(1);
$controller->display();