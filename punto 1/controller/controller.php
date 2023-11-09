<?php 
$result=0;

if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"])){


    $num1=intval($_POST["num1"]);
    $num2=intval($_POST["num2"]);
    $operation=($_POST["operation"]);

    switch($operation){
        case "suma":
            $result=$num1+$num2;
            break;
        case "resta":
            $result=$num1-$num2;
            break;
        case "multiplicacion":
            $result=$num1*$num2;
            break;
        case "division":
            if($num2!=0){
            $result=$num1/$num2;}else{
                echo "Error, no se puede divir en cero";
            }

            break;
        default:
         $result="Error";
    }
    }

?>