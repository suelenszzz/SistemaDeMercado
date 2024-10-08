<?php 
$pdo= new PDO("mysql:dbname=mercadinho; host=localhost:3306", "root","cimatec");

if ($pdo){
    echo("banco conectado");
}

?>