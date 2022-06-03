<?php 
$localhost = 'localhost';
$username= "root";
$password= "";
$name_DB = 'sipsev';
try{
    $cnx = new PDO("mysql:host=$localhost;dbname=$name_DB",$username,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id =  $cnx->lastInsertId();
}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}
?>