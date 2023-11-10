<?php
$message="";

if($ages=isset($_POST["age"])){
   $age=$_POST["age"];
}

if($age>=18){
    $message="Es mayor de edad";
}else{
    $message="No es mayor de edad";
}

?>