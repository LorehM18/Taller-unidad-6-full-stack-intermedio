<?php 
$name="";
$years=0;
$ageNow="";

if(isset($_POST["age"]) && isset($_POST["name"])){
$today=new DateTime();
$date=new DateTime(($_POST['age']));
$ageNow=$date->diff($today);
$years=$ageNow->y;
$name=$_POST["name"];

}
?>