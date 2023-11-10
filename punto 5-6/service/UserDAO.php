<?php 

include "connection.php";

function getAllUsers(){

     return mysqli_query(CONNECTION,"SELECT*FROM usuarios");
    
}

function getUserId($idNumber){
return mysqli_query(CONNECTION,"SELECT*FROM usuarios WHERE cedular=$idNumber");
}


//print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));

?>