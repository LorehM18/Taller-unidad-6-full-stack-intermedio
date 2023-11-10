<?php
$host="localhost";
$user="root";
$password="";
$bd="mi_proyecto";

$connection=new mysqli($host,$user,$password,$bd);

if($connection->connect_errno){
    echo "Fallos en conexion";
    exit();
}

?>