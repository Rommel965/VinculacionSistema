<?php

$user="root";
$pass="";
$host="localhost";
$db="empresas";
try{
    $pdo=new PDO('mysql:host=localhost; dbname=empresas', 'root', '');
    }catch(Exception $e){
    }


?>