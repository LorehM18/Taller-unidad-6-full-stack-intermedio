<?php
$message="";
$ages=(($_POST["age"]));


if($ages>=18){
    $message="Es mayor de edad";
}else{
    $message="No es mayor de edad";
}
?>