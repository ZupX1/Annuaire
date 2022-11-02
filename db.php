<?php

$host='localhost';
$port=3306;
$dbname='annuaire';
$user='root';
$pwd='';


try{
    $newBD= new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd);
} catch(PDOException $e){
    die('Erreur de connexion :'.$e->getMessage());
}