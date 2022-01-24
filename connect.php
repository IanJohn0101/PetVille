<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'petsociety'; 
$dbh = '';

try{
    $dbh = 'mysql:host=' .$host. ';dbname=' .$dbname;
    $pdo = new PDO($dbh, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'connection failed: '.$e->getMessage();
}
?>